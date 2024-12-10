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

    <h2 class="head-style">Library Management System</h2>
    <section class="navigationBar">
        <nav>
            <a class="navstyle">Book Search</a>
            <a class="navstyle">Book Loan</a>
            <a class="navstyle">Send Reminder</a>
            <a class="navstyle" href="http://localhost/LibraryWebApp/view/changePass.php">Password Change</a>
            <a class="navstyle" href="../controller/logout.php">Logout</a>
        </nav>
    </section>

    <div id="div1" style="text-align: center;">
        <div>
            <figure>
                <img src="https://marketplace.canva.com/EAFfSnGl7II/2/0/1003w/canva-elegant-dark-woods-fantasy-photo-book-cover-vAt8PH1CmqQ.jpg"
                    alt="book1" style="width:200px;height:300px;">
                <figcaption>Walk Into The Shadow</figcaption>
            </figure>

        </div>
        <div>
            <figure>
                <img src="https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1566425108i/33.jpg"
                    alt="book1" style="width:200px;height:300px;">
                <figcaption>The Lord Of The Rings</figcaption>
            </figure>

        </div>
        <div>
            <figure>
                <img src="https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1661032875i/11127.jpg"
                    alt="book1" style="width:200px;height:300px;">
                <figcaption>The Chronicles Of Narnia</figcaption>
            </figure>

        </div>
    </div>
    <div id="div2" style="margin-bottom: 10px; text-align: center;">
        <div>
            <figure>
                <img src="https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1546910265i/2.jpg"
                    alt="book1" style="width:200px;height:300px;">
                <figcaption>Harry Potter and The Order Of Phoenix </figcaption>
            </figure>

        </div>
        <div>
            <figure>
                <img src="https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1586722975i/2767052.jpg"
                    alt="book1" style="width:200px;height:300px;">
                <figcaption>The Hunger Games</figcaption>
            </figure>

        </div>
        <div>
            <figure>
                <img src="https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1700522826i/41865.jpg"
                    alt="book1" style="width:200px;height:300px;">
                <figcaption>Twilight</figcaption>
            </figure>

        </div>
    </div>
    <section class="formstyle">
        <div>
            <form action="http://localhost/LibraryWebApp/controller/process.php" method="post">
                <label class="lstyle" for="sname">Student Name</label>
                <input required type="text" id="sname" name="sname"><br><br>
                <label class="lstyle" for="sid">Student ID</label>
                <input required type="number" id="sid" name="stid"><br><br>
                <label class="lstyle" for="semail">E-mail </label>
                <input required type="email" id="semail" name="stmail"><br><br>
                <label class="lstyle1" for="book">Book Title</label>
                <input required type="text" list="bookname" id="book" name="book">
                <datalist id="bookname">
                    <option value="Walk Into The Shadow">
                    <option value="The Lord Of The Rings">
                    <option value="The Chronicles Of Narnia">
                    <option value="Harry Potter and The Order Of Phoenix">
                    <option value="The Hunger Games">
                    <option value="Twilight">
                </datalist>
                <br><br>
                <label class="lstyle" for="bdate">Borrow Date</label>
                <input required type="date" id="bdate" name="bdate"><br><br>
                <label class="lstyle2" for="bduration">Borrow Duration</label>

                <input type="radio" id="bduration" name="day" value="5">5
                <input type="radio" id="bduration0" name="day" value="7">7

                <input type="submit" value="Submit" name="sbutton">
            </form>
        </div>
    </section>


</body>

</html>