<?php
require('dbconn.php');

$dishname = $_REQUEST['dishname'];
$aboutdish = $_REQUEST['aboutdish'];
$price = $_REQUEST['dishprice'];


$sql = "INSERT INTO `menu` VALUES (NULL,'$dishname','$aboutdish','$price')";
echo $sql;
$conn->exec($sql);
header("Location: menu_admin.php")

?>


   
    