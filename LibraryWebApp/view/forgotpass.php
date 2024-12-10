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
        <h1 class="head-style">Forgot Password</h1>
        <form action="../controller/processforgotpass.php" method="post">
        <label class="lstyle1" for="uname">Username</label>
        <input type="text" id="uname"name="uname"><br><br>
        <label class="lstyle2" for="securitykey">Security Key</label>
        <input type="text" id="securitykey"name="securitykey"><br><br>
        <label class="lstyle1" for="newpassword">Password</label>
        <input type="password" id="newpassword", name="newpassword"><br><br>
        <input type="submit" name="submit">

        </form>
        

        </div>
    </section>
    
</body>

</html>