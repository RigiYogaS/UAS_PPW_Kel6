<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About - Morev</title>
    <link rel="stylesheet" href="<?= base_url('/cssDashboard/about.css'); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <nav>
        <div class="logo">
            <a href="<?= base_url('/dashboard/index'); ?>">
                <img src="<?= base_url('/assets/logos/logo.svg'); ?>" alt="Hero">
                <h2>Morev</h2>
            </a>
        </div>
        <ul>
            <li><a href="<?= base_url('/dashboard/film'); ?>">Film</a></li>
            <li><a href="<?= base_url('/dashboard/news'); ?>">Berita</a></li>
            <li><a href="<?= base_url('/dashboard/review'); ?>">Review</a></li>
            <li><a href="<?= base_url('/dashboard/about'); ?>">Tentang Kami</a></li>
        </ul>
        <div class="profile">
            <p id="name">User</p>
            <i class='bx bx-chevron-down'></i>
        </div>
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
            <li><a href=""><i class='bx bxl-facebook-circle'></i></a></li>
            <li><a href=""><i class='bx bxl-tiktok'></i></a></li>
            <li><a href=""><i class='bx bxl-instagram-alt'></i></a></li>
            <li><a href=""><i class='bx bxl-youtube'></i></a></li>
        </ul>
        <p>
            <small>Copyright © 2024 Morev. All rights reserved.</small>
        </p>
    </footer>
</body>

</html>