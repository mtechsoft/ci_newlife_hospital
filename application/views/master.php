<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Newlife Hospital | Manage All Medical Services Without Using Paper.</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">




  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
        <meta name="twitter:card" content="" />

	<!--<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Dosis|Montserrat|Noto+Sans|Oswald|PT+Sans+Narrow|Raleway|Roboto+Condensed" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
        <!--2nd bootstrap links-->
	<!-- Slick Carousel -->
<!--        <link rel="stylesheet" href="<?php echo base_url()?>asset/2nd/plugins/slick/slick.css">
        <link rel="stylesheet" href="<?php echo base_url()?>asset/2nd/plugins/slick/slick-theme.css">
         FancyBox
        <link rel="stylesheet" href="<?php echo base_url()?>asset/2nd/plugins/fancybox/jquery.fancybox.min.css">-->

        <!-- Stylesheets -->
        <link href="<?php echo base_url()?>asset/css/main.css" rel="stylesheet">

        <!--2nd bootstrap links-->



        <!-- Animate.css -->
	<link rel="stylesheet" href="<?php echo base_url()?>asset/css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="<?php echo base_url()?>asset/css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="<?php echo base_url()?>asset/css/bootstrap.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="<?php echo base_url()?>asset/css/magnific-popup.css">
	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="<?php echo base_url()?>asset/css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?php echo base_url()?>asset/css/owl.theme.default.min.css">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="<?php echo base_url()?>asset/css/flexslider.css">
	<!-- Theme style  -->
	<link rel="stylesheet" href="<?php echo base_url()?>asset/css/style.css">

	<!-- Modernizr JS -->
	<script src="<?php echo base_url()?>asset/js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="<?php echo base_url()?>asset/js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>

	<div class="mtech-loader"></div>
	<section class="top">
	<div class="container">
		<div class="row">
			<div class="col-md-7 col-sm-8">
				<p class="bold text-left"><i class="far fa-calendar-check"></i>  Doctor Appointment:  02-55092196-99 ( Ext.-666 ) 9am to 5PM
                   </p>

			</div>
			<div class="col-md-5 col-sm-4">
                            <p class="bold text-right"> <i class="fas fa-phone-volume"></i>  24 Hours Contact: 01512345678, +1-123 456 </p>
			</div>
		</div>
	</div>
</section>
	<div id="page">
	<nav class="mtech-nav" role="navigation">
		<div class="top-menu">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
                                          <!--Header Upper-->
                                          <section class="header">

                                              <div class="container clearfix text-center">
                                              	<div class="col-md-2">
                                              	<img class="company-logo" src="<?php echo base_url()?>asset/images/logo.png" alt="" width="100" >
                                              </div>
                                                  <div class="logo col-md-10">
                                                      <div id="mtech-logo">

                                                           <p class="title"> NEWLIFE HOSPITAL MANAGEMENT SYSTEM </p>
                                                      </div>
                                                  </div>

                                              </div>
                                          </section>

					</div>
					<div class="col-xs-12 text-center">
						<div class="menu-1">
							<ul>
								<?php
                                                                    if (isset($slider)) { ?>
                                                                <li class="active"><a href="<?php echo base_url()?>"> <i class="fas fa-home"></i> Home</a></li>
                                                                    <?php } else {?>
                                                                <li class=""><a href="<?php echo base_url()?>"><i class="fas fa-home"></i> Home</a></li>
                                                                    <?php } ?>

                                                                <?php
                                                                    if (isset($content_slider)) { ?>
                                                                <li class="active"><a href="<?php echo base_url()?>services">Service</a></li>
                                                                    <?php } else {?>
                                                                <li><a href="<?php echo base_url()?>services">Service</a></li>
                                                                    <?php } ?>

								<li class="has-dropdown">
									<a href="<?php echo base_url()?>services">About Us</a>
									<ul class="dropdown">
										<li><a href="#">Who We Are</a></li>
										<li><a href="#">Mission &amp; Vision</a></li>
										<li><a href="#">Governing Body</a></li>
										<li><a href="#">Management</a></li>
									</ul>
								</li>

								<li class="has-dropdown">
									<a href="#">For Patient</a>
									<ul class="dropdown">
										<li><a href="<?php echo base_url()?>doctors">Find Consultant</a></li>
										<li><a href="<?php echo base_url()?>appointment">Book Appointment</a></li>
										<li><a href="<?php echo base_url()?>checkup">Health Checkup</a></li>
									</ul>
								</li>

								<li class="has-dropdown">
									<a href="<?php echo base_url()?>departments">Department</a>
								</li>


								<li class="has-dropdown">
									<a href="<?php echo base_url()?>doctors">News &amp; Media</a>
									<ul class="dropdown">
										<li><a href="<?php echo base_url()?>news">News &amp; Events</a></li>
										<li><a href="<?php echo base_url()?>gallery">Gallery</a></li>
										<li><a href="<?php echo base_url()?>blog">Blog</a></li>
									</ul>
								</li>
								<li class="has-dropdown">
									<a href="<?php echo base_url()?>doctors">Career</a>
									<ul class="dropdown">
										<li><a href="<?php echo base_url()?>news">Current Opportunities</a></li>
										<li><a href="<?php echo base_url()?>gallery">How To Apply</a></li>
									</ul>
								</li>

								<li><a href="<?php echo base_url()?>contact">Contact</a></li>
								
                                                                <!--<li class="btn-cta"><a href="<?php echo base_url()?>appointment"><span>Make an Appointment <i class="icon-calendar3"></i></span></a></li>-->
							</ul>
						</div>
					</div>
				</div>

			</div>
		</div>
	</nav>


	<?php // echo $open_hour?>

        <!--content-->
        <?php echo $main_content?>
        <?php // echo $offer?>
        <!--foooter-->
        <?php echo $footer?>

        </div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>

	<!-- jQuery -->
	<script src="<?php echo base_url()?>asset/js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="<?php echo base_url()?>asset/js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="<?php echo base_url()?>asset/js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="<?php echo base_url()?>asset/js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="<?php echo base_url()?>asset/js/jquery.stellar.min.js"></script>
	<!-- Carousel -->
	<script src="<?php echo base_url()?>asset/js/owl.carousel.min.js"></script>
	<!-- Flexslider -->
	<script src="<?php echo base_url()?>asset/js/jquery.flexslider-min.js"></script>
	<!-- countTo -->
	<script src="<?php echo base_url()?>asset/js/jquery.countTo.js"></script>
	<!-- Magnific Popup -->
	<script src="<?php echo base_url()?>asset/js/jquery.magnific-popup.min.js"></script>
	<script src="<?php echo base_url()?>asset/js/magnific-popup-options.js"></script>
	<!-- Sticky Kit -->
	<script src="<?php echo base_url()?>asset/js/sticky-kit.min.js"></script>
	<!-- Main -->
	<script src="<?php echo base_url()?>asset/js/main.js"></script>

	</body>
</html>
