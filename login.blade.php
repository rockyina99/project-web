<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="css\loginCss.css">
    <link rel="icon" type="image/png" href="image/icons/smartphone.png">
</head>
<body>
<header>
    <div class="header-form">
        <div class="header-form-link">
            <?php
            $waktu = time();
            $format_waktu = date('D,j M Y',$waktu);
            echo $format_waktu;
            ?>
            <a class="link100" href="#">Login</a>
            <a class="link100" href="#">Register</a>
        </div>
    </div>
</header>
<content>
    <form>
        <div class="login">
            <div class="login-form">
                <div class="login-form-title">
                    <span>Log in</span>
                </div>
                <div class="login-form-input">
                    <div class="login-input">
                        <input class="input100" type="text" name="email" placeholder="Email">
                    </div>
                    <div class="login-input">
                        <input class="input100" type="text" name="pass" placeholder="Password">
                    </div>
                    <div class="login-checkbox">
                        <input class="checkbox100" type="checkbox" name="check">
                        <span>Remember Me</span>
                    </div >
                    <div class="login-button">
                        <input class="button100" type="submit" name="submit" value="Submit">
                    </div>
                </div>
            </div>
        </div>
    </form>
</content>
<footer>
    <div class="footer-form">
        <h2>superceLL &copy; 2018 | your daily dose | follow us | </h2>
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