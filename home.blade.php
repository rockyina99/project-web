<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="css\homeCss.css">
    <link rel="icon" type="image\png" href="image\icons\smartphone.jpg">
</head>
<body>
<header>
    <div class="header-form">
        <div class="header-form-link">
            <?php
                $waktu = time();
                $formatWaktu = date('D, j m Y',$waktu);
                echo $formatWaktu;
            ?>
            <a class="link100" href="#">Login</a>
            <a class="link100" href="#">Register</a>
        </div>
    </div>
</header>
<content>
    <div class="home">
    </div>
</content>
<footer>
    <div class="footer-form">
        <h2>supperceLL &copy; 2018 | your daily dose | follow us |</h2>
        <div>
            <img class="footer-img" src="image\sosmed\facebook.png">
            <img class="footer-img" src="image\sosmed\google.png">
            <img class="footer-img" src="image\sosmed\twitter.png">
            <img class="footer-img" src="image\sosmed\github.png">
            <img class="footer-img" src="image\sosmed\instagram.png">
        </div>
    </div>
</footer>
</body>
</html>