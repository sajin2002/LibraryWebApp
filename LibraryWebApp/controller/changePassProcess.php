<?php
session_start();
require_once('../model/libraryDB.php'); 

if (isset($_POST['submit'])) {
    $username = $_SESSION['uname']; 
    $oldPassword = $_POST['oldpassword'];
    $newPassword = $_POST['newpassword'];

  
    if (empty($oldPassword) || empty($newPassword)) {
        echo "Please fill out both password fields.";
        header("refresh: 2; url=../view/changePass.php");
        exit();
    }

   
    if (changePassword($username, $oldPassword, $newPassword)) {
        echo "Password successfully changed!";
        session_unset();

        session_destroy();
        header("refresh: 2; url=../view/login.php");
        exit();
    } else {
        echo "Old password is incorrect or an error occurred.";
        header("refresh: 2; url=../view/changePass.php");
        exit();
    }
} else {
    echo "Invalid access.";
    header("refresh: 2; url=../view/login.php");
    exit();
}
?>
