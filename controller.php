<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> Controll Feild - APWIS </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="manifest" href="site.html">
    <link rel="apple-touch-icon" href="icon.html">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
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
    require("database_connect.php");
    $sql = "Select * from mainvalues where ID=(SELECT max(id) FROM mainvalues)";
    $result = mysqli_query($con,$sql);
    $sql3 = "Select WatM from motorstatus where mid=(SELECT max(mid) FROM motorstatus)";
            $Mstat1 = mysqli_query($con,$sql3);
            $sql4 = "Select PestM from motorstatus where mid=(SELECT max(mid) FROM motorstatus)";
            $Mstat2 = mysqli_query($con,$sql4);
        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            
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
									<li><a href="controller.html">Controller</a>
										<!--<ul class="submenu">
											<li><a href="about.html">About Us</a></li>
											<li><a href="coming-soon.html">Coming Soon</a></li>
											<li><a href="404.html">Error 404</a></li>
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


    <!--service-area end-->
    <div class="site-content">
        <div class="site-header">
            <div class="container">
                <!-- Default snippet for navigation -->

                <div class="forecast-table">
                    <div class="container">
                        <div class="forecast-container">
                            <div class="today forecast">

                                <div class="degree">
                                    <div style="text-align:center;padding: 0.005em;em 0;">
                                        <iframe src="https://www.zeitverschiebung.net/clock-widget-iframe-v2?language=en&size=large&timezone=Asia%2FColombo" width="100%" height="140" frameborder="0" seamless></iframe>
                                    </div>
                                    <a class="weatherwidget-io" href="https://forecast7.com/en/7d8780d77/sri-lanka/" data-label_1="Colombo" data-label_2="WEATHER" data-font="Roboto" data-icons="Climacons Animated" data-theme="blue-mountains" data-shadow="rgba(255, 255, 255, 0.42)" data-textcolor="#000000"
                                        data-highcolor="#ff5555" data-lowcolor="#800202" data-mooncolor="#f6ef23" data-cloudfill="#235daa" data-raincolor="#0d0b32">Colombo WEATHER</a>
                                    <script>
                                        ! function(d, s, id) {
                                            var js, fjs = d.getElementsByTagName(s)[0];
                                            if (!d.getElementById(id)) {
                                                js = d.createElement(s);
                                                js.id = id;
                                                js.src = 'https://weatherwidget.io/js/widget.min.js';
                                                fjs.parentNode.insertBefore(js, fjs);
                                            }
                                        }(document, 'script', 'weatherwidget-io-js');
                                    </script>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <br><br><br>


    <div class="bg">

        <div class="threecard-container">
            <div class="row 0">
                <div class="col-md-4">
                    <div class="three-card">

                        <div class="cardtext-container">

                            <div class="forecast-container">
                                <div class="today forecast">
                                   
                                    <div class="forecast-content">
                                        <div class="location">SOIL MOISTURE</div>
                                        <br>
                                        <div class="degree">
                                            <div class="num"><label for="Soil Moisture"><?php echo $row['Moisture']; ?><sup>o</sup>C</label></div>
                                            <div class="forecast-icon">
                                                <img src="assets/images/icons/soil.png" alt="" width=95>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-4">
                    <div class="three-card">

                        <div class="cardtext-container">

                            <div class="forecast-container">
                                <div class="today forecast">
                                    <!-- .forecast-header -->
                                    <div class="forecast-content">
                                        <div class="location">TEMPERATURE</div>
                                        <br>
                                        <div class="degree">
                                            <div class="num"><label for="Temperature"><?php echo $row['Temp']; ?><sup>o</sup>C</label></div>
                                            <div class="forecast-icon">
                                                <img src="assets/images/icons/temp.png" alt="" width=110>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-4">
                    <div class="three-card">

                        <div class="cardtext-container">

                            <div class="forecast-container">
                                <div class="today forecast">
                                    <!-- .forecast-header -->
                                    <div class="forecast-content">
                                        <div class="location">HUMIDITY</div>
                                        <br>
                                        <div class="degree">
                                            <div class="num"><label for="Humidity"><?php echo $row['Hum']; ?><sup>o</sup>C</label></div>
                                            <div class="forecast-icon">
                                                <img src="assets/images/icons/humidity.png" alt="" width=100>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
<?php
}
?>
                    </div>
                </div>
            </div>
            <br>



            <div class="card-container">
                <div class="card2">

                    <p class="card2__name">WATER CAPACITY</p>
                    <br><br><br>
                    <div class="grid-container">
                        <div class="grid-child-posts">
                            Full capacity:400ml
                        </div>
                        <div class="onoffswitch" align="center">
                            <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch" tabindex="0" <?php echo ($row['WaterLvl']=='0')?"checked":"checked" ;?>/>
                            <label class="onoffswitch-label" for="myonoffswitch">
				<span class="onoffswitch-inner"></span>
				<span class="onoffswitch-switch"></span>
			</label>
                        </div>

                    </div>
                    <br><br>
                    <button class="btn-fill draw-border">Fill</button>


                </div>
                <div class="card2">

                    <p class="card2__name">FERTILIZER CAPACITY </p>
                    <br><br><br>
                    <div class="grid-container">

                        <div class="grid-child-posts">
                            Full capacity:400ml
                        </div>
                        <div class="onoffswitch1">
                             <input type="checkbox" name="onoffswitch1" class="onoffswitch1-checkbox" id="myonoffswitch1" tabindex="0" <?php echo ($row['PestLvl']=='0')?"checked":"checked" ;?> />
                            <label class="onoffswitch1-label" for="myonoffswitch1">
				  <span class="onoffswitch1-inner"></span>
				  <span class="onoffswitch1-switch"></span>
			  </label>
                        </div>

                    </div>
                    <br><br>
                    <button class="btn-fill draw-border">Fill</button>


                </div>
                <div class="card2">

                    <p class="card2__name">MOTOR STATUS</p>
                    <br>
                    <img src="assets/images/icons/111.png" alt="" width=80>
                    <br>
                    <div class="grid-container">

                        <div class="grid-child-posts">
                            <b>Water Pump :</b>
                        </div>
                        <label class="switch">
                        <?php
                        if($Mstat1 == "1"){
                            ?><input type="checkbox" checked/> <?php
                        }else{
                            ?><input type="checkbox" unchecked/><?php
                        }?>
				
				<span class="slider round"></span>
			  </label>

                        <div class="grid-child-posts">
                            <b>Fertilizer Pump :</b>
                        </div>
                        <label class="switch">
                        <?php
                        if($Mstat2 == "1"){
                            ?><input type="checkbox" checked/> <?php
                        }else{
                            ?><input type="checkbox" unchecked/><?php
                        }?>
				<span class="slider round"></span>
			  </label>
                    </div>
                </div>
            </div>
            <br>
            <br><br><br><br><br>
            <!--*****************************Water shedule*****************************-->

            <div class="row">
                <div class="col-sm-1"></div>
                <div class="water-container">
                    <div class="testbox">
                        <form action="/" class="shedule1">
                            <h1><b><center>Automatic Water Sheduling</center></b></h1>
                            <br><br><br>

                            <div class="item">
                                <div class="name-item">
                                    <h2> Next shedule after:</h2>
                                    <p class="timer" id="demo1"></p>

                                </div>
                            </div>

                            <br><br>

                            <div class="item">
                                <div class="name-item">
                                    <h2>Next Sheduled Time:</h2>
                                    <label>Mar 28, 2021 15:37:25</label>

                                </div>
                            </div>

                            <br><br>

                            <div class="item">
                                <div class="name-item days">
                                    <h2>Sheduled Time Gap</h2>
                                    <label>08:30:00</label>

                                </div>
                            </div>
                            <br><br>

                            <button class="btn-edit" onclick="myFunction()">Reshedule</button>

                            <br><br><br>
                            <!--Reshedule-->
                            <div id="myDIV">

                                <div class="name-item">
                                    <h2>Water Motor Status</h2>
                                    <label class="switch">
					  <input type="checkbox">
					  <span class="slider round"></span>
					</label>

                                </div>

                                <div class="item">
                                    <div class="name-item">
                                        <h2>Water Filling Capacity (ml)</h2>

                                        <input type="range" min="0" max="200" value="100" step="1" list="tickmarks" id="rangeInput" oninput="output.value = rangeInput.value">
                                        <datalist id="tickmarks">
							<option value="0 to 50">0</option>
							<option>50</option>
							<option>100</option>
							<option>150</option>
							<option>200</option>
							
							</datalist>
                                        <output id="output" for="rangeInput">100</output>
                                        <!-- Just to display selected value -->


                                    </div>
                                </div>


                                <div class="item">
                                    <h2>Reshedule next date:</h2>
                                    <input type="date" name="name" required/>
                                    <i class="fas fa-calendar-alt"></i>
                                </div>
                                <div class="item">
                                    <h2>Reshedule time:</h2>
                                    <input type="time" name="name" required/>
                                    <i class="fas fa-clock"></i>
                                </div>
                                <div class="item">
                                    <h2>Reshedule time gap:</h2>
                                    <input type="datetime" name="days" required/>
                                    <i class="fas fa-clock"></i>
                                </div>
                                <div class="btn-block">
                                    <button type="submit" href="/">SAVE</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-sm-0.5"></div>

                <!--*****************************Fertilizer shedule*****************************-->
                <div class="fertilizer-container">
                    <div class="testbox">
                        <form action="/" class="shedule2">
                            <h1><b><center>Automatic Fertilizer Sheduling</center></b></h1>

                            <br><br><br>

                            <div class="item">
                                <div class="name-item">
                                    <h2> Next shedule after:</h2>
                                    <p class="timer" id="demo2"></p>

                                </div>
                            </div>

                            <br><br>

                            <div class="item">
                                <div class="name-item">
                                    <h2>Next Sheduled Time</h2>
                                    <label>Mar 28, 2021 15:37:25</label>

                                </div>
                            </div>

                            <br><br>

                            <div class="item">
                                <div class="name-item days">
                                    <h2>Sheduled Time Gap</h2>
                                    <label>14 days</label>

                                </div>
                            </div>

                            <br><br>

                            <button class="btn-edit" onclick="myFunction2()">Reshedule</button>

                            <br><br><br>

                            <div id="myDIV2">

                                <div class="name-item">
                                    <h2>Fertilizer Motor Status</h2>
                                    <label class="switch">
				  <input type="checkbox">
				  <span class="slider round"></span>
				</label>
                                </div>


                                <div class="name-item">
                                    <h2>Water Level Capacity (ml)</h2>

                                    <input type="range" min="0" max="200" value="100" step="1" list="tickmarks" id="rangeInput" oninput="output.value = rangeInput.value">
                                    <datalist id="tickmarks">
						<option value="0 to 50">0</option>
						<option>50</option>
						<option>100</option>
						<option>150</option>
						<option>200</option>
						
						</datalist>
                                    <output id="output" for="rangeInput">100</output>
                                    <!-- Just to display selected value -->


                                </div>



                                <div class="item">
                                    <h2>Reshedule next date:</h2>
                                    <input type="date" name="name" required/>
                                    <i class="fas fa-calendar-alt"></i>
                                </div>

                                <div class="item">
                                    <h2>Reshedule time:</h2>
                                    <input type="time" name="name" required/>
                                    <i class="fas fa-clock"></i>
                                </div>

                                <div class="item">
                                    <h2>Reshedule time gap:</h2>
                                    <input type="datetime" name="days" required/>
                                    <i class="fas fa-clock"></i>
                                </div>
                                <div class="btn-block">
                                    <button type="submit" href="/">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <br><br>



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
            <!-- plugins js -->
            <script src="assets/js/plugins.js"></script>
            <!-- main js -->
            <script src="assets/js/main.js"></script>
            <!--countdown-->
            <script src="assets/js/countdown.js"></script>


</body>

</html>