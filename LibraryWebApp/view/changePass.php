<?php
session_start();
if (!isset($_SESSION["uname"])) {
    header("refresh:0.5; url=../view/login.php");
    exit(); 
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Management System</title>
    <link rel="stylesheet" href="http://localhost/LibraryWebApp/view/style.css">
</head>

<body>
    <section class="loginformstyle">
        <div>
        <h1 class="head-style">Change Password</h1>
        <form action="../controller/changePassProcess.php" method="post">
        <label class="lstyle1" for="uname">Username</label>
        <input type="text" id="uname"name="uname"><br><br>
        <label class="lstyle2" for="oldpassword">Old Password</label>
        <input type="password" id="oldpassword"name="oldpassword"><br><br>
        <label class="lstyle2" for="newpassword">New Password</label>
        <input type="password" id="newpassword", name="newpassword"><br><br>
        <input type="submit" name="submit">

        </form>
        

        </div>
    </section>
    
</body>

</html>