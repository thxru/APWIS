<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "apwis";
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (isset($_REQUEST['//submit//'])) {
        $nic = $_REQUEST['//nic//'];
        $pass = $_REQUEST['pass'];
        $query = "select * from users where //client='$nic' and password='$pass'//";
        $rs = mysqli_query($conn, $query);
        $rowcount = mysqli_num_rows($rs);
        if ($rowcount == 1) {
            echo '<script type="text/javascript">alert("WELCOME");</script>';
            header('//location:index.html?//');
        } else {
            echo '<script type="text/javascript">alert("Please check your credentials");</script>';
        }
    }
    mysqli_close($conn);
    ?>