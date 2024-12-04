<?php
$this->db = db_connect();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Morev - Film Page</title>
    <link rel="stylesheet" a href="<?= base_url('/cssDashboard/film.css?v=' . time()); ?>">
    <link rel="stylesheet" href="<?= base_url('style.css'); ?>">
    <link rel="icon" type="image/x-icon" href="<?= base_url('favicon.webp') ?>">
    <link rel=" preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://boxicons.com/?query=hea">
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
        <section class="top-rated">
            <div class="container" style="padding-left:200px;padding-right:200px">
                <div class="form-group">
                    <form method="post" action="/carifilm">
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="keyword" value="<?= $keyword ?>" style="border-radius: 100px;">
                            </div>
                            <div class="col-md-4">
                                <select class="form-control" name="genre" style="border-radius: 100px;">
                                    <option value="">All Genre</option>
                                    <option <?php if ($keyword == 'Comedy') echo 'selected'; ?> value="Komedi">Comedy</option>
                                    <option <?php if ($keyword == 'Drama') echo 'selected'; ?> value="Drama">Drama</option>
                                    <option <?php if ($keyword == 'Romantis') echo 'selected'; ?> value="Romantis">Romance</option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <button class="btn btn-primary">Search</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <br>
            <h2>Top Rated Films</h2>
            <div class="film-list">
                <?php $i = 1; ?>
                <?php foreach ($film as $p) : ?>
                    <div class="film">
                        <!-- onclick="filmClick('The Shawshank Redemption')" -->
                        <a href="<?= base_url('/dashboard/addreview/' . $p['idfilm']) ?>">
                            <img src="<?= base_url('/assets/posters/' . $p['foto']); ?>" alt="Agak Laen">
                        </a>
                        <?php
                        $idfilm = $p['idfilm'];
                        $query = $this->db->query("
    SELECT AVG(rating) AS average 
    FROM review 
    JOIN film ON review.idfilm = film.idfilm 
    JOIN pengguna ON review.idpengguna = pengguna.idpengguna 
    WHERE review.idfilm = ?", [$idfilm]);

                        $result = $query->getRowArray();
                        $average = $result['average'] ?? 0;
                        $maxStars = 5;
                        $fullStars = floor($average);
                        $emptyStars = $maxStars - $fullStars;
                        ?>
                        <br>
                        <br>
                        <div class="star">
                            <?php for ($i = 0; $i < $fullStars; $i++): ?>
                                <i class='bx bxs-star'></i> <!-- Full star -->
                            <?php endfor; ?>

                            <?php for ($i = 0; $i < $emptyStars; $i++): ?>
                                <i class='bx bx-star'></i> <!-- Empty star -->
                            <?php endfor; ?>
                        </div>
                        <p class="film-title"><?= $p['judul'] ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>
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
