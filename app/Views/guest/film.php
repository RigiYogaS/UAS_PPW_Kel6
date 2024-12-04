<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Morev - Film Page</title>
    <link rel="stylesheet" href="<?= base_url('/cssGuest/film.css?v=' . time()); ?>">
    <link rel=" preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://boxicons.com/?query=hea">

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
                <li><a href="<?= base_url('/dashboard/news'); ?>">Berita</a></li>
                <li><a href="<?= base_url('/dashboard/review'); ?>">Review</a></li>
                <li><a href="<?= base_url('/dashboard/about'); ?>">Tentang Kami</a></li>
            </ul>
            <div class="profile">
                <ul>
                    <li><a href="<?= base_url('/auth/logout'); ?>" onclick="return confirm('Apakah Anda Yakin Ingin Keluar ?')">Logout</a></li>
                </ul>
            </div>
        <?php else : ?>
            <ul>
                <li><a href="<?= base_url('/guest/film'); ?>">Film</a></li>
                <li><a href="<?= base_url('/guest/news'); ?>">Berita</a></li>
                <li><a href="<?= base_url('/guest/review'); ?>">Review</a></li>
                <li><a href="<?= base_url('/guest/about'); ?>">Tentang Kami</a></li>
            </ul>
            <a href="<?= base_url('/auth/login'); ?>"><button type="button">Sign In</button></a>
        <?php endif; ?>
    </nav>
    <main>
        <section class="top-rated">
            <h2>Film Terbaik</h2>
            <div class="film-list">
                <div class="film">
                    <!-- onclick="filmClick('The Shawshank Redemption')" -->
                    <a href="<?= base_url('/guest/addreview') ?>">
                        <img src="<?= base_url('/assets/posters/agak laen.jpg'); ?>" alt="Agak Laen"></a>
                    <p class="Rating"><i class='bx bxs-star' undefined></i> 4,9/5 |
                        <i class='bx bxs-heart'></i> 700K
                    </p>
                    <p class="film-title">Agak Laen</p>
                </div>
                <div class="film">
                    <!--onclick="filmClick('500 Days Of Summer')" -->
                    <img src="<?= base_url('/assets/posters/dua hati biru.jpg'); ?>" alt="Dua Hati Biru">
                    <p class="Rating"><i class='bx bxs-star' undefined></i> 4,9/5 |
                        <i class='bx bxs-heart'></i> 670K
                    </p>
                    <p class="film-title">Dua Hati Biru</p>
                </div>
                <div class="film">
                    <!-- onclick="filmClick('Hereditary')" -->
                    <img src="<?= base_url('/assets/posters/ipar adalah maut.jpg'); ?>" alt="Ipar Adalah Maut">
                    <p class="Rating"><i class='bx bxs-star' undefined></i> 4,9/5 |
                        <i class='bx bxs-heart'></i> 660K
                    </p>
                    <p class="film-title">Ipar Adalah Maut</p>
                </div>
                <div class="film">
                    <!-- onclick="filmClick('Evil Dead Rise')" -->
                    <img src="<?= base_url('/assets/posters/kang mak.jpg'); ?>" alt="kang Mak">
                    <p class="Rating"><i class='bx bxs-star' undefined></i> 4,9/5 |
                        <i class='bx bxs-heart'></i> 550K
                    </p>
                    <p class="film-title">Kang Mak From Pee Mak</p>
                </div>
                <div class="film">
                    <!-- onclick="filmClick('The Human Centipede')" -->
                    <img src="<?= base_url('/assets/posters/siksa kubur.jpg'); ?>" alt="Siksa Kubur">
                    <p class="Rating"><i class='bx bxs-star' undefined></i> 4,9/5 |
                        <i class='bx bxs-heart'></i> 500K
                    </p>
                    <p class="film-title">Siksa Kubur</p>
                </div>
                <div class="film">
                    <img src="<?= base_url('/assets/posters/ancika.jpg'); ?>" alt="Ancika">
                    <p class="Rating"><i class='bx bxs-star' undefined></i> 4,9/5 |
                        <i class='bx bxs-heart'></i> 500K
                    </p>
                    <p class="film-title">Ancika: Dia yang Bersamaku 1995</p>
                </div>
                <div class="film">
                    <img src="<?= base_url('/assets/posters/borderless fog.jpg'); ?>" alt="Borderless Fog">
                    <p class="Rating"><i class='bx bxs-star' undefined></i> 4,9/5 |
                        <i class='bx bxs-heart'></i> 500K
                    </p>
                    <p class="film-title">Kabut Berduri</p>
                </div>
                <div class="film">
                    <img src="<?= base_url('/assets/posters/dancing villages.jpg'); ?>" alt="Dancing Villages">
                    <p class="Rating"><i class='bx bxs-star' undefined></i> 4,9/5 |
                        <i class='bx bxs-heart'></i> 500K
                    </p>
                    <p class="film-title">Badarawuhi di Desa Penari</p>
                </div>
                <div class="film">
                    <img src="<?= base_url('/assets/posters/the architecture of love.jpg'); ?>"
                        alt="The Architecture of Love">
                    <p class="Rating"><i class='bx bxs-star' undefined></i> 4,9/5 |
                        <i class='bx bxs-heart'></i> 500K
                    </p>
                    <p class="film-title">The Architecture of Love</p>
                </div>
                <div class="film">
                    <img src="<?= base_url('/assets/posters/vina.jpg'); ?>" alt="Vina">
                    <p class="Rating"><i class='bx bxs-star' undefined></i> 4,9/5 |
                        <i class='bx bxs-heart'></i> 500K
                    </p>
                    <p class="film-title">Vina: Sebelum 7 Hari</p>
                </div>
            </div>
        </section>

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

        <script src="addreview.js"></script>

</body>

</html>