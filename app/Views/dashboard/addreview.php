<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Review Page</title>
    <link rel="stylesheet" href="<?= base_url('cssDashboard/addreview.css'); ?>">
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
    <!-- Movie Bg -->
    <div class="movie-bg">
        <img src="/assets/hero/heroAddreview.jpg" alt="hero">
        <div class="grad"></div>
    </div>

    <!-- Movie Info -->
    <div class="movie-info">
        <img src="/assets/posters/ShawshankRedemption.jpg" alt="poster">
        <div class="rating">
            <ul>
                <li>
                    <box-icon name='star' type='solid' color='#eadfce'></box-icon>
                </li>
                <li>4.9/5</li>
            </ul>
            <ul>
                <li>
                    <box-icon name='heart' type='solid' color='#eadfce'></box-icon>
                </li>
                <li>700K</li>
            </ul>
        </div>
        <h1>Shawshank Redemption</h1>
        <p>
            A banker convicted of uxoricide forms a friendship over a quarter century with a hardened convict,
            while maintaining his innocence and trying to remain hopeful through simple compassion.
        </p>
    </div>

    <!-- rate container -->
    <div class="rev-container">
        <ul class="rev-icon">
            <li><img src="" /></li>
            <li><img src="" /></li>
            <li><img src="" /></li>
        </ul>
        <ul class="ictext">
            <li>Watch</li>
            <li class="like">Like</li>
            <li class="book">Book</li>
        </ul>
        <hr>
        <p>Rate</p>
        <ul class="rate">
            <li><i class='bx bx-star' style='color:#ffef00'></i></li>
            <li><i class='bx bx-star' style='color:#ffef00'></i></li>
            <li><i class='bx bx-star' style='color:#ffef00'></i></li>
            <li><i class='bx bx-star' style='color:#ffef00'></i></li>
            <li><i class='bx bx-star' style='color:#ffef00'></i></li>
        </ul>
    </div>

    <!-- Review nav -->
    <div class="rev-nav">
        <ul>
            <li><a href="">Popular Reviews</a></li>
            <li><a href="">Cast</a></li>
            <li><a href="">Genre</a></li>
            <li><a href="">Release</a></li>
        </ul>
        <hr class="rev-nav-border">
    </div>

    <!-- People's reviews -->
    <div class="review-container" id="reviewContainer">
        <div class="review">
            <img src="" alt="Profile Picture">
            <div class="review-text">
                <h4>Piyyuu</h4>
                <p>This movie teaches us about how we as human has something that’s called humanity.</p>
            </div>
        </div>

        <div class="review">
            <img src="" alt="Profile Picture">
            <div class="review-text">
                <h4>Farhaa</h4>
                <p>Such a great film to watch.</p>
            </div>
        </div>

        <div class="review">
            <img src="" alt="Profile Picture">
            <div class="review-text">
                <h4>Goy</h4>
                <p>From the cast to the plot, and everything about this movie is just amazing.</p>
            </div>
        </div>

        <div class="review">
            <img src="" alt="Profile Picture">
            <div class="review-text">
                <h4>Zaf04</h4>
                <p>Shawshank Redemption has a lot of lessons for us to stay human even if there’s bad thing happened to
                    us.</p>
            </div>
        </div>
    </div>

    <div class="review-section">
        <textarea class="review-input" id="reviewInput" placeholder="Add Review..."></textarea>
        <button class="add-review-btn" id="submitReview" style="margin-top: 20px;">Add Review</button>
    </div>

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
    <script src="addreviewafterloggedin.js"></script>
</body>

</html>