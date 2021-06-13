<!DOCTYPE html>
<html lang="en">

	
<!-- Mirrored from web.dotthemes.com/html/givvo/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 30 Apr 2021 13:24:16 GMT -->
<head>
		<!-- Basic page needs
		============================================ -->
		<meta charset="utf-8">		
		<meta name="description" content="">
		<meta name="author" content="">
		<title>Givvo - Responsive Charity Template</title>
		
		<!-- Mobile specific metas
		============================================ -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- Google web fonts
		============================================ -->
		<link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700|Raleway:100,300,400,700" rel="stylesheet"> 
		
		<!-- Favicon
		============================================ -->
		<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">
		  <link href="<?php echo base_url('app-assets/demo/demo.css'); ?>" rel="stylesheet" />

		<!-- CSS  -->
		<!-- Bootstrap CSS
		============================================ -->
		<link rel="stylesheet" href="<?php echo base_url('app-assets2/css/bootstrap.min.css'); ?>">
		
		<!-- font-awesome CSS
		============================================ -->
        <link rel="stylesheet" href="<?php echo base_url('app-assets2/css/font-awesome.min.css'); ?>">
		
		<!-- owl.carousel CSS
		============================================ -->
        <link rel="stylesheet" href="<?php echo base_url('app-assets2/css/owl.carousel.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('app-assets2/css/owl.theme.css'); ?>">
		
		<!-- animate CSS
		============================================ -->
        <link rel="stylesheet" href="<?php echo base_url('app-assets2/css/animate.css'); ?>">
		
		<!-- main CSS
		============================================ -->		
        <link rel="stylesheet" href="<?php echo base_url('app-assets2/css/style.css'); ?>">
		
		<!-- responsive CSS
		============================================ -->		
        <link rel="stylesheet" href="<?php echo base_url('app-assets2/css/responsive.css'); ?>">
		
		<!-- prettyPhoto CSS
		============================================ -->		
        <link rel="stylesheet" href="<?php echo base_url('app-assets2/css/prettyPhoto.css'); ?>">
		
		<!-- modernizr js
		============================================ -->		
        <script src="<?php echo base_url('app-assets2/js/modernizr.js'); ?></script>

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	</head>

	<body data-spy="scroll" data-offset="0" data-target="#navbar-main">
	   <!-- HEADER START -->
	   <div id="navbar-main">
		  <!-- FIXED NAVBAR -->
		  <div class="navbar navbar-default navbar-fixed-top">
			 <div class="container">
				<!-- LOGO -->
				<div class="navbar-header">
				   <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>   
				   <a class="navbar-brand" href="index-2.html">GIVVO</a> 
				</div>
				<!-- / END LOGO -->	
				<div class="navbar-collapse collapse">
				   <ul class="nav navbar-nav navbar-right">
					  <li><a href="#home" class="smoothScroll">Home</a></li>
					  <li> <a href="#about" class="smoothScroll"> About</a></li>
					  <li> <a href="#causes" class="smoothScroll"> Causes</a></li>
					  <li> <a href="#team" class="smoothScroll"> Team</a></li>
					  <li> <a href="#services" class="smoothScroll"> Services</a></li>
					  <li> <a href="#fn-success" class="smoothScroll hidden-sm"> Success</a></li>
					  <li> <a href="#gallery" class="smoothScroll"> Gallery</a></li>
                      <li><a class="smoothScroll"  href="<?php echo site_url('/register');?>">Login</a></li>
					  <li> <a href="#contact" class="smoothScroll"> Contact</a></li>
				   </ul>
				</div>
			 </div>
		  </div>
	   </div>
	   <!-- / END HEADER -->
	   
	   <!-- HOME CAROUSEL START -->
	   <section id="home">
		  <div id="fn-home-carousel" class="carousel slide carousel-fade" data-ride="carousel" data-interval="5000">
			 <a class="item-prev" href="#fn-home-carousel" role="button" data-slide="prev">
			 <i class="fa fa-angle-left"></i>
			 </a>
			 <a class="item-next" href="#fn-home-carousel" role="button" data-slide="next">
			 <i class="fa fa-angle-right"></i>
			 </a>
			 <div class="carousel-inner">
				<div class="item active">
				   <img src="images/slider/slide-1.jpg" alt="First slide" class="img-responsive">
				   <div class="carousel-caption">
					  <h1 class="animated fadeInDown delay-1">Save a <span> Child's </span>Future</h1>
					  <p class="animated fadeInDown delay-3">Lorem Ipsum is not simply random text has roots</p>
					  <a class="btn animated fadeInUp delay-4" href="#">Learn More</a>
				   </div>
				</div>
				<div class="item">
				   <img src="images/slider/slide-2.jpg" alt="Second slide" class="img-responsive">
				   <div class="carousel-caption">
					  <h1 class="animated fadeInDown delay-1">We Need<span> Your </span>Help</h1>
					  <p class="animated fadeInDown delay-3">Duis autem eumre dolor hendrerit vulputat</p>
					  <a class="btn animated fadeInUp delay-4" href="#">Learn More</a>
				   </div>
				</div>
				<div class="item">
				   <img src="images/slider/slide-3.jpg" alt="Third slide" class="img-responsive">
				   <div class="carousel-caption">
					  <h1 class="animated fadeInDown delay-1">Give Them <span> Hope</span></h1>
					  <p class="animated fadeInDown delay-3">Phasellus auctor felis quis risusvarius massa dapibus</p>
					  <a class="btn animated fadeInUp delay-4" href="#">Learn More</a>
				   </div>
				</div>
			 </div>
		  </div>
	   </section>
	   <!-- / END HOME CAROUSEL -->
	   
	   <!-- DONATE BUTTON PROMO START -->
	   <div class="donate-promo">
		  <div class="container">
			 <div class="col-sm-9 wow slideInUp animated">
				<h2><b>To change the life of those who have no hope</b></h2>
			 </div>
			 <div class="col-sm-3 wow swing animated">
				<a class="fn-donate-btn" href="#">Donate Now</a>
			 </div>
		  </div>
	   </div>
	   <!-- / END DONATE BUTTON PROMO -->
	      
	   <!-- ABOUT SECTION START -->
	   <section id="about" class="section-padding about-us">
		  <div class="container">
			 <div class="row">
				<!-- SECTION HEADER -->
				<div class="fn-section-header">
				   <h2 class="section-title text-center">About Us</h2>
				   <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed accumsan venenatis lectus <br>sed sollicitudin. Duis in odio ex. Sed elementum varius enim.</p>
				</div>
				<!-- / END SECTION HEADER -->
				<!-- ABOUT CLIENT 1 -->
				<div class="wow flipInX animated col-xs-12 col-sm-6 col-md-3 text-center">
				   <div class="icon-circle">
					  <i class="fa fa-users"></i>
				   </div>
				   <div class="about-us-content text-center">
					  <h3>Who we are</h3>
					  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed accumsan venenatis lectus sed sollicitudin. </p>
				   </div>
				</div>
				<!-- ABOUT CLIENT 2 -->
				<div class="wow flipInX animated col-xs-12 col-sm-6 col-md-3 text-center">
				   <div class="icon-circle">
					  <i class="fa fa-eye"></i>
				   </div>
				   <div class="about-us-content text-center">
					  <h3>Our Vision</h3>
					  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed accumsan venenatis lectus sed sollicitudin. </p>
				   </div>
				</div>
				<!-- ABOUT CLIENT 3 -->
				<div class="wow flipInX animated col-xs-12 col-sm-6 col-md-3 text-center">
				   <div class="icon-circle">
					  <i class="fa fa-history"></i>
				   </div>
				   <div class="about-us-content text-center">
					  <h3>Our history</h3>
					  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed accumsan venenatis lectus sed sollicitudin. </p>
				   </div>
				</div>
				<!-- ABOUT CLIENT 4 -->
				<div class="wow flipInX animated col-xs-12 col-sm-6 col-md-3 text-center">
				   <div class="icon-circle">
					  <i class="fa fa-tasks"></i>
				   </div>
				   <div class="about-us-content text-center">
					  <h3>What we do</h3>
					  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed accumsan venenatis lectus sed sollicitudin. </p>
				   </div>
				</div>
			 </div>
		  </div>
	   </section>
	   <!-- END ABOUT SECTION -->
	   
	   
	   <!-- CAUSES SECTION START -->
	   <div id="causes" class="section-padding">
		  <div class="container">
			 <div class="row">
				<!-- SECTION HEADER -->
				<div class="fn-section-header">
				   <h2 class="section-title text-center">Causes</h2>
				   <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed accumsan venenatis lectus <br>sed sollicitudin. Duis in odio ex. Sed elementum varius enim.</p>
				</div>
				<!-- / END SECTION HEADER -->
				<!-- CAUSES 1 -->
				<div class="cause-post col-xs-12 col-sm-6 col-md-3 wow zoomIn animated" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">
				   <div class="cause-box blog-post text-center">
					  <figure class="cause-header">
						 <img title="" alt="" src="images/causes/cause1.jpg"> 
					  </figure>
					  <div class="cause-content text-center">
						 <h3>Donate For Homeless People</h3>
						 <p>Iaculis ullamcorper at est. Curabitur sagittis dignissim nibh quis dictum.</p>
					  </div>
					  <a class="fn-donate-button" href="#">Donate Now</a>
				   </div>
				</div>
				<!-- CAUSES 2 -->
				<div class="cause-post col-xs-12 col-sm-6 col-md-3 wow zoomIn animated" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">
				   <div class="cause-box blog-post text-center">
					  <figure class="cause-header">
						 <img title="" alt="" src="images/causes/cause2.jpg"> 
					  </figure>
					  <div class="cause-content">
						 <h3>Donate For Feeding the Hungry</h3>
						 <p>Iaculis ullamcorper at est. Curabitur sagittis dignissim nibh quis dictum.</p>
					  </div>
					  <a class="fn-donate-button" href="#">Donate Now</a>
				   </div>
				</div>
				<!-- CAUSES 3 -->
				<div class="cause-post col-xs-12 col-sm-6 col-md-3 wow zoomIn animated" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">
				   <div class="cause-box blog-post text-center">
					  <figure class="cause-header">
						 <img title="" alt="" src="images/causes/cause3.jpg"> 
					  </figure>
					  <div class="cause-content">
						 <h3>Donate For clean drinking water</h3>
						 <p>Iaculis ullamcorper at est. Curabitur sagittis dignissim nibh quis dictum.</p>
					  </div>
					  <a class="fn-donate-button" href="#">Donate Now</a>
				   </div>
				</div>
				<!-- CAUSES 4 -->
				<div class="cause-post col-xs-12 col-sm-6 col-md-3 wow zoomIn animated" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">
				   <div class="cause-box blog-post text-center">
					  <figure class="cause-header">
						 <img title="" alt="" src="images/causes/cause4.jpg"> 
					  </figure>
					  <div class="cause-content">
						 <h3>Donate For Child Education</h3>
						 <p>Iaculis ullamcorper at est. Curabitur sagittis dignissim nibh quis dictum.</p>
					  </div>
					  <a class="fn-donate-button" href="#">Donate Now</a>
				   </div>
				</div>
			 </div>
		  </div>
	   </div>
	   <!-- / END CAUSES SECTION -->
	   
	   <!-- TEAM MEMBERS START -->
		<div id="team" class="section-padding">
		  <div class="container">
			 <div class="row centered wow flipInX animated" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">
			  <!-- SECTION HEADER -->
				<div class="fn-section-header">
				   <h2 class="section-title text-center">Our Team</h2>
				   <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed accumsan venenatis lectus <br>sed sollicitudin. Duis in odio ex. Sed elementum varius enim.</p>
				</div>
				<!-- / END SECTION HEADER -->
				 <!-- MEMBER 1 -->
				<div class="col-xs-12 col-sm-6 col-md-3 centered single-member">
				   <img class="img team-border" src="images/team/team01.jpg" alt="Maura Daniels">
				   <h4>Maura Daniels</h4>
				   <p>Albucius consectetuer eu nam. Saepe legendos vulputate eu quo, id mea comprehensam signifer.</p>
				   <div class="social-profiles">
						<a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-linkedin"></i></a>
				   </div>
				</div>
				 <!-- MEMBER 2 -->
				<div class="col-xs-12 col-sm-6 col-md-3 centered single-member">
				   <img class="img team-border" src="images/team/team02.jpg" alt="Tom Petterson">
				   <h4>Tom Petterson</h4>
				   <p>Albucius consectetuer eu nam. Saepe legendos vulputate eu quo, id mea comprehensam signifer.</p>
				   <div class="social-profiles">
						<a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-linkedin"></i></a> 
				   </div>
				</div>
				 <!-- MEMBER 3 -->
				<div class="col-xs-12 col-sm-6 col-md-3 centered single-member">
				   <img class="img team-border" src="images/team/team03.jpg" alt="Anna Hanaceck">
				   <h4>Anna Hanaceck</h4>
				   <p>Albucius consectetuer eu nam. Saepe legendos vulputate eu quo, id mea comprehensam signifer.</p>
				   <div class="social-profiles">
						<a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-linkedin"></i></a> 
				   </div> 
				</div>
				 <!-- MEMBER 4 -->
				<div class="col-xs-12 col-sm-6 col-md-3 centered single-member">
				   <img class="img team-border" src="images/team/team04.jpg" alt="Jack Brianel">
				   <h4>Jack Brianel</h4>
				   <p>Albucius consectetuer eu nam. Saepe legendos vulputate eu quo, id mea comprehensam signifer.</p>
				   <div class="social-profiles">
						<a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-linkedin"></i></a> 
				   </div>
				</div>
			 </div>
		  </div>
		</div>
		<!-- / END TEAM MEMBERS -->

	   <!-- SERVICES SECTION START -->
		<section id="services" class="section-padding">
		  <div class="container">
		   <div class="row">
			<!-- SECTION HEADER -->
			 <div class="fn-section-header">
				<h2 class="section-title text-center">Our Services</h2>
				<p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed accumsan venenatis lectus <br>sed sollicitudin. Duis in odio ex. Sed elementum varius enim.</p>
			 </div>
			 <!-- / END SECTION HEADER -->
				<!-- SERVICE 1 -->
				<div class="col-sm-4">
				   <div data-wow-delay=".1s" class="service-item fadeInLeft wow animated" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInLeft;">
					  <div class="service-detail">
						 <i class="fa fa-connectdevelop"></i>
						 <h4>Mediation</h4>
						 <p>Laculis ullamcorper at est. Curabitur sagittis dignissim nibh quis dictum.Suspendisse vehicula arcu sit amet vestibulum congue.</p>
					  </div>
				   </div>
				</div>
				<!-- SERVICE 2 -->
				<div class="col-sm-4">
				   <div data-wow-delay=".3s" class="service-item fadeInDown wow animated" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInDown;">
					  <div class="service-detail">
						 <i class="fa fa-building"></i>
						 <h4>Building Schools</h4>
						 <p>Laculis ullamcorper at est. Curabitur sagittis dignissim nibh quis dictum.Suspendisse vehicula arcu sit amet vestibulum congue.</p>
					  </div>
				   </div>
				</div>
				<!-- SERVICE 3 -->
				<div class="col-sm-4">
				   <div data-wow-delay=".5s" class="service-item fadeInRight wow animated" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInRight;">
					  <div class="service-detail">
						 <i class="fa fa-hand-paper-o"></i>
						 <h4>Volunteering</h4>
						 <p>Laculis ullamcorper at est. Curabitur sagittis dignissim nibh quis dictum.Suspendisse vehicula arcu sit amet vestibulum congue.</p>
					  </div>
				   </div>
				</div>
				<!-- SERVICE 4 -->
				<div class="col-sm-4">
				   <div data-wow-delay=".7s" class="service-item fadeInLeft wow animated" style="visibility: visible; animation-delay: 0.7s; animation-name: fadeInLeft;">
					  <div class="service-detail">
						 <i class="fa fa-th"></i>
						 <h4>Relief</h4>
						 <p>Laculis ullamcorper at est. Curabitur sagittis dignissim nibh quis dictum.Suspendisse vehicula arcu sit amet vestibulum congue.</p>
					  </div>
				   </div>
				</div>
				<!-- SERVICE 5 -->
				<div class="col-sm-4">
				   <div data-wow-delay=".9s" class="service-item fadeInUp wow animated" style="visibility: visible; animation-delay: 0.9s; animation-name: fadeInUp;">
					  <div class="service-detail">
						 <i class="fa fa-home"></i>
						 <h4>Building Home</h4>
						 <p>Laculis ullamcorper at est. Curabitur sagittis dignissim nibh quis dictum.Suspendisse vehicula arcu sit amet vestibulum congue.</p>
					  </div>
				   </div>
				</div>
				<!-- SERVICE 6 -->
				<div class="col-sm-4">
				   <div data-wow-delay="1.1s" class="service-item fadeInRight wow animated" style="visibility: visible; animation-delay: 1.1s; animation-name: fadeInRight;">
					  <div class="service-detail">
						 <i class="fa fa-ambulance"></i>
						 <h4>Medical</h4>
						 <p>Laculis ullamcorper at est. Curabitur sagittis dignissim nibh quis dictum.Suspendisse vehicula arcu sit amet vestibulum congue.</p>
					  </div>
				   </div>
				</div>
			 </div>
		  </div>
		</section>
	   <!-- / END SERVICES SECTION -->
	   
	   <!-- SUCCESS SECTION START -->
	   <section id="fn-success" class="fn-success section-padding">
		  <div class="container">
			 <div class="row number-counters">
				<!-- SECTION HEADER -->
				<div class="fn-section-header">
				   <h2 class="section-title text-center">Success Stories</h2>
				   <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed accumsan venenatis lectus <br>sed sollicitudin. Duis in odio ex. Sed elementum varius enim.</p>
				</div>
				<!-- / END SECTION HEADER -->
				<!-- COUNT ITEM 1 -->
				<div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms">
				   <div class="counters-item">
					  <i class="fa fa-heart fa-3x"></i>
					  <strong>4250</strong>
					  <p>Donate Heart</p>
				   </div>
				</div>
				<!-- COUNT ITEM 2 -->
				<div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="300ms">
				   <div class="counters-item">
					  <i class="fa fa-users fa-3x"></i>
					  <strong>1120</strong>
					  <p>Save Life</p>
				   </div>
				</div>
				<!-- COUNT ITEM 3 -->
				<div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="600ms">
				   <div class="counters-item">
					  <i class="fa fa-home fa-3x"></i>
					  <strong>4760</strong>
					  <p>Donate Houses</p>
				   </div>
				</div>
				<!-- COUNT ITEM 4 -->
				<div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="900ms">
				   <div class="counters-item">
					  <i class="fa fa-money fa-3x"></i>
					  <strong>9.5K</strong>
					  <p>Donate Money</p>
				   </div>
				</div>
			 </div>
		  </div>
	   </section>
	   <!-- / END SUCCESS SECTION -->
	   
	   <!-- GALLERY SECTION START -->		
	   <section id="gallery" class="section-padding">
		  <div class="container">
			<!-- SECTION HEADER -->
			 <div class="fn-section-header">
				<h2 class="section-title text-center">Our Gallery</h2>
				<p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed accumsan venenatis lectus <br>sed sollicitudin. Duis in odio ex. Sed elementum varius enim.</p>
			 </div>
			 <!-- / END SECTION HEADER -->
			 <!-- GALLERY FILTER -->
			 <div class="text-center">
				<ul class="gallery-filter">
				   <li><a class="active" href="#" data-filter="*">All</a>
				   </li>
				   <li><a href="#" data-filter=".charity">Charity</a>
				   </li>
				   <li><a href="#" data-filter=".children">Children</a>
				   </li>
				   <li><a href="#" data-filter=".nature">Nature</a>
				   </li>
				</ul>
			 </div>
			 <!-- GALLERY ITEMS -->
			 <div class="gallery-items wow bounceInUp animated" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">
				<!-- GALLERY ITEM 1 -->
				<div class="gallery-item charity">
				   <div class="gallery-item-inner">
					  <img class="img-responsive" src="images/gallery/01.jpg" alt="">
					  <div class="gallery-info">
						 <h3>Lorem ipsum</h3>
						 Lorem ipsum dolor sit amet
						 <a class="preview" href="images/gallery/01.jpg" data-gal="prettyPhoto"><i class="fa fa-eye"></i></a>
					  </div>
				   </div>
				</div>
				<!-- GALLERY ITEM 2 -->
				<div class="gallery-item children nature">
				   <div class="gallery-item-inner">
					  <img class="img-responsive" src="images/gallery/02.jpg" alt="">
					  <div class="gallery-info">
						 <h3>Lorem ipsum</h3>
						 Lorem ipsum dolor sit amet
						 <a class="preview" href="images/gallery/02.jpg" data-gal="prettyPhoto"><i class="fa fa-eye"></i></a>
					  </div>
				   </div>
				</div>
				<!-- GALLERY ITEM 3 -->
				<div class="gallery-item charity">
				   <div class="gallery-item-inner">
					  <img class="img-responsive" src="images/gallery/03.jpg" alt="">
					  <div class="gallery-info">
						 <h3>Lorem ipsum</h3>
						 Lorem ipsum dolor sit amet
						 <a class="preview" href="images/gallery/03.jpg" data-gal="prettyPhoto"><i class="fa fa-eye"></i></a>
					  </div>
				   </div>
				</div>
				<!-- GALLERY ITEM 4 -->
				<div class="gallery-item children">
				   <div class="gallery-item-inner">
					  <img class="img-responsive" src="images/gallery/04.jpg" alt="">
					  <div class="gallery-info">
						 <h3>Lorem ipsum</h3>
						 Lorem ipsum dolor sit amet
						 <a class="preview" href="images/gallery/04.jpg" data-gal="prettyPhoto"><i class="fa fa-eye"></i></a>
					  </div>
				   </div>
				</div>
				<!-- GALLERY ITEM 5 -->
				<div class="gallery-item charity nature">
				   <div class="gallery-item-inner">
					  <img class="img-responsive" src="images/gallery/05.jpg" alt="">
					  <div class="gallery-info">
						 <h3>Lorem ipsum</h3>
						 Lorem ipsum dolor sit amet
						 <a class="preview" href="images/gallery/05.jpg" data-gal="prettyPhoto"><i class="fa fa-eye"></i></a>
					  </div>
				   </div>
				</div>
				<!-- GALLERY ITEM 6 -->
				<div class="gallery-item children">
				   <div class="gallery-item-inner">
					  <img class="img-responsive" src="images/gallery/06.jpg" alt="">
					  <div class="gallery-info">
						 <h3>Lorem ipsum</h3>
						 Lorem ipsum dolor sit amet
						 <a class="preview" href="images/gallery/06.jpg" data-gal="prettyPhoto"><i class="fa fa-eye"></i></a>
					  </div>
				   </div>
				</div>
				<!-- GALLERY ITEM 7 -->
				<div class="gallery-item charity nature">
				   <div class="gallery-item-inner">
					  <img class="img-responsive" src="images/gallery/07.jpg" alt="">
					  <div class="gallery-info">
						 <h3>Lorem ipsum</h3>
						 Lorem ipsum dolor sit amet
						 <a class="preview" href="images/gallery/07.jpg" data-gal="prettyPhoto"><i class="fa fa-eye"></i></a>
					  </div>
				   </div>
				</div>
				<!-- GALLERY ITEM 8 -->
				<div class="gallery-item children">
				   <div class="gallery-item-inner">
					  <img class="img-responsive" src="images/gallery/08.jpg" alt="">
					  <div class="gallery-info">
						 <h3>Lorem ipsum</h3>
						 Lorem ipsum dolor sit amet
						 <a class="preview" href="images/gallery/08.jpg" data-gal="prettyPhoto"><i class="fa fa-eye"></i></a>
					  </div>
				   </div>
				</div>
			 </div>
		  </div>
	   </section>
	   <!-- / END GALLERY SECTION -->
	   
	   <!-- TESTIMONIAL SECTION START -->
	   <section id="testimonials" class="testimonial section-padding">
		  <div class="container">
			<!-- SECTION HEADER -->
			 <div class="fn-section-header">
				<h2 class="section-title text-center">Testimonials</h2>
				<p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed accumsan venenatis lectus <br>sed sollicitudin. Duis in odio ex. Sed elementum varius enim.</p>
			 </div>
			 <!-- / END SECTION HEADER -->
			 <!-- TESTIMONIALS -->
			 <div class="row">
				<div class="col-md-12">
				   <div id="fn-feedbacks" class="owl-carousel owl-theme">
					  <!-- TESTIMONIAL 1-->
					  <div class="feedback-box wow rollIn animated" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">
						 <div class="message">
							"Aenean nonummy hendrerit mau phasellu porta. Fusce suscipit varius mi sed. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio morbi. Ut viverra mauris justo, quis auctor nisi. Suspendisse sit amet diam diam, eget."
						 </div>
						 <div class="client">
							<div class="client-info">
							   <a class="client-name" href="#">John Smith</a>
							   <div class="client-company">
								  Founder, Great Company
							   </div>
							</div>
							<div class="client-image hidden-xs">
							   <img src="images/testimonial/testimonial1.jpg" alt="">
							</div>
						 </div>
					  </div>
					  <!-- TESTIMONIAL 2-->
					  <div class="feedback-box wow rollIn animated" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">
						 <div class="message">
							“Aenean nonummy hendrerit mau phasellu porta. Fusce suscipit varius mi sed. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio morbi. Ut viverra mauris justo, quis auctor nisi. Suspendisse sit amet diam diam, eget.”
						 </div>
						 <div class="client">
							<div class="client-info">
							   <a class="client-name" href="#">Cristina Deo</a>
							   <div class="client-company">
								  Project manager, Rft tech
							   </div>
							</div>
							<div class="client-image hidden-xs">
							   <img src="images/testimonial/testimonial2.jpg" alt="">
							</div>
						 </div>
					  </div>
					  <!-- TESTIMONIAL 3-->
					  <div class="feedback-box wow rollIn animated" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">
						 <div class="message">
							“Aenean nonummy hendrerit mau phasellu porta. Fusce suscipit varius mi sed. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio morbi. Ut viverra mauris justo, quis auctor nisi. Suspendisse sit amet diam diam, eget.”
						 </div>
						 <div class="client">
							<div class="client-info">
							   <a class="client-name" href="#">Anton Kovalsky</a>
							   <div class="client-company">
								  Manager, Company inc.
							   </div>
							</div>
							<div class="client-image hidden-xs">
							   <img src="images/testimonial/testimonial3.jpg" alt="">
							</div>
						 </div>
					  </div>
					  <!-- TESTIMONIAL 4-->
					  <div class="feedback-box wow rollIn animated" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">
						 <div class="message">
							“Aenean nonummy hendrerit mau phasellu porta. Fusce suscipit varius mi sed. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio morbi. Ut viverra mauris justo, quis auctor nisi. Suspendisse sit amet diam diam, eget.”
						 </div>
						 <div class="client">
							<div class="client-info">
							   <a class="client-name" href="#">Adrian Steve</a>
							   <div class="client-company">
								  CEO, XYZ Corp inc.
							   </div>
							</div>
							<div class="client-image hidden-xs">
							   <img src="images/testimonial/testimonial4.jpg" alt="">
							</div>
						 </div>
					  </div>
					  <!-- TESTIMONIAL 5-->
					  <div class="feedback-box wow rollIn animated" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">
						 <div class="message">
							“Aenean nonummy hendrerit mau phasellu porta. Fusce suscipit varius mi sed. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio morbi. Ut viverra mauris justo, quis auctor nisi. Suspendisse sit amet diam diam, eget.”
						 </div>
						 <div class="client">
							<div class="client-info">
							   <a class="client-name" href="#">David Clyne</a>
							   <div class="client-company">
								  Lead developer, Fx IT
							   </div>
							</div>
							<div class="client-image hidden-xs">
							   <img src="images/testimonial/testimonial5.jpg" alt="">
							</div>
						 </div>
					  </div>
					  <!-- TESTIMONIAL 6-->
					  <div class="feedback-box wow rollIn animated" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">
						 <div class="message">
							“Aenean nonummy hendrerit mau phasellu porta. Fusce suscipit varius mi sed. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio morbi. Ut viverra mauris justo, quis auctor nisi. Suspendisse sit amet diam diam, eget.”
						 </div>
						 <div class="client">
							<div class="client-info">
							   <a class="client-name" href="#">Keith McCarthy</a>
							   <div class="client-company">
								  CEO, Znit rex.
							   </div>
							</div>
							<div class="client-image hidden-xs">
							   <img src="images/testimonial/testimonial6.jpg" alt="">
							</div>
						 </div>
					  </div>
				   </div>
				</div>
			 </div>
		  </div>
	   </section>
	   <!-- / END TESTIMONIAL SECTION -->
	   
	   <!-- CONTACT SECTION START -->
	   <section id="contact" class="section-padding">
		  <div class="container">
			 <div class="row">
				<!-- SECTION HEADER -->
				<div class="fn-section-header">
				   <h2 class="section-title text-center">Get in Touch</h2>
				   <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed accumsan venenatis lectus <br>sed sollicitudin. Duis in odio ex. Sed elementum varius enim.</p>
				</div>
				<!-- / END SECTION HEADER -->
				<div class="col-md-4 centered">
				   <i class="fa fa-map-marker fa-2x"></i>
				   <p>265 6th Avenue, 5th Floor, 
					  <br> New York, NY 10001
				   </p>
				</div>
				<div class="col-md-4">
				   <i class="fa fa-envelope-o fa-2x"></i>
				   <p>info@yourcompany.com</p>
				</div>
				<div class="col-md-4">
				   <i class="fa fa-phone fa-2x"></i>
				   <p> +1 200 123 4567</p>
				</div>
			 </div>
			 <div class="row">
				<div class="col-lg-8 col-lg-offset-2 centered">
				   <form action="https://web.dotthemes.com/html/givvo/sendemail.php" id="contactus" method="post" class="form">
					  <div class="row">
						 <div class="col-xs-6 col-md-6 form-group">
							<input class="form-control" id="name" name="cf_name" placeholder="Name" type="text" required />
						 </div>
						 <div class="col-xs-6 col-md-6 form-group">
							<input class="form-control" id="email" name="cf_email" placeholder="Email" type="email" required />
						 </div>
					  </div>
					  <textarea class="form-control" id="message" name="cf_message" placeholder="Message" rows="5"></textarea>
					  <div class="row">
						 <div class="col-xs-12 col-md-12">
							<button class="btn btn btn-lg" type="submit">Send Message</button>
						 </div>
					  </div>
				   </form>
				</div>
			 </div>
		  </div>
	   </section>
	   <!-- / END CONTACT SECTION -->
	   
	   <!-- GOOGLE MAP START -->
	   <div id="google-map">
		  <div id="map-canvas" class="wow animated fadeInUp">
		  </div>
	   </div>
	   <!-- / END GOOGLE MAP -->

	   <!-- FOOTER SECTION START -->
	   <section id="fn-footer" class="fn-footer">
		  <div class="container">
			 <div class="row">
				<!-- FOOTER WIDGET 1 -->
				<div class="col-sm-3 col-lg-3">
				   <div class="widget">
					  <h4>Get in touch with us</h4>
					  <address>
						 265 6th Avenue, 5th Floor, 
						 <br> New York, NY 10001<br>
					  </address>
					  <p>
						 <i class="icon-phone"></i> +1 200 123 4567<br>
						 <i class="icon-envelope-alt"></i> info@yourcompany.com
					  </p>
				   </div>
				</div>
				<!-- FOOTER WIDGET 2 -->
				<div class="col-sm-3 col-lg-3">
				   <div class="widget">
					  <h4>Pages</h4>
					  <ul class="link-list">
						 <li><a href="#">About us</a></li>
						 <li><a href="#">Lastest news</a></li>
						 <li><a href="#">Privacy policy</a></li>
						 <li><a href="#">Terms and conditions</a></li>
						 <li><a href="#">Contact us</a></li>
					  </ul>
				   </div>
				</div>
				<!-- FOOTER WIDGET 3 -->
				<div class="col-sm-3 col-lg-3">
				   <div class="widget">
					  <h4>Links</h4>
					  <ul class="link-list">
						 <li><a href="#">Our donors</a></li>
						 <li><a href="#">Events</a></li>
						 <li><a href="#">Forums</a></li>
						 <li><a href="#">Blog</a></li>
						 <li><a href="#">Press release</a></li>
					  </ul>
				   </div>
				</div>
				<!-- FOOTER WIDGET 4 -->
				<div class="col-sm-3 col-lg-3">
				   <div class="widget">
					  <h4>Subscribe</h4>
					  <p>Get the latest update from us by subscribing to our newsletter.</p>
					  <div class="form-group multiple-form-group input-group">
						 <input type="email" name="email" class="form-control">
						 <span class="input-group-btn">
						 <button type="button" class="btn btn-theme btn-add">Subscribe</button>
						 </span>
					  </div>
				   </div>
				</div>
			 </div>
		  </div>
		  <!-- FOOTER BOTTOM -->
		  <div id="sub-footer">
			 <div class="container">
				<div class="row">
				   <div class="col-lg-6">
					  <div class="copyright">
						 <p><span>&copy; Givvo 2017; All right reserved.</span></p>
					  </div>
				   </div>
				   <div class="col-lg-6">
					  <ul class="social-network">
						 <li><a href="#" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
						 <li><a href="#" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
						 <li><a href="#" data-placement="top" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
						 <li><a href="#" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
						 <li><a href="#" data-placement="top" title="Google plus"><i class="fa fa-google-plus"></i></a></li>
					  </ul>
				   </div>
				</div>
			 </div>
		  </div>
	   </section>
	   <!-- / END FOOTER SECTION -->
	   
		<!-- JS -->
		
		<!-- jquery js -->   
		<script src="js/jquery.min.js"></script>
		<!-- bootstrap js -->
		<script type="text/javascript" src="js/bootstrap.min.js"></script> 
		<!-- retina js -->
		<script type="text/javascript" src="js/retina.js"></script>
		<!-- prettyPhoto js -->   
		<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script> 
		<!-- easing js -->
		<script type="text/javascript" src="js/jquery.easing.1.3.js"></script> 
		<!-- isotope js -->
		<script type="text/javascript" src="js/jquery.isotope.min.js"></script> 
		<!-- mousescroll js -->
		<script type="text/javascript" src="js/mousescroll.js"></script> 
		<!-- smoothscroll js -->
		<script type="text/javascript" src="js/smoothscroll.js"></script> 
		<!-- inview js -->
		<script type="text/javascript" src="js/jquery.inview.min.js"></script> 
		<!-- owl carousel js -->
		<script type="text/javascript" src="js/owl.carousel.min.js"></script>
		<!-- Google map -->
		<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
		<!-- wow js -->
		<script src="js/wow.min.js"></script>		
		<script>
				new WOW().init();
		</script>	
		<!-- Main js --> 	
		<script type="text/javascript" src="js/main.js"></script> 
	</body>	

<!-- Mirrored from web.dotthemes.com/html/givvo/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 30 Apr 2021 13:25:20 GMT -->
</html>