<?php
require_once('../model/libraryDB.php'); 

if (isset($_POST['submit'])) {
    $username = $_POST['uname']; 
    $securityKey = $_POST['securitykey'];
    $newPassword = $_POST['newpassword'];

  
    if (empty($securityKey) || empty($newPassword)) {
        echo "Please fill out the fields.";
        header("refresh: 2; url=../view/forgotpass.php");
        exit();
    }

   
    if (forgotPassword($username, $securityKey, $newPassword)) {
        echo "Password successfully changed!";

        header("refresh: 2; url=../view/login.php");
        exit();
    } else {
        echo "Security key is incorrect or an error occurred.";
        header("refresh: 2; url=../view/login.php");
        exit();
    }
} else {
    echo "Invalid access.";
    header("refresh: 2; url=../view/login.php");
    exit();
}
?>
