<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" href="css\registerCss.css">
</head>
<body>
<header>
    <div class="header-form">
        <div class="header-form-logo">
            <a href="/"><img class="header-logo" src="image\icons\smartphone.png"></a>
        </div>
        <div class="header-form-time">
            {{ date('D, d m Y ', time()) }}
        </div>
        <div class="header-form-link">
            <a class="link100" href="login">Login</a>
            <a class="link100" href="register">Register</a>
        </div>
    </div>
</header>
<content>
    <div class="register">
        <div class="register-form">
            <div class="register-form-title">
                <div class="title">
                    <h2>Register</h2>
                </div>
            </div>
            <div class="register-form-input">
                <form action="register" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-input100">
                        <input class="input100" type="text" name="name" placeholder="Name">
                        <input class="input100" type="text" name="email" placeholder="Email">
                    </div>
                    <div class="form-input100">
                        <input class="input100" type="text" name="password" placeholder="Password">
                        <input class="input100" type="text" name="repassword" placeholder="Re-Type Password">
                    </div>
                    <div class="form-choose">
                        <div>
                            <input class="file" type="file" name="image">
                        </div>
                        <div class="form-gender">
                            <input class="gender100" type="radio" name="gender" value="Male">Male
                            <input class="gender100" type="radio" name="gender" value="Female">Female
                        </div>
                    </div>
                    <div class="form-input100">
                        <input class="input100-two-columns" type="date" name="date">
                    </div>
                    <div class="form-input100">
                        <input class="input100-two-columns" type="text" name="address" placeholder="Address">
                    </div>
                    <div>
                        <ul>
                            @if ($errors->all())
                                @foreach($errors->all() as $error)
                                    <li><label for="">{{$error}}</label></li>
                                @endforeach
                            @endif
                        </ul>
                    </div>
                    <div class="form-button">
                        <button class="button100" type="submit">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</content>
<footer>
    <div class="footer-form">
        <div>
            <h4>
                superceLL &copy; 2018 | your daily dose | follow us |
            </h4>
        </div>
        <div class="footer-img">
            <img class="img100" src="image/sosmed/facebook.png" alt="">
            <img class="img100" src="image/sosmed/google.png" alt="">
            <img class="img100" src="image/sosmed/twitter.png" alt="">
            <img class="img100" src="image/sosmed/github.png" alt="">
            <img class="img100" src="image/sosmed/instagram.png" alt="">
        </div>
    </div>
</footer>
</body>
</html>