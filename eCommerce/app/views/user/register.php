<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="sign-up.css" />
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Register</title>
        <link rel="stylesheet" href="register-style.css">
    </head>
    <body>
        <div class="sign-up">
            <img src="../img/logo.PNG" alt="" srcset="" />
            <span>Register to watch photos and</span>
            <p>videos of your friends.</p>
            <button class="btn1" type="submit">Login with Facebook</button>
            <div class="partition">
                <div class="left"></div>
                <div class="center">OR</div>
                <div class="right"></div>
            </div>
            <form action="" method="post" class="details">
                <input class="box2" name="username" type="text" placeholder="Username" required/>
                <input class="box3" name="password" type="text" placeholder="Password" required/>
                <input class="box4" name="password-confirm" type="password" placeholder="Confirm password" required/>
                <div class="sign-up-btn">
                    <input type="submit" name="action" value="Sign up" class="btn2">
                </div>
             </form>
            <div class="terms-conditions">
                <p>
                    By signing up, you agree to our
                    <strong style="color: rgb(121, 110, 110)">Terms, </strong><strong
                        style="color: rgb(121, 110, 110)">Data</strong>
                </p>
                <span>
                    <strong style="color: rgb(121, 110, 110)">Policy</strong>
                    and
                    <strong style="color: rgb(121, 110, 110)">Cookie Policy .</strong>
                </span>
            </div>
            <div class="login-box" style="display: flex">
                <h3>Have an account?</h3>
                <a href="../login/login.html">Log In</a>
            </div>
            <div class="download">
                <h3>Get the app.</h3>
                <img class="app-store" src="../img/appstore.png" alt=""
                    srcset="" />
                <img class="play-store" src="../img/googleplay.png" alt="" />
            </div>
        </div>
    </body>
</html>