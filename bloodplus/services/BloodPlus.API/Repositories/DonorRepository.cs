﻿using BloodPlus.API.Models;
using BloodPlus.Database;
using BloodPlus.Database.Entities;
using BloodPlus.Utility.CustomResponse;
using Microsoft.EntityFrameworkCore;
using System;
using System.Linq;
using System.Threading.Tasks;

namespace BloodPlus.API.Repositories
{
    public interface IDonorRepository
    {
        Task<Donor> GetAsync(int cityId, int bloodGroupId);

        Task AddAsync(DonorDto.Request request);

        Task<ApiResponse> UpdateStatusAsync(int donorId, int statusId);
    }

    public class DonorRepository : BaseRepository, IDonorRepository
    {
        public DonorRepository(BloodPlusDatabaseContext dbContext) : base(dbContext)
        {
        }

        public async Task<Donor> GetAsync(int cityId, int bloodGroupId)
        {
            return await DbContext.Donors
                .Where(x =>
                    x.BloodGroupId == bloodGroupId
                    && (x.UnavailableTill == null || x.UnavailableTill < DateTime.Now.Date)
                    && x.Cities.Any(c => c.Id == cityId))
                .OrderBy(x => Guid.NewGuid())
                .FirstOrDefaultAsync();
        }

        public async Task AddAsync(DonorDto.Request request)
        {
            var donor = DbContext.Donors
                .Include(x => x.Cities)
                .FirstOrDefault(x => x.Contact == request.Contact);

            if (donor == null)
            {
                await DbContext.Donors.AddAsync(new Donor
                {
                    Contact = request.Contact,
                    Cities = DbContext.Cities.Where(x => x.Id == request.CityId).ToList(),
                    BirthDate = request.BirthDate,
                    BloodGroupId = request.BloodGroupId,
                    GenderId = request.GenderId,
                    FirstName = request.FirstName,
                    LastName = request.LastName,
                    DonorStatus = DbContext.DonorStatus.FirstOrDefault(x => x.Id == request.StatusId)
                });

                await DbContext.SaveChangesAsync();
                return;
            }

            var cityExists = donor.Cities.Any(x => x.Id == request.CityId);

            if (!cityExists)
            {
                var cityToAdd = await DbContext.Cities.FirstOrDefaultAsync(x => x.Id == request.CityId);
                donor.Cities.Add(cityToAdd);
                await DbContext.SaveChangesAsync();
            }
        }

        public async Task<ApiResponse> UpdateStatusAsync(int donorId, int statusId)
        {
            var donor = await DbContext.Donors
                .FirstOrDefaultAsync(x => x.Id == donorId && x.DonorStatus.Id == statusId);

            if (donor == null)
                return new ApiBadResponse("Invalid Donor or Status");
                
            donor.DonorStatus = donor.DonorStatus;
            donor.UnavailableTill = statusId == 1
                ? null
                : (DateTime?)DateTime.Now.AddDays(donor.DonorStatus.UnavailableForDays.Value + 1).Date;

            await DbContext.SaveChangesAsync();
            return new ApiOkResponse(true);
        }
    }
}
