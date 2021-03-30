<?php

$Name = $_REQUEST['name'];
$Email = $_REQUEST['email'];
$Subject = $_REQUEST['subject'];
$Message = $_REQUEST['message'];


$link = mysqli_connect("localhost", "root", "","apwis");
 
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
if(isset($_REQUEST['form-submit'])){

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
