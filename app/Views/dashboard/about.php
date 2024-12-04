<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About - Morev</title>
    <link rel="stylesheet" href="<?= base_url('/cssDashboard/about.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('style.css'); ?>">
    <link rel="icon" type="image/x-icon" href="<?= base_url('favicon.webp') ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
        nav button {
            background-color: #ffffff;
            color: #212121;
            height: 40px;
            width: 110px;
            padding: 2px 5px;
            border-radius: 20px;
            border: none;
            cursor: pointer;
            font-size: 18px;
            transition: background-color 0.3s ease;
        }

        nav button {
            text-decoration: none;
            color: #212121;
        }

        nav button:hover {
            background-color: #697565;
            color: white;
        }
    </style>
</head>

<body>
    <nav>
        <div class="logo">
            <a href="<?= base_url('/dashboard/index'); ?>">
                <img src="<?= base_url('/assets/logos/logo.svg'); ?>" alt="Hero">
                <h2>Morev</h2>
            </a>
        </div>
        <?php if (session()->get('isLoggedIn')) : ?>
            <ul>
                <li><a href="<?= base_url('/dashboard/film'); ?>">Film</a></li>
                <li><a href="<?= base_url('/dashboard/news'); ?>">News</a></li>
                <li><a href="<?= base_url('/dashboard/review'); ?>">My Review</a></li>
                <li><a href="<?= base_url('/dashboard/about'); ?>">About</a></li>
            </ul>
            <div class="dropdownnav" style="padding-right:100px">
                <b style="color:green"><?= ucfirst(session('username')) ?></b>
                <div class="dropdownnav-content">
                    <ul>
                        <li><a href="<?= base_url('/auth/logout'); ?>" style="color:black" onclick="return confirm('Apakah Anda Yakin Ingin Keluar ?')">Logout</a></li>
                    </ul>
                </div>
            </div>

        <?php else : ?>
            <ul>
                <li><a href="<?= base_url('/guest/film'); ?>">Film</a></li>
                <li><a href="<?= base_url('/guest/news'); ?>">News</a></li>
                <li><a href="<?= base_url('/guest/review'); ?>">Review</a></li>
                <li><a href="<?= base_url('/guest/about'); ?>">About</a></li>
            </ul>
            <a href="<?= base_url('/auth/login'); ?>"><button type="button">Sign In</button></a>
        <?php endif; ?>
    </nav>
    <main>
        <h1>About Morev</h1>
        <p>
            Morev is your go-to destination for everything movies. From detailed movie reviews to the latest news and
            updates on upcoming releases, Morev offers a space where movie enthusiasts can explore, share, and discuss
            all things cinema. Whether you're looking for in-depth analysis or just want to know what’s new in theaters,
            we've got you covered. <br><br>
            At Morev, users can write and share their own movie reviews, adding personal insights to create a rich,
            community-driven hub for film lovers. Our goal is to connect people through a shared love of storytelling,
            enabling everyone to contribute their unique take on the movies they watch.
            Whether you're an occasional viewer or a dedicated cinephile, Morev is here to be your companion in the
            cinematic world. Dive in, discover new films, and share your thoughts with a community that shares your
            passion for movies!
        </p>
    </main>
    <footer>
        <ul>
            <li><a href="https://www.tiktok.com/@morev6_?_t=8rpOLW0rMfp&_r=1"><i class='bx bxl-tiktok'></i></a></li>
            <li><a href="https://www.instagram.com/morev_6?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="><i class='bx bxl-instagram-alt'></i></a></li>
            <li><a href="https://youtube.com/@morev-f2r?si=Sdk1sgYjfLgk6mdC"><i class='bx bxl-youtube'></i></a></li>
        </ul>
        <p>
            <small>Copyright © 2024 Morev. All rights reserved.</small>
        </p>
    </footer>
</body>

</html>
