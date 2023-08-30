<?php
require('dbconn.php');

$name = $_REQUEST['name'];
$mobile = $_REQUEST['mobile'];

$email = $_REQUEST['email'];
$message = $_REQUEST['message'];
$subject = $_REQUEST['subject'];



$sql = "INSERT INTO `contacts` VALUES (NULL,'$name','$mobile','$email','$subject','$message')";
echo $sql;
$conn->exec($sql);
header("Location: ../../thankyou.html")

?>

   
   
    