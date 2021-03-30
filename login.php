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
	<link rel="stylesheet" type="text/css" href="login.css" />
	<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "apwis";
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (isset($_REQUEST['login'])) {
        $name = $_REQUEST['username'];
        $pass = $_REQUEST['password'];
        $query = "select * from users where usernam='$name' and password='$pass'";
        $rs = mysqli_query($conn, $query);
        $rowcount = mysqli_num_rows($rs);
        if ($rowcount == 1) {
            echo '<script type="text/javascript">alert("WELCOME");</script>';
            header('//location:index.php?//');
        } else {
            echo '<script type="text/javascript">alert("Please check your credentials");</script>';
        }
    }
    mysqli_close($conn);
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
					<div class="search-and-cart">
								
						<!--LogIn-->
						<form class="loginform form-inline my-2 my-lg-0">
							<button class="btn btn-primary my-2 my-sm-0 btnLogin" type="submit" formaction="index.html" formtarget="_blank">Home</button>
						</form>
						
					</div>
					</div>
				</div>
			</div>
		</div>
  	</header>
  	<!--header-area end-->
	  <div class="login-wrap">
		<div class="login-html">
			<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
			<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
			<div class="login-form">
				<div class="sign-in-htm">
					<div class="group">
						<label for="user" class="label" >Username</label>
						<input type="text" id="user" class="input" name="username" required>
					</div>
					<div class="group">
						<label for="pass" class="label" name="password" required>Password</label>
						<input id="pass" type="password" class="input" data-type="password">
					</div>
					<!--<div class="group">
						<input id="check" type="checkbox" class="check" checked>
						<label for="check"><span class="icon"></span> Keep me Signed in</label>
					</div>-->
					<div class="container-login100-form-btn">
                        <button class="login100-form-btn" name="submit">
                            Login
                        </button>
                    </div>
					<div class="hr"></div>
					<div class="foot-lnk">
						<a href="#forgot">Forgot Password?</a>
					</div>
				</div>
				<div class="sign-up-htm">
					<div class="group">
						<label for="user" class="label" name="username" required>Username</label>
						<input id="user" type="text" class="input">
					</div>
					<div class="group">
						<label for="pass" class="label" name="password" required>Password</label>
						<input id="pass" type="password" class="input" data-type="password">
					</div>
					<div class="group">
						<label for="pass" class="label" name="Rpass" required>Repeat Password</label>
						<input id="pass" type="password" class="input" data-type="password">
					</div>
					<div class="group">
						<label for="pass" class="label" name="email" required>Email Address</label>
						<input id="pass" type="text" class="input">
					</div>
					<div class="container-login100-form-btn">
                        <button class="login100-form-btn" name="submit">
                            Sign up
                        </button>
                    </div>
				
					<div class="foot-lnk">
						<label for="tab-1">Already Member?</a>
					</div>
				</div>
			</div>
		</div>
	</div>
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

				styles: 
					[
						{
							"featureType": "all",
							"elementType": "labels.text.fill",
							"stylers": [
								{
									"saturation": 36
								},
								{
									"color": "#333333"
								},
								{
									"lightness": 40
								}
							]
						},
						{
							"featureType": "all",
							"elementType": "labels.text.stroke",
							"stylers": [
								{
									"visibility": "on"
								},
								{
									"color": "#ffffff"
								},
								{
									"lightness": 16
								}
							]
						},
						{
							"featureType": "all",
							"elementType": "labels.icon",
							"stylers": [
								{
									"visibility": "off"
								}
							]
						},
						{
							"featureType": "administrative",
							"elementType": "geometry.fill",
							"stylers": [
								{
									"color": "#fefefe"
								},
								{
									"lightness": 20
								}
							]
						},
						{
							"featureType": "administrative",
							"elementType": "geometry.stroke",
							"stylers": [
								{
									"color": "#fefefe"
								},
								{
									"lightness": 17
								},
								{
									"weight": 1.2
								}
							]
						},
						{
							"featureType": "landscape",
							"elementType": "geometry",
							"stylers": [
								{
									"color": "#f5f5f5"
								},
								{
									"lightness": 20
								}
							]
						},
						{
							"featureType": "poi",
							"elementType": "geometry",
							"stylers": [
								{
									"color": "#f5f5f5"
								},
								{
									"lightness": 21
								}
							]
						},
						{
							"featureType": "poi.park",
							"elementType": "geometry",
							"stylers": [
								{
									"color": "#dedede"
								},
								{
									"lightness": 21
								}
							]
						},
						{
							"featureType": "road.highway",
							"elementType": "geometry.fill",
							"stylers": [
								{
									"color": "#ffffff"
								},
								{
									"lightness": 17
								}
							]
						},
						{
							"featureType": "road.highway",
							"elementType": "geometry.stroke",
							"stylers": [
								{
									"color": "#ffffff"
								},
								{
									"lightness": 29
								},
								{
									"weight": 0.2
								}
							]
						},
						{
							"featureType": "road.arterial",
							"elementType": "geometry",
							"stylers": [
								{
									"color": "#ffffff"
								},
								{
									"lightness": 18
								}
							]
						},
						{
							"featureType": "road.local",
							"elementType": "geometry",
							"stylers": [
								{
									"color": "#ffffff"
								},
								{
									"lightness": 16
								}
							]
						},
						{
							"featureType": "transit",
							"elementType": "geometry",
							"stylers": [
								{
									"color": "#f2f2f2"
								},
								{
									"lightness": 19
								}
							]
						},
						{
							"featureType": "water",
							"elementType": "geometry",
							"stylers": [
								{
									"color": "#e9e9e9"
								},
								{
									"lightness": 17
								}
							]
						}
					]
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