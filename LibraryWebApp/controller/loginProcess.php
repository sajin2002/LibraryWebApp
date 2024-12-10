<?php
include '../model/libraryDB.php';
function validateName($name)
{
      return preg_match("/^[a-zA-Z0-9]+$/",$name);
}
session_start();
$uname =$_POST["uname"] ;
$pass = $_POST["password"];

if (isset($_POST["submit"])){
$isValid = true;
    
if (!validateName($uname))
{
      echo "Format Error! Only letetrs and numbers are allowed.";
      $isValid = false;
      header("refresh: 2; url = ../view/login.php");
    
}
   if (empty($pass)) {
        echo "Password cannot be empty!";
        $isValid = false;
        header("refresh: 2; url = ../view/login.php");
    }
     if ($isValid) {
        $user = authenticateUser($uname, $pass);

        if ($user) {
            $_SESSION["uname"] = $uname;
            header("Location: ../view/borrowBook.php");
            exit();
        } else {
            echo "Invalid username or password.";
            header("refresh: 2; url = ../view/login.php");
        }
    }
}

      
?>