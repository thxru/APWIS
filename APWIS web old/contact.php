<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> Contact Us - APWIS </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="manifest" href="site.html">
    <link rel="apple-touch-icon" href="icon.html">
    <!-- Place favicon.ico in the root directory -->

    <!-- bootstrap v4.0.0 -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- fontawesome-icons css -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <!-- themify-icons css -->
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <!-- elegant css -->
    <link rel="stylesheet" href="assets/css/elegant.css">
    <!-- meanmenu css -->
    <link rel="stylesheet" href="assets/css/meanmenu.min.css">
    <!-- animate css -->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!-- venobox css -->
    <link rel="stylesheet" href="assets/css/venobox.css">
    <!-- jquery-ui.min css -->
    <link rel="stylesheet" href="assets/css/jquery-ui.min.css">
    <!-- slick css -->
    <link rel="stylesheet" href="assets/css/slick.css">
    <!-- slick-theme css -->
    <link rel="stylesheet" href="assets/css/slick-theme.css">
    <!-- helper css -->
    <link rel="stylesheet" href="assets/css/helper.css">
    <!-- style css -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive css -->
    <link rel="stylesheet" href="assets/css/responsive.css">
    <?php

$Name = isset($_REQUEST['name']) ? $_REQUEST['name'] : '';
$Email =  isset($_REQUEST['email']) ? $_REQUEST['email'] : '';
$Subject =  isset($_REQUEST['subject']) ? $_REQUEST['subject'] : '';
$Message =  isset($_REQUEST['message']) ? $_REQUEST['message'] : '';

$link = mysqli_connect("localhost", "root", "","apwis");
 
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
if(isset($_REQUEST['msgSubmit'])){

$sql = "insert into contact (Name,Email,Subject,Message) values ('$Name','$Email','$Subject','$Message')";
if(mysqli_query($link, $sql))
{
    echo '<script type="text/javascript">alert("Your message was sent successfully.");</script>';
} 
else
{
    echo '<script type="text/javascript">alert("ERROR: Could not able to execute.");</script>';
}
}
mysqli_close($link);
?>
</head>

<body>
    <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->

    <!--header-area start-->
    <header class="header-area">
        <!--header-top-->
        <div class="header-top d-none d-sm-block">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-sm-9">
                        <div class="contact-info">
                            <ul>
                                <li><i class="fa fa-phone"></i>(+94)11 1234567 <span>|</span></li>
                                <li><i class="fa fa-home"></i>Mahenwaththa,Pitipana,Homagama <span>|</span></li>
                                <li><i class="fa fa-time"></i>Monday - Saturday: 7.AM - 5.PM</li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
		<!--header-bottom-->
		<div id="sticker" class="header-bottom">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-sm-2">
						<div class="logo">
							<a href="index.html"><img src="assets/images/logo.png" alt="logo"></a>
						</div>
					</div>
					<div class="col-sm-8">
						<div class="mainmenu text-center">
							<nav>
								<ul>
									<li><a href="index.php">Home</a>
										<!--<ul class="submenu">
											<li><a href="index.html">Home Version 1</a></li>
											<li><a href="index-2.html">Home Version 2</a></li>
											<li><a href="index-3.html">Home Version 3</a></li>
											<li><a href="index-4.html">Home Version 4</a></li>
											<li><a href="index-5.html">Home Version 5</a></li>
										</ul>-->
									</li>
								
									<!--<li><a href="#">Gallery</a>
										<ul class="submenu">
											<li><a href="gallery.html">Gallery</a></li>
											<li><a href="gallery-details.html">Gallery Details</a></li>
										</ul>-->
									</li>
									<li><a href="#">Feild</a>
										<ul class="submenu">
											<li><a href="fieldmap.php">Field Maps</a></li>
											<li><a href="aboutfield.php">About Feilds</a></li>
											
										</ul>
									</li>
									<li><a href="#">Analytics</a>
										<ul class="mega-menu">
											<li class="megamenu-single">
												<span class="mega-menu-title">Soil Moisture</span>
												<ul>
													<li><a href="shop.html">Monthly</a></li>
													<li><a href="shop-full-width.html">Weekly</a></li>
												</ul>
											</li>
											<li class="megamenu-single">
												<span class="mega-menu-title">Humidity and Temperature</span>
												<ul>
													<li><a href="shopping-cart.html">Monthly</a></li>
													<li><a href="checkout.html">Weekly</a></li>
													
												</ul>
											</li>
											<li class="megamenu-single">
												<img src="assets/images/ad/3.png" alt="" />
											</li>
										</ul>
									</li>
									<li><a href="about.php">About us</a>
										<!--<ul class="submenu">
											<li><a href="contact.html">Contact Us</a></li>
											<li><a href="service-2.html">Service 2</a></li>
											<li><a href="service-3.html">Service 3</a></li>
										</ul>-->
									</li>

									<li><a href="contact.php">Contact Us</a></li>
									
								</ul>
							</nav>
						</div>
					</div>
					
				
					<div class="search-and-cart">
								
						<!--LogIn-->
						<form class="loginform form-inline my-2 my-lg-0">
							<button class="btn btn-primary my-2 my-sm-0 btnLogin" type="submit" formaction="userPage.php" formtarget="_blank">Log In</button>
						</form>
						<!--LogIn-->
						<form class="loginform form-inline my-2 my-lg-0">
							<button class="btn btn-primary my-2 my-sm-0 btnLogin" type="submit" formaction="index.php" formtarget="_blank">Log Out</button>
						</form>	
					</div>
				</div>
			</div>
		</div>
  	</header>
  	<!--header-area end-->


    <!--page-banner-area start-->
    <div class="page-banner-area bg-7">
        <div class="container">
            <div class="row align-items-center height-400">
                <div class="col-lg-12">
                    <div class="page-banner-text text-white text-center">
                        <h2>Contact Us</h2>
                        <ul class="site-breadcrumb">
                            <li><a href="#">Home</a> <span>></span></li>
                            <li>Contact</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--page-banner-area end-->

    <!--contact-area start-->
    <div class="contact-area mt-100 sm-mt-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="contact-info">
                        <h3>Keep In Touch</h3>
                        <div class="single-contact-info">
                            <h4><i class="fa fa-map-marker"></i>Address</h4>
                            <p>Mahenwaththa,Pitipana,Homagama </p>
                        </div>
                        <div class="single-contact-info">
                            <h4><i class="fa fa-phone"></i>Phone</h4>
                            <p>Mobile: (+94)071 123 456</p>
                            <p>Hotline: (+94)11 1234567</p>
                        </div>
                        <div class="single-contact-info">
                            <h4><i class="fa fa-envelope"></i>Emai</h4>
                            <p>apwisnextgen@gmail.com</p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 sm-mt-75">
                    <div class="contact-form style-3">
                        <form id="contactForm" data-toggle="validator" method="POST" action="contact.php">
                            <div class="row">
                                <div class="col-lg-6">
                                    <input type="text" placeholder="Name" id="name" name="name" required data-error="NEW ERROR MESSAGE" required/>
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" placeholder="Email" id="email" name="email"required />
                                </div>
                                <div class="col-lg-12">
                                    <input type="text" placeholder="Subject" id="subject" name="subject"required />
                                </div>
                                <div class="col-lg-12">
                                    <textarea placeholder="Message" id="message" name="message" required></textarea>
                                </div>
                                <div class="col-lg-4">
                                    <input type="submit" name="submit" id="submit" value="Send message" >
                                </div>
                                <div class="col-lg-8 text-left pt-30">
                                    <div id="msgSubmit" class="hidden"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--contact-area end-->

    <!--google-map area start-->
    <div class="google-map-area mt-80 sm-mt-75 xs-mt-50">
        <div id="googleMap" class="gmap-two"></div>
    </div>
    <!--google-map area end-->

    <!--brands-area start-->
    <div class="brand-area bg-white">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="brand-items">
                        <div class="brand-item">
                            <a href="#">
                                <img class="brand-static" src="assets/images/brands/1.png" alt="" />
                                <img class="brand-dynamic" src="assets/images/brands/1-hover.png" alt="" />
                            </a>
                        </div>
                        <div class="brand-item">
                            <a href="#">
                                <img class="brand-static" src="assets/images/brands/2.png" alt="" />
                                <img class="brand-dynamic" src="assets/images/brands/2-hover.png" alt="" />
                            </a>
                        </div>
                        <div class="brand-item">
                            <a href="#">
                                <img class="brand-static" src="assets/images/brands/3.png" alt="" />
                                <img class="brand-dynamic" src="assets/images/brands/3-hover.png" alt="" />
                            </a>
                        </div>
                        <div class="brand-item">
                            <a href="#">
                                <img class="brand-static" src="assets/images/brands/4.png" alt="" />
                                <img class="brand-dynamic" src="assets/images/brands/4-hover.png" alt="" />
                            </a>
                        </div>
                        <div class="brand-item">
                            <a href="#">
                                <img class="brand-static" src="assets/images/brands/5.png" alt="" />
                                <img class="brand-dynamic" src="assets/images/brands/5-hover.png" alt="" />
                            </a>
                        </div>
                        <div class="brand-item">
                            <a href="#">
                                <img class="brand-static" src="assets/images/brands/6.png" alt="" />
                                <img class="brand-dynamic" src="assets/images/brands/6-hover.png" alt="" />
                            </a>
                        </div>
                        <div class="brand-item">
                            <a href="#">
                                <img class="brand-static" src="assets/images/brands/7.png" alt="" />
                                <img class="brand-dynamic" src="assets/images/brands/7-hover.png" alt="" />
                            </a>
                        </div>
                        <div class="brand-item">
                            <a href="#">
                                <img class="brand-static" src="assets/images/brands/8.png" alt="" />
                                <img class="brand-dynamic" src="assets/images/brands/8-hover.png" alt="" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--brands-area end-->


    <!--footer-area start-->
    <footer class="footer-area">

        <!--footer copyright-->
        <div class="footer-copyright">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <p>APWIS - Team NextGen Insight</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--footer-area end-->

    <!-- modernizr js -->
    <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <!-- jquery-1.12.0 version -->
    <script src="assets/js/vendor/jquery-1.12.0.min.js"></script>
    <!-- bootstra.min js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- meanmenu js -->
    <script src="assets/js/jquery.meanmenu.min.js"></script>
    <!-- easing js -->
    <script src="assets/js/jquery.easing.min.js"></script>
    <!---venobox-js-->
    <script src="assets/js/venobox.min.js"></script>
    <!---slick-js-->
    <script src="assets/js/slick.min.js"></script>
    <!---waypoints-js-->
    <script src="assets/js/waypoints.js"></script>
    <!---counterup-js-->
    <script src="assets/js/jquery.counterup.min.js"></script>
    <!---isotop-js-->
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <!-- jquery-ui js -->
    <script src="assets/js/jquery-ui.min.js"></script>
    <!-- jquery.countdown js -->
    <script src="assets/js/jquery.countdown.min.js"></script>
    <!--contact-form-js-->
    <script src="assets/js/validator.min.js"></script>
    <script src="assets/js/form-scripts.js"></script>
    <!-- plugins js -->
    <script src="assets/js/plugins.js"></script>
    <!-- main js -->
    <script src="assets/js/main.js"></script>

    <!--google-map-->
    <script src="https://maps.google.com/maps/api/js?sensor=false&amp;libraries=geometry&amp;v=3.22&amp;key=AIzaSyChs2QWiAhnzz0a4OEhzqCXwx_qA9ST_lE"></script>
    <script>
        google.maps.event.addDomListener(window, 'load', init);

        function init() {
            var mapOptions = {
                zoom: 11,
                scrollwheel: true,
                center: new google.maps.LatLng(40.6700, -73.9400), // New York

                styles: [{
                    "featureType": "all",
                    "elementType": "labels.text.fill",
                    "stylers": [{
                        "saturation": 36
                    }, {
                        "color": "#333333"
                    }, {
                        "lightness": 40
                    }]
                }, {
                    "featureType": "all",
                    "elementType": "labels.text.stroke",
                    "stylers": [{
                        "visibility": "on"
                    }, {
                        "color": "#ffffff"
                    }, {
                        "lightness": 16
                    }]
                }, {
                    "featureType": "all",
                    "elementType": "labels.icon",
                    "stylers": [{
                        "visibility": "off"
                    }]
                }, {
                    "featureType": "administrative",
                    "elementType": "geometry.fill",
                    "stylers": [{
                        "color": "#fefefe"
                    }, {
                        "lightness": 20
                    }]
                }, {
                    "featureType": "administrative",
                    "elementType": "geometry.stroke",
                    "stylers": [{
                        "color": "#fefefe"
                    }, {
                        "lightness": 17
                    }, {
                        "weight": 1.2
                    }]
                }, {
                    "featureType": "landscape",
                    "elementType": "geometry",
                    "stylers": [{
                        "color": "#f5f5f5"
                    }, {
                        "lightness": 20
                    }]
                }, {
                    "featureType": "poi",
                    "elementType": "geometry",
                    "stylers": [{
                        "color": "#f5f5f5"
                    }, {
                        "lightness": 21
                    }]
                }, {
                    "featureType": "poi.park",
                    "elementType": "geometry",
                    "stylers": [{
                        "color": "#dedede"
                    }, {
                        "lightness": 21
                    }]
                }, {
                    "featureType": "road.highway",
                    "elementType": "geometry.fill",
                    "stylers": [{
                        "color": "#ffffff"
                    }, {
                        "lightness": 17
                    }]
                }, {
                    "featureType": "road.highway",
                    "elementType": "geometry.stroke",
                    "stylers": [{
                        "color": "#ffffff"
                    }, {
                        "lightness": 29
                    }, {
                        "weight": 0.2
                    }]
                }, {
                    "featureType": "road.arterial",
                    "elementType": "geometry",
                    "stylers": [{
                        "color": "#ffffff"
                    }, {
                        "lightness": 18
                    }]
                }, {
                    "featureType": "road.local",
                    "elementType": "geometry",
                    "stylers": [{
                        "color": "#ffffff"
                    }, {
                        "lightness": 16
                    }]
                }, {
                    "featureType": "transit",
                    "elementType": "geometry",
                    "stylers": [{
                        "color": "#f2f2f2"
                    }, {
                        "lightness": 19
                    }]
                }, {
                    "featureType": "water",
                    "elementType": "geometry",
                    "stylers": [{
                        "color": "#e9e9e9"
                    }, {
                        "lightness": 17
                    }]
                }]
            };
            var mapElement = document.getElementById('googleMap');

            var map = new google.maps.Map(mapElement, mapOptions);

            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(40.6700, -73.9400),
                map: map
            });
        }
    </script>
</body>

</html>