<?php
$this->db = db_connect();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Review Page</title>
    <link rel="stylesheet" href="<?= base_url('cssDashboard/addreview.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('style.css'); ?>">
    <link rel="icon" type="image/x-icon" href="<?= base_url('favicon.webp') ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <?php
    function tanggal($tgl)
    {
        $tanggal = substr($tgl, 8, 2);
        $bulan = bulan(substr($tgl, 5, 2));
        $tahun = substr($tgl, 0, 4);
        return $tanggal . ' ' . $bulan . ' ' . $tahun;
    }
    function bulan($bln)
    {
        switch ($bln) {
            case 1:
                return "Januari";
                break;
            case 2:
                return "Februari";
                break;
            case 3:
                return "Maret";
                break;
            case 4:
                return "April";
                break;
            case 5:
                return "Mei";
                break;
            case 6:
                return "Juni";
                break;
            case 7:
                return "Juli";
                break;
            case 8:
                return "Agustus";
                break;
            case 9:
                return "September";
                break;
            case 10:
                return "Oktober";
                break;
            case 11:
                return "November";
                break;
            case 12:
                return "Desember";
                break;
        }
    }
    ?>
    <style>
        .star {
            display: flex;
        }

        .star i {
            color: #ffc107;
            display: flex;
            flex-direction: column;
            justify-content: center;
            margin: 5px;
        }

        .star .rating {
            margin-left: 10px;
            font-size: 18px;
            padding-bottom: 6px;
            margin-top: 0.5rem;
            font-size: 1rem;
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
    <!-- Movie Bg -->
    <div class="container">
        <div class="container-fluid">
            <div class="row" style="padding-left: 50px;padding-right:50p;padding-top:125px">
                <div class="col-md-2">
                    <img src="<?= base_url('/assets/posters/' . $film->foto); ?>" width="100%" alt="poster">
                </div>
                <div class="col-md-8">
                    <br>
                    <i class="fa fa-heart" style="color:red;margin:top:15px"></i> <?= $film->suka ?>
                    <h1><?= $film->judul ?></h1>
                    <p>
                        <?= $film->deskripsi ?>
                    </p>
                </div>
                <div class="col-md-2">
                    <i class="fa fa-heart fa-2x" style="color:red;margin-right:5px"></i>
                    <i class="fa fa-book fa-2x" style="color:green;margin-right:5px"></i>
                    <i class="fa fa-eye fa-2x" style="color:orange;margin-right:5px"></i>

                </div>
            </div>
            <div class="row" style="padding-left: 50px;padding-right:50p;padding-top:50px">
                <div class="col-md-6">
                    <?php
                    $top = 190;
                    foreach ($review as $ulasan) :
                        $kritik = "";
                        for ($i = 1; $i <= 5; $i++) {
                            if ($ulasan['rating'] >= $i) {
                                $kritik .= '<span class="fa fa-star checked" style="color:#ffc700"></span>';
                            } else {
                                $kritik .= '<span class="fa fa-star"></span>';
                            }
                        }
                    ?>
                        <div class="row" style="margin-bottom: 15px;">
                            <div class="col-md-12">
                                <ul class="comment-list">
                                    <div class="card mb-3 p-3 shadow-sm">
                                        <div class="row" style="padding-top:10px;padding-bottom:10px">
                                            <div class="col-md-2 mx-auto my-auto">
                                                <center>
                                                    <?php
                                                    if ($ulasan['fotoprofil'] != "") { ?>
                                                        <img src="<?= base_url('assets/' . $ulasan['fotoprofil']) ?>" width="100%" style="border-radius: 10px;padding-left:20px">
                                                    <?php } else { ?>
                                                        <img src="<?= base_url('assets/user.png') ?>" width="100%" style="border-radius: 10px;padding-left:20px">
                                                    <?php } ?>
                                                </center>
                                            </div>
                                            <div class="col-md-10 mx-auto my-auto">
                                                <li class="comment-list-item">
                                                    <div class="comment-list-item-image">
                                                        <span style="margin-top:15px"><?= $kritik ?></span>
                                                        <p class="text-success" style="color:black"><?= tanggal(date('Y-m-d', strtotime($ulasan['waktu']))) ?> - <?= date('H:i', strtotime($ulasan['waktu'])) ?></p>
                                                        <h5 class="text-success mb-3" style="color:black"><?= ucfirst($ulasan['username']) ?></h5>
                                                        <p class="mt-3" style="color:black"><?= $ulasan['ulasan'] ?></p>
                                                    </div>
                                                </li>
                                            </div>
                                        </div>
                                    </div>
                                </ul>
                            </div>
                        </div>
                    <?php
                    endforeach; ?>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <form method="post" action="/dashboard/simpanreview">
                                <div class="form-group">
                                    <input type="hidden" name="idfilm" value="<?= $film->idfilm ?>">
                                    <input type="hidden" name="idpengguna" value="<?= session('idpengguna') ?>">
                                    <label for="kritik" style="color:black !important">Rating</label> <br>
                                    <div class="bintang" id="bintang1">
                                        <input type="radio" id="star5" name="bintang" value="5" required />
                                        <label for="star5" title="text">5 Bintang</label>
                                        <input type="radio" id="star4" name="bintang" value="4" required />
                                        <label for="star4" title="text">4 Bintang</label>
                                        <input type="radio" id="star3" name="bintang" value="3" required />
                                        <label for="star3" title="text">3 Bintang</label>
                                        <input type="radio" id="star2" name="bintang" value="2" required />
                                        <label for="star2" title="text">2 Bintang</label>
                                        <input type="radio" id="star1" name="bintang" value="1" required />
                                        <label for="star1" title="text">1 Bintang</label>
                                    </div>
                                </div>
                                <div class="form-group" style="color:black !important">
                                    <textarea class="form-control" name="ulasan" rows="5" placeholder="Write your Review here" required></textarea>
                                </div>
                                <div class="form-group">
                                    <button type="submit" name="simpan" value="simpan" class="btn btn-success">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

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
            <script src="addreviewafterloggedin.js"></script>
</body>

</html>
