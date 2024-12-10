<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Management System Receipt</title>
    <link rel="stylesheet" href="http://localhost/LibraryWebApp/view/style.css">
</head>

<body>
    <h3 class="head-style">Receipt</h3>

    <section class="recieptstyle">
<?php


function validateName($name) {
    return preg_match("/^[a-zA-Z\s]+$/", $name);
}

function validateID($id) {
    return filter_var($id, FILTER_VALIDATE_INT, array("options" => array("min_range" => 1, "max_range" => 999999)));
}


$sname = $_POST["sname"];
$sid = $_POST["stid"];
$bdate = $_POST["bdate"];
$booktitle = $_POST["book"];
$borrowDuration = $_POST["day"];
$cookie_name = "";

if (isset($_POST["sbutton"])) {
    $isValid = true;
    
    
     if(!isset($_COOKIE[$sid]))
     {

    if (!validateName($sname)) {
        echo "Invalid Student Name. Please enter a valid name.<br>";
        $isValid = false;
    }

    if (!validateID($sid)) {
        echo "Invalid Student ID. Please enter a valid ID.<br>";
        $isValid = false;
        
    }

    if ($isValid) {
        echo "Student Name: ", htmlspecialchars($sname), "<br>";
        echo "Student ID: ", htmlspecialchars($sid), "<br>";

        
        if (isset($booktitle)) {
            echo "Book Title: ", htmlspecialchars($booktitle), "<br>";
        }

        
        if (isset($bdate)) {
            echo "Borrow Date: ", htmlspecialchars($bdate), "<br>";
        }

        
        if (isset($borrowDuration)) {
            
            $expiryDate = new DateTime($bdate);
            $expiryDate->modify('+' . $borrowDuration . ' day');
            echo "Your Expiry Date: ", $expiryDate->format('Y-m-d'), "<br>";
        }

    }
    $cookie_name = $sid;
    $cookie_value = $booktitle;
    setcookie($cookie_name,$cookie_value,time() + (86400*$borrowDuration));
    echo "<br>";
        echo '<a href="http://localhost/LibraryWebApp/view/borrowBook.php">Go to Home Page</a>';
    } 
    else {
        echo "You already borrowed a book<br><br>";
        echo '<a href="http://localhost/LibraryWebApp/view/borrowBook.php">Go to Home Page</a>';
    }


    

}



?>
</section>

</body>
</html>