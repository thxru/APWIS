<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Register</title>
    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Font-->
    <link rel="stylesheet" type="text/css" href="NewCSS/css/montserrat-font.css">
    <link rel="stylesheet" type="text/css" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
    <!-- Main Style Css -->
    <link rel="stylesheet" href="NewCSS/css/register-style.css" />
    <!-- bootstrap v4.0.0 -->
    <link rel="stylesheet" href="NewCSS/assets/css/bootstrap.min.css">
    <!-- fontawesome-icons css -->
    <link rel="stylesheet" href="NewCSS/assets/css/font-awesome.min.css">
    <!-- themify-icons css -->
    <link rel="stylesheet" href="NewCSS/assets/css/themify-icons.css">
    <!-- elegant css -->
    <link rel="stylesheet" href="NewCSS/assets/css/elegant.css">
    <!-- meanmenu css -->
    <link rel="stylesheet" href="NewCSS/assets/css/meanmenu.min.css">
    <!-- animate css -->
    <link rel="stylesheet" href="NewCSS/assets/css/animate.css">
    <!-- venobox css -->
    <link rel="stylesheet" href="NewCSS/assets/css/venobox.css">
    <!-- jquery-ui.min css -->
    <link rel="stylesheet" href="NewCSS/assets/css/jquery-ui.min.css">
    <!-- slick css -->
    <link rel="stylesheet" href="NewCSS/assets/css/slick.css">
    <!-- slick-theme css -->
    <link rel="stylesheet" href="NewCSS/assets/css/slick-theme.css">
    <!-- helper css -->
    <link rel="stylesheet" href="NewCSS/assets/css/helper.css">
    <!-- style css -->
    <link rel="stylesheet" href="NewCSS/css/index-style.css">
    <!-- responsive css -->
    <link rel="stylesheet" href="NewCSS/assets/css/responsive.css">
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "apwis";
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (isset($_REQUEST['Login'])) {
        $name = $_REQUEST['username'];
        $pass = $_REQUEST['password'];
        $query = "select * from users where username='$name' and password='$pass'";
        $rs = mysqli_query($conn, $query);
        $rowcount = mysqli_num_rows($rs);
        if ($rowcount == 1) {
            echo '<script type="text/javascript">alert("WELCOME");</script>';
            header('location:index.php?user=$nic');
        } else {
            echo '<script type="text/javascript">alert("Please check your NIC & Password");</script>';
        }
    }
    mysqli_close($conn);
    ?>
</head>

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
            <button class="btn btn-primary my-2 my-sm-0 btnLogin" type="submit" formaction="index.html" formtarget="_self">Home</button>
        </form>

    </div>
    </div>
    </div>
    </div>
    </div>
</header>
<!--header-area end-->
<header class="header-area">
    <!--header-top-->
    <div class="header-top d-none">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-9">
                </div>
                <div class="col-sm-3">
                </div>
            </div>
        </div>
    </div>
    <!--header-bottom-->

    <body class="form-v10">
        <div class="page-content">
            <div class="form-v10-content">
                <form class="form-detail" action="#" method="post" id="myform">
                    <div class="form-left">
                        <h2>Login</h2>
                       
                        <div class="form-row form-row-1">
                            <input type="text" name="username" class="nic" id="username" placeholder="username" required>
                        </div>
                        <div class="form-row form-row-3">
                            <input type="text" name="password" class="password" id="password" placeholder="Password" required>
                        </div>
                        <div class="form-row-last">
                            <input type="submit" name="Login" class="register" value="Login">
                        </div>
                    </div>
                    <div class="form-right">
                        <h2>Contact Details</h2>
                        <div class="form-row">
                            <input type="text" name="address" class="address" id="address" placeholder="Address" required>
                        </div>
                        <div class="form-row">
                            <input type="text" name="street" class="street" id="street" placeholder="Street" required>
                        </div>
                        <div class="form-group">
                            <div class="form-row form-row-1">
                                <input type="text" name="district" class="district" id="district" placeholder="District" required>
                            </div>
                            <div class="form-row form-row-2">
                                <input type="text" name="zip" class="zip" id="zip" placeholder="Zip Code" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <select name="Province">
                            <option value="country">Province</option>
                            <option value="Vietnam">Western Province</option>
                            <option value="Malaysia">Southern Province</option>
                            <option value="India">Eastern Province</option>
                            <option value="country">Northern Province</option>
                            <option value="Vietnam">North Western Province</option>
                            <option value="Malaysia">North Central Province</option>
                            <option value="India">Uva Province</option>
                            <option value="country">Sabaragamuwa Province</option>
                        </select>
                            <span class="select-btn">
                            <i class="zmdi zmdi-chevron-down"></i>
                        </span>
                        </div>

                        <div class="form-row">
                            <input type="text" name="email" id="email" class="input-text" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <div class="form-row form-row-3">
                                <input type="text" name="phone" class="phone" id="phone" placeholder="Phone Number" required>
                            </div>
                        </div>
                        <div class="form-row-last">
                            <input type="submit" name="register" class="register" value="Register">
                        </div>
                    </div>
                </form>
            </div>
        </div>

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

    </body>

</html>