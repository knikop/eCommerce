<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="sign-up.css" />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Instagram Sign-Up-Clone</title>
</head>

<body>

<?php
if(isset($_GET['error'])){
?>
<div class="alert alert-danger" role="alert">
	<?=$_GET['error']?>
</div>
<?php
}
?>

    <div class="sign-up">
        <img src="https://raw.githubusercontent.com/knikop/eCommerce/main/app/views/img/logo.PNG" alt="" srcset="" />
        <span>Register to watch photos and</span>
        <p>videos of your friends.</p>
        <button class="btn1" type="submit">Login with Facebook</button>
        <div class="partition">
            <div class="left"></div>
            <div class="center">OR</div>
            <div class="right"></div>
        </div>
        <form action="" class="details" method="post">
		<input  class="box2" type="text" name="username" placeholder="Username"/><br>
		<input  class="box3" type="password" name="password" placeholder="Password"/><br>
		<input  class="box4" type="password" name="password_confirm" placeholder="Confirm Password"/><br>
            <div class="sign-up-btn">
                <input class="btn2" type="submit" name="action" value="Sign up" />
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
            <a href="/User/index">Log In</a>
        </div>
        <div class="download">
            <h3>Get the app.</h3>
            <img class="app-store"
                src="https://raw.githubusercontent.com/knikop/eCommerce/main/app/views/img/appstore.png" alt=""
                srcset="" />
            <img class="play-store"
                src="https://raw.githubusercontent.com/knikop/eCommerce/main/app/views/img/googleplay.png" alt="" />
        </div>
    </div>
</body>
<style>
    body {
        background-color: #FAFAFA;
    }

    .sign-up {
        height: 560px;
        width: 355px;
        background-color: white;
        border: 0.3px solid gainsboro;
        margin: 2rem auto;
    }

    .sign-up img {
        height: 45px;
        width: 170px;
        margin: 2rem 0rem 1rem 6.5rem;
    }

    .sign-up span {
        font-size: 16px;
        font-family: "Noto Sans JP", sans-serif;
        font-weight: 600;
        margin: 0rem 4rem;
        color: rgb(161, 157, 157);
    }

    .sign-up p {
        font-size: 16px;
        font-family: "Noto Sans JP", sans-serif;
        font-weight: 600;
        margin: 0rem 5.5rem;
        color: rgb(163, 158, 158);
    }

    .sign-up .btn1 {
        height: 34px;
        width: 270px;
        margin: 1.3rem 2.7rem;
        font-size: 0.9rem;
        color: white;
        border-radius: 5px;
        background-color: #0095f6;
        border: 0.3px solid gainsboro;
        cursor: pointer;
    }

    .partition .left {
        height: 1px;
        width: 110px;
        margin: 0.7rem 2.8rem;
        background-color: rgb(202, 197, 197);
    }

    .partition .center {
        margin: -1.1rem 10.5rem;
        font-size: 13px;
        color: rgb(58, 57, 57);
    }

    .partition .right {
        height: 1px;
        width: 110px;
        margin: 0.6rem 0rem 2.3rem 12.5rem;
        background-color: rgb(202, 197, 197);
    }

    .details .box1 {
        height: 7px;
        width: 235px;
        margin: -1rem 2.7rem;
        padding: 1rem 1rem;
        border-radius: 3px;
        color: rgb(143, 140, 140);
        background-color: #fafafa;
        outline: 0px;
        border: 0.3px solid gainsboro;
    }

    .details .box2 {
        height: 7px;
        width: 235px;
        margin: 1.3rem 2.7rem;
        padding: 1rem 1rem;
        border-radius: 3px;
        color: rgb(143, 140, 140);
        background-color: #fafafa;
        outline: 0px;
        border: 0.3px solid gainsboro;
    }

    .details .box3 {
        height: 7px;
        width: 235px;
        margin: -1rem 2.7rem;
        padding: 1rem 1rem;
        border-radius: 3px;
        color: rgb(143, 140, 140);
        background-color: #fafafa;
        outline: 0px;
        border: 0.3px solid gainsboro;
    }

    .details .box4 {
        height: 7px;
        width: 235px;
        margin: 1.3rem 2.7rem;
        padding: 1rem 1rem;
        border-radius: 3px;
        color: rgb(143, 140, 140);
        background-color: #fafafa;
        outline: 0px;
        border: 0.3px solid gainsboro;
    }

    .sign-up .btn2 {
        height: 34px;
        width: 270px;
        margin: 0rem 2.7rem;
        color: white;
        border-radius: 3px;
        background-color: rgba(var(--d69, 0, 149, 246), 0.3);
        border: 0.3px solid gainsboro;
        cursor: pointer;
    }

    .sign-up .btn2:hover {
        height: 34px;
        width: 270px;
        margin: 0rem 2.7rem;
        color: white;
        border-radius: 3px;
        background-color: #0095f6;
        border: 0.3px solid gainsboro;
        cursor: pointer;
    }

    .terms-conditions p {
        text-decoration: none;
        font-size: 11px;
        margin: 0.5rem 0rem 0rem 3.9rem;
        font-family: sans-serif;
    }

    .terms-conditions span {
        font-size: 11px;
        margin: 0rem 6.8rem;
        font-family: sans-serif;
    }

    .login-box {
        height: 50px;
        width: 355px;
        background-color: white;
        border: 0.3px solid gainsboro;
        margin: 3rem auto;
    }

    .login-box h3 {
        font-size: 16.7px;
        letter-spacing: 0.7px;
        margin: 1rem 4rem;
        font-weight: 400;
        font-family: "Noto Sans JP", sans-serif;
    }

    .login-box a {
        text-decoration: none;
        font-size: 15px;
        color: #0095f6;
        font-weight: bolder;
        margin: 1rem -3.7rem;
        letter-spacing: 0.9px;
        font-family: "Noto Sans JP", sans-serif;
    }

    .download h3 {
        margin: -1.5rem 7.3rem;
        font-size: 15px;
        font-weight: lighter;
        letter-spacing: 1.2px;
        font-family: "Noto Sans JP", sans-serif;
    }

    .download img {
        height: 41px;
        width: 133px;
        cursor: pointer;
    }

    .download .app-store {
        margin: 3rem 0.7rem 0rem 1.7rem;
    }

    .download .play-store {
        margin: -6rem 0.7rem 0rem 0rem;
    }
</style>

</html>