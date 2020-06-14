<?php 
include('dbconnection.php');
if(isset($_REQUEST['name']) && isset($_REQUEST['email']) && isset($_REQUEST['msg']))
{
$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$msg=$_REQUEST['msg'];
$to = 'helpinghandsrpr@gmail.com';
$subject= 'Contact form submitted';
$body= $msg;
$header='From: '.$email;
if(@mail($to, $subject, $body, $header))
{
echo "<script>alert('Thanks For Contact Us.We Will be in Touch Soon.')</script>";
}
else
{
echo "<script>alert('Sorry, an error occurred.Please Try Again Later.')</script>";
}
}

?>



<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Helping Hands</title>


	<meta name="author" content="CodexCoder">

	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
	
	<!-- Modernizr js -->
	<script src="assets/js/modernizr-2.8.0.min.js"></script>

	<!-- Bootstrap  -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">

	<!-- icon fonts font Awesome -->
	<link href="assets/css/font-awesome.min.css" rel="stylesheet">

	<!-- icon fonts linecons -->
	<link href="assets/css/linecons-font-style.css" rel="stylesheet">

	<!-- Custom Styles -->
	<link href="assets/css/style.css" rel="stylesheet">

<link rel="stylesheet" href="assets/css/lightbox.css" type="text/css" media="screen" />

	<!-- Responsive Styles -->
	<link href="assets/css/responsive.css" rel="stylesheet">

	<!-- Important owl stylesheet -->
	<link rel="stylesheet" href="assets/css/owl.carousel.css">

	<!-- Important prettyPhoto stylesheet -->
	<link rel="stylesheet" href="assets/css/prettyPhoto.css">
<link href="elements.css" rel="stylesheet">
	<!-- favicon --> 
	<link rel="shortcut icon" href="images/favicon.png">
<script src="my_js.js"></script>

 <script>
function popupCenter(url, title, w, k) 
{
var m=screen.height;
var h=m-150;
var left = (screen.width/2)-(w/2);
var top = 10;

return window.open(url, title, 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, copyhistory=no, width='+w+', height='+h+', top='+top+', left='+left);
} 
</script>


</head>
	<body> 
	
	<!--      popup div   -->
	
	
	
	
		<!-- Main Menu -->
		<div class="main-menu-container navbar-fixed-top">
			<div id="main-menu" class="navbar navbar-default" role="navigation">
				<div class="container">
					
					<div class="navbar-header">
						<!-- responsive navigation -->
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="sr-only">Toggle navigation</span>
							<i class="fa fa-bars"></i>
						</button> <!-- /.navbar-toggle -->
						<!-- Logo -->
						<h1>
						
							<a class="navbar-brand" href="index.html">
								<img class="logo" src="assets/images/logo.png" alt="Logo" rel="hoome" >
							</a><!-- /.navbar-brand -->
						</h1>
					</div> <!-- /.navbar-header -->

					<nav class="collapse navbar-collapse">
						<!-- Main navigation -->
						<ul id="headernavigation" class="nav navbar-nav pull-right">
							<li><a href="index.html#about">About</a></li>
							<li><a href="index.html#mission">Our Mission</a></li>
				            <li><a href="index.html#gallery">Gallery</a></li>
					      <li><a href="index.html#news">News</a></li>
							<li><a href="index.html#upcoming-events">Events</a></li>
							<li><a href="index.html#contact">Contact</a></li>
	                                    <li><a href="index.html#volunteer">Become a Member</a></li>
							<li><a href="index.html#donate" class="donate">Donate <i class="fa fa-heart"></i></a></li>
						</ul> <!-- /.nav .navbar-nav -->
					</nav> <!-- /.navbar-collapse  -->
				</div> <!-- /.container -->
			</div><!-- /#main-menu -->
		</div><!-- /.main-menu-container -->
		<!-- Main Menu End -->




		<!-- Top Slider -->
		<section id="top-section" >
			<div class="top-section parallax-style">
				<div class="parallax-overlay">
					<div class="slider-txt-container">
						<div id="top-carousel" class="carousel slide" data-ride="carousel">

							<ol class="carousel-indicators">
								<li data-target="#top-carousel" data-slide-to="0" class="active"></li>
								<li data-target="#top-carousel" data-slide-to="1"></li>
								<li data-target="#top-carousel" data-slide-to="2"></li>
							</ol><!-- /.carousel-indicators -->
							<div class="carousel-inner">

								<div class="item active">
									<h2 class="thin-txt">
										We are for All
									</h2><!-- /.thin-text -->	
									<p class="bold-txt">
										Charity / Childcare / Nature
									</p><!-- /.thin-text -->
									<p class="thin-txt">
										Lets Make a better planet
									</p><!-- /.thin-text -->

									<p class="link">
										<a href="index.html#about" class="btn custom-btn ">Learn More</a>
									</p> 				
								</div><!-- /.item -->

								<div class="item">
									<h2 class="thin-txt">
										A NON PROFIT ORGANIZATION
									</h2><!-- /.thin-text -->	
									<p class="bold-txt">
										To Protect  humanity 
									</p><!-- /.thin-text -->
									<p class="thin-txt">
										Let's Move on
									</p><!-- /.thin-text -->

									<p class="link">
										<a href="index.html#about" class="btn custom-btn ">Learn More</a>
									</p> 				
								</div><!-- /.item -->

								<div class="item">
									<h2 class="thin-txt">
										Children's are future
									</h2><!-- /.thin-text -->	
									<p class="bold-txt">
										WE PROTECT Children
									</p><!-- /.thin-text -->
									<p class="thin-txt">
										Come with us
									</p><!-- /.thin-text -->

									<p class="link">
										<a href="index.html#about" class="btn custom-btn ">Learn More</a>
									</p> 
								</div><!-- /.item -->
							</div><!-- /.carousel-inner -->
							<a class="slide-nav left" href="index.html#top-carousel" data-slide="prev"><span></span></a>
							<a class="slide-nav right" href="index.html#top-carousel" data-slide="next"><span></span></a>
						</div><!-- /#top-carousel -->
					</div><!-- /.slider-txt-container -->
				</div><!-- /.parallax-overlay -->
			</div><!-- /.top-section -->
		</section><!-- /#top-section -->
		<!-- Top Slider End-->



		<!-- About Section -->
		<section id="about">
			<div class="about-section"> 
				<div class="white-bg  section-padding">
					<div class="top-angle">
					</div><!-- /.top-angle -->
					<div class="container">
						<div class="section-head">
							<h2 class="section-title">About</h2>
							<p class="section-description">
								<strong>HELPING HANDS IS THE ASSOCIATION OF STUDENTS UNITED FOR THE MISSION OF CHARITY. OUR FIELD OF CHARITY IS HELPING ORPHAN AND DISABLE CHILDREN.<br></strong><strong><br>ANY WILLING PERSON CAN CONTRIBUTE IN TERMS OF CASH OR KINDS WHICH IS DIRECTLY DISTRIBUTED TO BENIFICIARIES THROUGH THE MEMBERS OF HELPING HANDS.</strong>
							</p><!-- /.section-description -->
						</div><!-- /.section-head -->

						<div class="section-content">
							<div class="row">
								<div class="content-box col-md-8 from-bottom delay-200">
									<div class="hex content-icon-hex pull-left">
										<div class="content-icon">
											<span aria-hidden="true" class="li_bulb"></span>
										</div>
									</div><!-- /.content-icon-hex -->
									<h3 class="content-title">Our Story</h3>
									<p class="about_new">
										Helping Hands is a youth wing initiated by a group of students in 2012. It gradually turned into an NGO which accepted more than 300 memberships merely through network of friends. Today not only students or youth but professionals from different fields who genuinely offer their services for the needy are also connected with us. We started with a single motive in our hand and that was to lend a 
hand for help to those who need it. Our group believed and aimed to first lend help to those who usually are around us but mostly one fails to see.
									</p>
									<p class="about_new">
									In these 3 years of working Helping Hands has organized different events for raising charity fund for needy ashrams, environment protection, bringing upfront the talent of special children, forming a recycling chain of books and stationery, initiating free teaching and library services in Rajim. Helping Hands branches are at Raipur, Bilaspur, Rajim and Dhamtri.
Besides this our organization tries to celebrate  birthdays of its each member and festivals in orphanages, old age homes and other ashrams.
									</p>
<br>
								</div><!-- /.content-box -->


								<div class="media-content media-right col-md-4 from-bottom delay-600">
									<div class="meida-container">
										<div id="about-img-carousel" class="about-img-carousel carousel slide" data-ride="carousel">
											<ol class="carousel-indicators">
												<li data-target="#about-img-carousel" data-slide-to="0" class="active"></li>
												<li data-target="#about-img-carousel" data-slide-to="1"></li>
												<li data-target="#about-img-carousel" data-slide-to="2"></li>
											</ol><!-- /.carousel-indicators -->
											<div class="carousel-inner">

												<div class="item active">
													<img src="images/about-carousel/01.jpg" alt="carousel image">
												</div><!-- /.item -->
												<div class="item">
													<img src="images/about-carousel/02.jpg" alt="carousel image">	
												</div><!-- /.item -->
												<div class="item">
													<img src="images/about-carousel/03.jpg" alt="carousel image">
												</div><!-- /.item -->
											</div><!-- /.carousel-inner -->
										</div><!-- /#about-img-carousel -->
									</div><!-- /.meida-container -->
								</div><!-- /.media-content -->
							</div><!-- row -->
						</div><!-- /.section-content -->
					</div><!-- /.container -->
				</div><!-- /.white-bg -->

			</div><!-- /.about-section -->
		</section><!-- /#about-->
		<!-- About Section End -->
		
		<section id="mission">
				<div class="gray-bg  section-padding">
					<div class="top-angle"></div>
					<div class="container">
						<div class="row">
							<div class="section-content">
								<div class="media-content media-left col-md-4 from-bottom delay-200">
									<div class="meida-container video-container">
										<img src="images/about-carousel/mission.jpg" >
									</div><!-- /.meida-container -->
								</div><!-- /.media-content -->

								<div class="content-box col-md-8 from-bottom delay-600">
									<div class="hex content-icon-hex pull-left">
										<div class="content-icon">
											<span aria-hidden="true" class="li_params"></span>
										</div>
									</div>
									<h3 class="content-title">Our Mission</h3>
									<p class="justify">
										<strong>We dream about a new world for the children with no harm. We are aiming to build a strong and a bouncing platform where anyone can work for children worldwide.</strong>
									</p>
									<p class="justify">
										Together, we're going to make the future of the children where we are able to fulfill all of their requirements to keep them safe from withered world. We have already stepped out and start changing the world. Keeping safe them from war, inhumanity, Child labor, child abuse and more what we feel harmful for them.
									</p>
								</div><!-- /.content-box -->
							</div><!-- /.section-content -->
						</div><!-- /.row -->
					</div><!-- /.container -->

				</div><!-- ./gray-bg -->
		</section>
		
	<section id="volunteer">
			<div class="volunteer-section">
				<div class="gray-bg  section-padding">

					<div class="top-angle">
					</div><!-- /.top-angle -->

					<div class="container">
						<div class="row">
							<div class="section-content">
							
<div id="abc">
<!-- Popup Div Starts Here -->

<!-- Popup Div Ends Here -->
</div>

								<div class="content-box col-md-8 from-bottom delay-600">
									<div class="hex content-icon-hex pull-left">
										<div class="content-icon">
											<span aria-hidden="true" class="li_user"></span>
										</div>
									</div><!-- /.content-icon-hex -->
									<h3 class="content-title">Become a Member With Us:</h3>
									<p class="justify">
										<strong>Do you like to work for children? Do you feel the slogan "Save the Children". Yes. Here, you are welcome to our team and you can work as a volunteer.</strong>
									</p>
									<p class="justify">
										At first, you have to submit your information and apply for becoming a volunteer. We will review your information within a few days and then contact with you. After finalizing your information, a confirmation message will send to you with necessary documents. 
									</p>
									<p>
						<button class="btn custom-btn " onclick="popupCenter('sign.php','mywindow',685,680)">APPLY NOW</button>
							</p><br>
								</div><!-- /.content-box -->
									<div class="media-content media-left col-md-4 from-bottom delay-200">
									<div class="meida-container">
										<img src="images/team.png" alt="volunteer">
									</div><!-- /.meida-container -->
								</div><!-- /.media-content -->
							</div><!-- /.section-content -->
						</div><!-- /.row -->
					</div><!-- /.container -->
					<div class="bottom-angle">
					</div><!-- /.bottom-angle -->
				</div><!-- ./gray-bg -->
			</div><!-- /.volunteer-section -->
		</section><!-- /#volunteer -->
		<!-- Volunteer Section End -->


		<!-- Gallery Section -->
		<section id="gallery">
			<div class="gallery-section white-bg  section-padding">
				<div class="top-angle">
				</div><!-- /.top-angle -->
				<div class="container">
					<div class="section-head">
						<h2 class="section-title">
							Gallery
						</h2><!-- /.section-title -->
						
					</div><!-- /.section-head -->

					<div id="gallery-container" class="gallery-container">
						<div class="galleryFilter">
						<a href="index.html#" data-filter="" class="current">All</a>
							<a href="index.html#" data-filter=".cat-1">Childrens</a>
							
						</div> <!-- /.galleryFilter -->

						<div class="gallery-item element-from-bottom">
						
								<a href="images/gallery-images/pr-image-1.png"  rel="lightbox[roadtrip]">
								<a href="images/gallery-images/dil/1.jpg" rel="lightbox[roadtrip]">
							    <a href="images/gallery-images/dil/2.jpg" rel="lightbox[roadtrip]">
							  <a href="images/gallery-images/dil/3.jpg" rel="lightbox[roadtrip]">
								<figure class="item">
							<img src="images/gallery-images/thumb/pr-image-1.png" alt="Item 3">
							
						
							
								<figcaption class="item-description gallery1">
									<h4 class="item-title">
										Dil Ki Taal Pe Dance
									</h4><!-- /.item-title -->
									<p class="gallery-item-description">
										Charitable Dance Competition
									</p><!-- /.gallery-item-description -->
								</figcaption>
							</figure></a></a></a></a>

							<a href="images/gallery-images/pr-image-2.jpg" rel="lightbox[roadtrip]"><figure class="item">
								<img src="images/gallery-images/thumb/pr-image-2.jpg" alt="Item 4">
								<div class="item-link">
									
								</div><!-- /.item-link -->
								<figcaption class="item-description gallery1">
									<h4 class="item-title">
									Pravaah
									</h4><!-- /.item-title -->
									<p class="gallery-item-description gallery1">
                              Books & Cloths Collection Distribution
									</p><!-- /.gallery-item-description -->
								</figcaption>
							</figure></a>

							<a href="images/gallery-images/pr-image-3.jpg" rel="lightbox[roadtrip]">
								
							<figure class="item cat-1">
								<img src="images/gallery-images/thumb/pr-image-3.jpg" alt="Item 1">
								
								<figcaption class="item-description gallery1">
									<h4 class="item-title">
										Hum Kisi Se Kam Nahi
									</h4><!-- /.item-title -->
									<p class="gallery-item-description">
									Drawing & Painting Competition By Special Children
									</p><!-- /.gallery-item-description -->
								</figcaption>
							</figure></a>

							<a href="images/gallery-images/pr-image-4.jpg" rel="lightbox[roadtrip]">
							<a href="images/gallery-images/sankalan/1.jpg" rel="lightbox[roadtrip]">
							    <a href="images/gallery-images/sankalan/2.jpg" rel="lightbox[roadtrip]">
							  <a href="images/gallery-images/sankalan/4.jpg" rel="lightbox[roadtrip]">
							  		  <a href="images/gallery-images/sankalan/3.jpg" rel="lightbox[roadtrip]">
							<figure class="item">
								<img src="images/gallery-images/thumb/pr-image-4.jpg" alt="Item 2">
							
								<figcaption class="item-description gallery1">
									<h4 class="item-title">
									Sankalan
									</h4><!-- /.item-title -->
									<p class="gallery-item-description gallery1">
									Recycling Newspaper & Old Books	
									</p><!-- /.gallery-item-description -->
								</figcaption>
							</figure></a></a></a></a>

							<a href="images/gallery-images/pr-image-5.jpg" rel="lightbox[roadtrip]">
								<a href="images/gallery-images/plantation/1.jpg" rel="lightbox[roadtrip]">
							    <a href="images/gallery-images/plantation/2.jpg" rel="lightbox[roadtrip]">
							  <a href="images/gallery-images/plantation/3.jpg" rel="lightbox[roadtrip]">
							  		  <a href="images/gallery-images/plantation/4.jpg" rel="lightbox[roadtrip]">
							<figure class="item cat-1">
								<img src="images/gallery-images/thumb/pr-image-5.jpg" alt="Item 5">
							
								<figcaption class="item-description gallery1">
									<h4 class="item-title">
										Plantation
									</h4><!-- /.item-title -->
									<p class="gallery-item-description">
								
									</p><!-- /.gallery-item-description -->
								</figcaption>
							</figure></a></a></a></a></a>

							<a href="images/gallery-images/pr-image-6.jpg" rel="lightbox[roadtrip]">
								<a href="images/gallery-images/anaam/1.jpg" rel="lightbox[roadtrip]">
							    <a href="images/gallery-images/anaam/2.jpg" rel="lightbox[roadtrip]">
							  <a href="images/gallery-images/anaam/3.jpg" rel="lightbox[roadtrip]">
							  		  <a href="images/gallery-images/anaam/4.jpg" rel="lightbox[roadtrip]">
									  	  <a href="images/gallery-images/anaam/5.jpg" rel="lightbox[roadtrip]">
							<figure class="item">
								<img src="images/gallery-images/thumb/pr-image-6.jpg" alt="Item 6">
								
								<figcaption class="item-description gallery1">
									<h4 class="item-title">
									Anaam Prem/Salaam
									</h4><!-- /.item-title -->
									<p class="gallery-item-description">
									Falicitate Govt. Employees
									</p><!-- /.gallery-item-description -->
								</figcaption>
							</figure></a></a></a></a></a></a>

							<a href="images/gallery-images/pr-image-7.png" rel="lightbox[roadtrip]"><figure class="item">
								<img src="images/gallery-images/thumb/pr-image-7.png" alt="Item 7">
							
								<figcaption class="item-description gallery1">
									<h4 class="item-title">
										Raksha Ki Door
									</h4><!-- /.item-title -->
									<p class="gallery-item-description">
								  Rakshabandhan Celebration With Army man
									</p><!-- /.gallery-item-description -->
								</figcaption>
							</figure></a>

							<a href="images/gallery-images/pr-image-8.jpg" rel="lightbox[roadtrip]"><figure class="item">
								<img src="images/gallery-images/thumb/pr-image-8.jpg" alt="Item 7">
							
								<figcaption class="item-description gallery1">
									<h4 class="item-title">
										Ashram Visit
									</h4><!-- /.item-title -->
									<p class="gallery-item-description">
										
									</p><!-- /.gallery-item-description -->
								</figcaption>
							</figure></a>
							<a href="images/gallery-images/pr-image-11.jpg" rel="lightbox[roadtrip]"><figure class="item">
								<img src="images/gallery-images/thumb/pr-image-11.jpg" alt="Item 7">
							
								<figcaption class="item-description gallery1">
									<h4 class="item-title">
										Blood Donation
									</h4><!-- /.item-title -->
									<p class="gallery-item-description">
										
									</p><!-- /.gallery-item-description -->
								</figcaption>
							</figure></a>
							<a href="images/gallery-images/pr-image-9.jpg" rel="lightbox[roadtrip]">	
							<figure class="item">
								<img src="images/gallery-images/thumb/pr-image-9.jpg" alt="Item 7">
							
								<figcaption class="item-description gallery1">
									<h4 class="item-title">
								Fun Food Mela
								
									</h4><!-- /.item-title -->
									<p class="gallery-item-description">
										
									</p><!-- /.gallery-item-description -->
								</figcaption>
							</figure></a>
								<a href="images/gallery-images/pr-image-10.jpg" rel="lightbox[roadtrip]"><figure class="item">
								<img src="images/gallery-images/thumb/pr-image-10.jpg" alt="Item 7">
							
								<figcaption class="item-description gallery1">
									<h4 class="item-title">
					Classical Mastero
								
									</h4><!-- /.item-title -->
									<p class="gallery-item-description">
										
									</p><!-- /.gallery-item-description -->
								</figcaption>
							</figure></a>
						</div><!-- /.gallery-item -->
					</div><!-- /gallery-container -->
				</div><!-- /.container -->
			</div><!-- /.gallery-section -->
		</section><!-- /#gallery -->
		<!-- Gallery Section End -->

		
		<!--News Section-->
		<section id="news">
			<div class="news-section white-bg  section-padding">
			
				<div class="container">
					<div>
						<h2 class="section-title">
							News
						</h2><!-- /.section-title -->
						
					</div><!-- /.section-head -->

					<div class="row">
						<div class="news-container">
							<a href="images/news/news-post-1.jpg" rel="lightbox">
							<div class="news-item col-md-6 from-bottom delay-200" style=" margin-top: 30px;">
								<img class="news-item-image" src="images/news/news-post-1.jpg" alt="News Post Image">
							
							</div></a>
							
                              <a href="images/news/news-post-2.jpg" rel="lightbox">
							<div class="news-item col-md-6 from-bottom delay-600"style=" margin-top: 30px;">
								<img class="news-item-image" src="images/news/news-post-2.jpg" alt="News Post Image">
						
							</div></a>
							
                            <a href="images/news/news-post-3.jpg" rel="lightbox">
							<div class="news-item col-md-6 from-bottom delay-200"style=" margin-top: 30px;margin-bottom:10px;">
								<img class="news-item-image" src="images/news/news-post-3.jpg" alt="News Post Image" height="300px">
							
							</div></a>
                              
							  <a href="images/news/news-post-4.jpg" rel="lightbox">
							<div class="news-item col-md-6 from-bottom delay-600"style=" margin-top: 30px;margin-bottom:10px;">
								<img class="news-item-image" src="images/news/news-post-4.jpg" alt="News Post Image" height="300px">
								
							</div></a>
							<div class="view-all" >
								<a href="images/news/news-post-1.jpg" rel="lightbox[roadtrip]" class="btn custom-btn " style="margin-top:60px;">View All News</a>
								 <a href="images/news/news-post-2.jpg" rel="lightbox[roadtrip]"></a>
								               <a href="images/news/news-post-3.jpg" rel="lightbox[roadtrip]"></a>
											                 <a href="images/news/news-post-4.jpg" rel="lightbox[roadtrip]"></a>
							</div>
						</div><!-- /.news-container -->
					</div><!-- /.row -->
				</div><!-- /.container -->
			</div><!-- /.news-section -->
		</section><!-- /#news -->
		<!--News Section End-->



		<!-- Upcoming Events Section -->
		<section id="upcoming-events">
			<div class="upcoming-events-section gray-bg  section-padding">

				<div class="top-angle"></div>

				<div class="container">
					<div class="row">
						<div class="col-md-4"  style="position: relative;left: 12%;top: 40px;">
							<div class="content-box">
								<div class="hex content-icon-hex hex-margin">
									<div class="content-icon">
										<span aria-hidden="true" class="li_calendar"></span>
									</div><!-- /.content-icon -->
								</div><!-- /.content-icon-hex -->
								<h3 class="content-title">
									Ongoing Event
								</h3>
								<h4 class="content-description"> 
									<strong>BloodPlus</strong>
									<br>
									<br>
								 Tears of a Mother cannot save her Child, But your Blood can..!!!
								</h4>
								
							</div><!-- /.content-box -->

						</div><!-- /.col-md-4 -->

						<div class="col-md-8">
							<div class="row">
								<div class="event-container">
									<div id="event-post-slider"  class="owl-carousel owl-theme" style="margin-left:30%;">

										<div class="item col-md-12">
											<div class="event-content">
												<h4 align="center" class="content-title">
													<a>BLOOD DONATION</a>
												</h4><!-- /.event-title -->
											
												<div class="event-img">
													<img src="images/event-post-image/post-1.jpg" alt="Event Post">
												</div><!-- /.event-img -->
											</div><!-- /.event-content  -->
										</div><!-- /.item col-md-12 -->

									</div><!-- /#event-post-slider -->

								</div><!-- /.event-container-->
							</div><!-- /.row -->
						</div><!-- /.com-md-8 -->
					</div><!-- /.row --> 
				</div><!-- /.container -->
				<div class="bottom-angle"></div>
			</div><!-- /.upcoming-events-section -->
		</section><!-- /.upcoming-events -->	
		<!--Upcoming Events Section End-->


		<!-- Contact Section -->
		<section id="contact">
			<div class="contact-section  section-padding">
				<div class="top-angle">
				</div><!-- /.top-angle -->
				<div class="container">
					<div class="section-head">
						<h2 class="section-title">
							Contact
						</h2>
						<p class="section-description">
							IF YOU FEEL, NEED WORKING FOR CHILD PLEASE CONTACT WITH US AND LET US KNOW HOW YOU LIKE TO WORK FOR THEM. CONTACT WITH US IF ANY MORE INFORMATION NEEDED.
						</p>
					</div><!-- /.section-head -->
				</div><!-- /.container -->

				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<div class="contact-form-container">
								<h3 class="content-title">
									Drop us a message
								</h3>

								<form class="contact-form" id="contact-form" action="email.php" method="post">
									<div id="name_error" class="error">
										<img src="assets/images/email/error.png" alt="Error!">
										Please enter your name.
									</div><!-- /#name_error -->
									<div class="input-container li_user">
										<input type="text" class="form-control" name="name" id="name" placeholder="Name" required>
									</div><!-- /.input-container-->

									<div id="email_error" class="error">
										<img src="assets/images/email/error.png" alt="Error!">
										Please enter your valid E-mail ID.
									</div><!-- /#email_error -->
									<div class="input-container li_mail">
										<input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
									</div><!-- /.input-container -->

									<div id="message_error" class="error">
										<img src="assets/images/email/error.png" alt="Error!">
										Please enter your message.
									</div><!-- /#message_error -->
									<div class="input-container li_pen">
										<textarea class="form-control" id="message" name="msg" cols="45" placeholder="Message" style="resize:none;" rows="6"></textarea>
									</div><!-- /.input-container -->
									
									<div id="mail_success" class="success">
										<img src="assets/images/email/success.png" alt="Success!">
										Your message has been sent successfully.
									</div><!-- /#mail_success -->

									

									<button type="submit" class="btn custom-btn" >Submit</button>
								</form><!-- /.contact-form -->

							</div><!-- /.contact-form-container -->
						</div><!-- /.col-md-6 -->

						<div class="col-md-6">
							<div class="contact-info">
								<h3 class="content-title">
									Contact Info
								</h3>
								<p class="content-description">
								“We are in the world to support one another.” 	
								</p>
								<address> 
									<ul class="contact-address">
										<li class="fa-map-marker">
										IMDADI HOUSE,
										BAIJNATHPARA,
										EVERGREEN CHOWK, RAIPUR, CHHATTISGARH
										</li>
										<li  class="fa-phone">
											9926398800,9522177000,9685550222
											
										</li>
										<li class="fa-envelope">
											helpinghandsrpr@gmail.com
										</li>
									</ul><!-- /.contact-address --> 
								</address>
							</div><!-- /.contact-info -->
						</div><!-- /.col-md-6 -->
					</div><!-- /.row -->
				</div><!-- /.container -->
				<div class="bottom-angle">
				</div><!-- /.bottom-angle -->
			</div><!-- /.contact-section -->
		</section><!-- /#contact -->
		<!-- Contact Section End -->
		
		
		
	<!-- Donate Section -->
		<section id="donate">
			<div class="contact-section ">
				<div class="container">
					<div class="section-head">
						<h2 class="section-title">
							Donate
						</h2>
						<h3>
							&nbsp;	
						</h3>
					</div><!-- /.section-head -->
				</div><!-- /.container -->

				<div class="container">
					<div class="row">
						

						<div class="col-md-6">
							<div class="contact-info">
								<h3 class="content-title">
									Account Info&nbsp;:
								</h3>
								<p class="content-description">
					The measure of life is not its duration, but its donation...!!!
								</p>
								<address> 
									<ul class="contact-address">
										<li class="fa-credit-card">
							Bank Name-
										</li>
										<li  class="fa-usd">
														Account No:- 912010038984476
											
										</li>
									
									</ul><!-- /.contact-address --> 
								</address>
							</div><!-- /.contact-info -->
					</div><!-- /.row -->
				</div><!-- /.container -->
				<div class="bottom-angle">
				</div><!-- /.bottom-angle -->
			</div><!-- /.contact-section -->
		</section><!-- /#contact -->
		<!-- Scroll to Top -->
		<div id="scroll-to-top">
			<div class="hex scroll-top">
				<span><i class="fa fa-chevron-up"></i></span>
			</div>
		</div><!-- /#scroll-to-top -->
		<!-- Scroll to Top End-->	

		<!-- Include jquery.min.js plugin -->
		<script src="assets/js/jquery-2.1.0.min.js"></script>
<script type="text/javascript" src="assets/js/prototype.js"></script>
<script type="text/javascript" src="assets/js/scriptaculous.js?load=effects,builder"></script>
<script type="text/javascript" src="assets/js/lightbox.js"></script>

		<!-- Include email-validation.js Email Validator -->
		<script src="assets/js/email-validation.js"></script>

		<script src="assets/js/jquery.visible.min.js"></script>

		<!-- included plugins inside  plugins.js -->
		<script src="assets/js/plugins.js"></script>

		<!-- included plugins inside  plugins.js -->
		<script src="assets/js/jquery.parallax.js"></script>				

		<!-- Include functions.js -->
		<script src="assets/js/functions.js"></script>

		<!-- Google Maps Script  -->
		<script src="http://maps.google.com/maps/api/js?sensor=true"></script> 

		<!-- Gmap3.js For Static Maps -->
		<script src="assets/js/gmap3.js"></script>

		<script type="text/javascript">

			/*---------------------- Current Menu Item -------------------------*/
			jQuery(document).ready(function($) {
				"use strict";

				$('#main-menu #headernavigation').onePageNav({
					currentClass: 'active',
					changeHash: false,
					scrollSpeed: 750,
					scrollThreshold: 0.5,
					scrollOffset: 60,
					filter: '',
					easing: 'swing'
				}); 

				$('#event_time_countdown').countDown({
					targetDate: {
						'day': 23,
						'month': 9,
						'year': 2020,
						'hour': 0,
						'min': 0,
						'sec': 0
					},
					omitWeeks: true
				});


				/*----------- Google Map - with support of gmaps.js ----------------*/
				function isMobile() { 
					return ('ontouchstart' in document.documentElement);
				}

				function init_gmap() {
					if ( typeof google == 'undefined' ) return;
					var options = {
						center: [23.709921, 90.407143],
						zoom: 15,
						mapTypeControl: true,
						mapTypeControlOptions: {
							style: google.maps.MapTypeControlStyle.DROPDOWN_MENU
						},
						navigationControl: true,
						scrollwheel: false,
						streetViewControl: true
					}

					if (isMobile()) {
						options.draggable = false;
					}

					$('#googleMaps').gmap3({
						map: {
							options: options
						},
						marker: {
							latLng: [23.709921, 90.407143],
							options: { icon: 'assets/images/mapicon.png' }
						}
					});
				}

				init_gmap();

			});
		</script>


</body>
</html>
