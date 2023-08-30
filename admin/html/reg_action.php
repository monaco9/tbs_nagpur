<?php
require('dbconn.php');
$name = $_REQUEST['name'];
print_r($name);
$email = $_POST['email'];
$password = $_POST['password'];

$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO `admin`(`SR_NO`, `NAME`, `EMAIL`, `PASSWORD`) VALUES (Null,'$name','$email','$password')";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':name', $name);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':password', $hashedPassword);
echo $sql;
$conn->exec($sql);

header("Location: login.php");
?>
