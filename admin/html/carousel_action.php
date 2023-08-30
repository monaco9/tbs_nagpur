<?php
require('dbconn.php');
// $name = $_REQUEST['name'];
$firstheading = $_REQUEST['firstheading'];
$secondheading = $_REQUEST['secondheading'];

$filename = $_FILES["uploadfile"]["name"];
$tempname = $_FILES["uploadfile"]["tmp_name"];
$folder = "./images_admin/" . $filename;
move_uploaded_file($tempname, $folder);

$sql = "INSERT INTO `carousel` VALUES (NULL,'$folder','$firstheading','$secondheading')";
echo $sql;
$conn->exec($sql);
header("Location: dashboard.php")

?>

   
   
    