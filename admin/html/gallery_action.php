<?php
require('dbconn.php');

$imagename = $_REQUEST['imagename'];


$filename = $_FILES["uploadfile"]["name"];
$tempname = $_FILES["uploadfile"]["tmp_name"];
$folder = "./../../images/" . $filename;
move_uploaded_file($tempname, $folder);

$sql = "INSERT INTO `gallery` VALUES (NULL,'$imagename','$folder')";
echo $sql;
$conn->exec($sql);
header("Location: gallery_admin.php")

?>

