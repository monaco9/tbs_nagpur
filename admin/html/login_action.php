<?php
require('dbconn.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT PASSWORD FROM `admin` WHERE email = :EMAIL";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':EMAIL', $email);
    $stmt->execute();
    $row = $stmt->fetch();

    if ($row) {
        $hashedPassword = $row['PASSWORD'];

      
        if (password_verify($password, $hashedPassword)) {
          
            session_start();
            $_SESSION['email'] = $email;
            header("Location: dashboard.php"); 
            exit();
        } else {
            
            echo "Invalid email or password. Please try again.";
        }
    } else {
     
        echo "User not found. Please check the email you entered.";
    }
}
?>
