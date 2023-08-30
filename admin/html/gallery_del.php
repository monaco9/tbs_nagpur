<?php
require('dbconn.php');
$srno = $_REQUEST['sr_no'];
$sql = "DELETE FROM `gallery` WHERE `gallery`.`SR_NO` = $srno";
error_log("=====Delete SQL: $sql======\n\n");
$conn->exec($sql);
header("Location: gallery_admin.php")
 ?>