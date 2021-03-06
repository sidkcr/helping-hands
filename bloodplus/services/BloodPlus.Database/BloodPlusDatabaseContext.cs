﻿using BloodPlus.Database.DataSeeds;
using BloodPlus.Database.Entities;
using Microsoft.EntityFrameworkCore;

namespace BloodPlus.Database
{
    public class BloodPlusDatabaseContext : DbContext
    {
        public BloodPlusDatabaseContext(DbContextOptions<BloodPlusDatabaseContext> options) : base(options)
        {
        }

        public DbSet<Country> Countries { get; set; }
        public DbSet<Donor> Donors { get; set; }
        public DbSet<LookupType> LookupTypes { get; set; }
        public DbSet<LookupValue> LookupValues { get; set; }
        public DbSet<State> States { get; set; }
        public DbSet<UserActivityLog> UserActivityLogs { get; set; }
        public DbSet<City> Cities { get; set; }
        public DbSet<DonorStatus> DonorStatus { get; set; }

        protected override void OnModelCreating(ModelBuilder modelBuilder)
        {
            modelBuilder.Entity<Country>()
                .HasIndex(x => x.Name)
                .IsUnique();

            modelBuilder.Entity<State>()
                .HasIndex(x => new {x.CountryId, x.Name})
                .IsUnique();

            modelBuilder.Entity<City>()
                .HasIndex(x => new {x.StateId, x.Name})
                .IsUnique();

            modelBuilder.Entity<LookupValue>()
                .HasIndex(x => new {x.LookupTypeId, x.Value})
                .IsUnique();

            modelBuilder.Entity<LookupType>()
                .HasIndex(x => x.Name)
                .IsUnique();

            modelBuilder.Entity<Donor>()
                .HasIndex(x => x.Contact)
                .IsUnique();

            modelBuilder.Entity<UserActivityLog>()
                .HasNoKey();

            modelBuilder.Entity<DonorStatus>()
                .HasIndex(x => x.Status)
                .IsUnique();

            modelBuilder.ApplyConfiguration(new LookupTypes());
            modelBuilder.ApplyConfiguration(new LookupValues());
            modelBuilder.ApplyConfiguration(new Countries());
            modelBuilder.ApplyConfiguration(new DonorStatuses());
        }
    }
}
