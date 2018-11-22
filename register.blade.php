<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Register</title>
    <link rel="stylesheet" type="text/css" href="css\registerCss.css">
    <link rel="icon" type="image/png" href="image\icons\smartphone.png">
</head>
<body>
<header>
    <div class="header-form">
        <div class="header-form-link">
            <?php
                $waktu = time();
                $formatWaktu = date('D,j m Y',$waktu);
                echo $formatWaktu;
            ?>
            <a class="link100" href="#">Login</a>
            <a class="link100" href="#">Register</a>
        </div>
    </div>
</header>
<content>
    <div>
        <form >
            <div class="register">
                <div class="register-form">
                    <div class="register-form-title">
                        <span>Register</span>
                    </div>

                    <div class="register-form-input">
                        <div class="register-box">
                            <input id="txtName" class="register-box-input-two-colomns" type="text" name="name" placeholder="Name">
                            <input id="txtEmail" class="register-box-input-two-colomns" type="text" name="email" placeholder="Email">
                        </div>
                        <div class="register-box">
                            <input id="txtPass" class="register-box-input-two-colomns" type="text" name="pass" placeholder="Password">
                            <input id="txtRepass" class="register-box-input-two-colomns" type="text" name="repass" placeholder="Re-type Password">
                        </div>
                        <div class="register-form-file">
                            <div class="register-file">
                                <input class="file" type="file" name="image">
                            </div>
                            <div class="register-form-gender">
                                <input id="txtMale" class="gender" type="radio" name="gender" value="Male">Male<br>
                                <input id="txtFemale" class="gender"type="radio" name="gender" value="Female">Female
                            </div>
                        </div>
                        <div class="register-box">
                            <input id="txtDate" class="register-box-input-one-columns" type="date" name="date" placeholder="dd/mm/yyyy">
                        </div>
                        <div class="register-box">
                            <input id="txtAddress" class="register-box-input-one-columns" type="text" name="address" placeholder="Address">
                        </div>
                        <div class="register-button">
                            <br>
                            <input class="button" type="submit" name="Submit" value="Submit">
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
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