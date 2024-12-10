<?php
session_start();
if(isset($_SESSION["uname"]))
{
    header("refresh;0.5; url= borrowBook.html");
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
        <h1 class="head-style">Login</h1>
        <form action="../controller/loginProcess.php" method="post">
        <label class="lstyle1" for="uname">Username</label>
        <input type="text" id="uname"name="uname"><br><br>
        <label class="lstyle1" for="password">Password</label>
        <input type="password" id="password", name="password"><br><br>
        <input type="submit" name="submit">
        <a class="navstyle" href="http://localhost/LibraryWebApp/view/forgotpass.php">Forgot Password</a>
        </form>

        </div>
    </section>
    
</body>

</html>