<!-- delete -->
<?php
require('dbconn.php');
$srno = $_REQUEST['sr_no'];
$sql = "DELETE FROM `menu` WHERE `menu`.`SR_NO` = $srno";

error_log("=====Delete SQL: $sql======\n\n");
$conn->exec($sql);
header("Location: menu_admin.php")
 ?>
   