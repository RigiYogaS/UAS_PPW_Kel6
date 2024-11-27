<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Morev - Login</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" />
    <link rel="stylesheet" href="<?= base_url('/cssAuth/login.css'); ?>" />
</head>

<body>
    <div class="container">
        <div class="kembali">
            <a href="<?= base_url('/'); ?>"><i class="bx bxs-x-square"></i></a>
        </div>
        <div class="logo">
            <img alt="Morev logo" height="50" src="<?= base_url('/assets/logos/logo.svg'); ?>" width="50" />
            <div class="title">Morev</div>
        </div>
        <input class="input-field" placeholder="Email" type="email" />
        <input class="input-field" placeholder="Password" type="password" />
        <a href="" class="forgot-password">Forgot your password?</a>
        <a href="<?= base_url('/dashboard/index'); ?>"><button class="sign-in-button">Sign In</button></a>
        <div class="sign-up">
            Don't have an account?
            <a href="<?= base_url('/auth/regis'); ?>" class="sign-up-click">Sign Up</a>
        </div>
        <div class="or">or</div>
        <button class="continue">
            <i class="bx bxl-google continue-icon"></i>
            Continue with Google
        </button>
        <button class="continue">
            <i class="bx bxl-microsoft continue-icon"></i>
            Continue with Microsoft Account
        </button>
        <button class="continue">
            <i class="bx bxl-apple continue-icon"></i>
            Continue with Apple
        </button>
    </div>
    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <p id="modal-message">This is a modal message!</p>
        </div>
    </div>
    <footer>
        <ul>
            <li>
                <a href=""><i class="bx bxl-facebook-circle footer-icon"></i></a>
            </li>
            <li>
                <a href=""><i class="bx bxl-tiktok footer-icon"></i></a>
            </li>
            <li>
                <a href=""><i class="bx bxl-instagram-alt footer-icon"></i></a>
            </li>
            <li>
                <a href=""><i class="bx bxl-youtube footer-icon"></i></a>
            </li>
        </ul>
        <p>
            <small>Copyright © 2024 Morev. All rights reserved.</small>
        </p>
    </footer>
    <script src="script.js"></script>
</body>

</html>