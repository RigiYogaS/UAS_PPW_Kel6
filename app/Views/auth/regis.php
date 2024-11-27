<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Morev Sign Up</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" />
    <link rel="stylesheet" href="<?= base_url('/cssAuth/regis.css'); ?>" />
</head>

<body>
    <div class="container">
        <div class="kembali">
            <a href="login.html"><i class="bx bxs-x-square"></i></a>
        </div>
        <div class="logo">
            <img alt="Morev logo" height="50" src="<?= base_url('/assets/logos/logo.svg'); ?>" width="50" />
            <div class="title">Welcome to Morev</div>
        </div>
        <input class="input-field" placeholder="Email" type="email" />
        <input class="input-field" placeholder="Username" type="text" />
        <input class="input-field" placeholder="Create a password" type="password" />
        <input class="input-field" placeholder="Confirm your password" type="password" />
        <a href="<?= base_url('/auth/login'); ?>"><button class="continue-button">Continue</button></a>
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
                <a href=""><i class="bx bxl-facebook-circle"></i></a>
            </li>
            <li>
                <a href=""><i class="bx bxl-tiktok"></i></a>
            </li>
            <li>
                <a href=""><i class="bx bxl-instagram-alt"></i></a>
            </li>
            <li>
                <a href=""><i class="bx bxl-youtube"></i></a>
            </li>
        </ul>
        <p><small>Copyright © 2024 Morev. All rights reserved.</small></p>
    </footer>
    <script src="script.js"></script>
</body>

</html>