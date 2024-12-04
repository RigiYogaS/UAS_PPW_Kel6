<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="">
    <title>Add Review Page</title>
    <link rel="stylesheet" href="<?= base_url('/cssGuest/addreview.css?v=' . time()); ?>">
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
            <a href="<?= base_url('/'); ?>">
                <img src="<?= base_url('/assets/logos/logo.svg'); ?>" alt="Hero">
                <h2>Morev</h2>
            </a>
        </div>
        <ul>
            <li><a href="<?= base_url('/guest/film'); ?>">Films</a></li>
            <li><a href="<?= base_url('/guest/news'); ?>">News</a></li>
            <li><a href="<?= base_url('/guest/review'); ?>">Review</a></li>
            <li><a href="<?= base_url('/guest/about'); ?>">About</a></li>
        </ul>
        <a href="<?= base_url('/auth/login'); ?>"><button type="button">Sign In</button></a>
    </nav>
    <!-- Movie Bg -->
    <div class="movie-bg">
        <img src="<?= base_url('/assets/hero/heroAddreview.jpeg'); ?>" alt="hero">
        <div class="grad"></div>
    </div>

    <!-- Movie Info -->
    <div class="movie-info">
        <img src="<?= base_url('/assets/posters/agak laen.jpg'); ?>" alt="poster">
        <div class="rating">
            <ul>
                <li>
                    <i class='bx bxs-star'></i>
                </li>
                <li>4.9/5</li>
            </ul>
            <ul>
                <li>
                    <i class='bx bxs-heart'></i>
                </li>
                <li>700K</li>
            </ul>
        </div>
        <h1>Agak Laen</h1>
        <p>
            Di pasar malam, rumah hantu yang awalnya tidak menyeramkan menjadi viral setelah seorang pengunjung penting
            meninggal karena terkejut, dan mayatnya dikubur diam-diam oleh petugas. Kejadian ini memicu perhatian
            polisi, sementara petugas dihantui rasa bersalah dan berusaha mengungkap kebenaran di balik insiden
            tersebut?
        </p>
    </div>

    <!-- rate container -->
    <div class="rev-container">
        <ul class="rev-icon">
            <li><img
                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADYAAAA2CAYAAACMRWrdAAAAAXNSR0IArs4c6QAAA6tJREFUaEPtmu1t2zAQhl+qXaEu+s8awc4AiSeJPUniSexMUmeAxCNI/4q6KzRWS9lCZOmOvOMH2gQxECBOSJHPffHuKIN3+jHvlAsfYG9Ns9k09qPaT60wPgPTpv05Tg2K2v7NAPVvoP5WztrvOT5JwSxMgePSwFwDuBFs2ILVDZrHI4ptStAkYL+q/U2DZgOg1VLEpwbMelLOthHPaKdGgVkNfToBSbSj2WttYFZfytlOM6k/NhjsUD1tALMMXVg2r9lOyquVbOzlKDWYUEvWbx7sUgWKXRcohgEFOF4LhFO/wCy0/qcCO/vSd4cEdwZmrTEhC3uKnMdbB6Ta98RgHqhon7DC8liDag0R2HnBitJUg2b9tby6D/EDbs7P6unewNwR/xebpQjsUD1b8xtFPgOz0JidBt5hIfWknJe+Z3nB/gVUt2neUvzR0gnGSS2npoaaCN2DE4zWllmlyAx8ptT/P+NzTpNkwQ7VfolTVtH/7CblfKHZVKqxlJBdluMAe7ZR8CL3y2mC1p9chzBjkqzWXGDNpbT9DhuqnVfrcJu5RmskGGWGubQ1XouHo7TGnaMM2PjcmpRz79Gg1Rjjx7boIAMUE/5Jv+fAspshDwVntCPMkRw/AqOlkjbEh0JZi6DM8QWmHAaeERg1MaV/xUBxYNT+RmDUwpRE+v5k50gO7VioXgUwSMjHFiUCcwWOzuZ9WX4KKA6MWnsERqUvHNjQkTm4VFCdlRyq50FwE2hM6pxcz2MIlxpKGtyCg8d5AVunjVpuHVxqqKjgIZVIz95JuL+FqW2dUW05UaHIHfbS4CY8x8Bm9S7NUaW9pPp1ZTCUC1AxQJpSOaUshIvSVC9wDKoOOjlPlgR74BJBUTUinRWRYJpks282DFwSKLsOVbZwyYOrHht1piSp1QAuGRRTaLK+z4JpH0RobpOyjaApMu1e1M0cX+qkrckk45lmjrP/EtJ+U7WaJRt3jcnSfjs5LHldJG41x4Bla5j2sgvqcq+9Kkrdt+8Ekb3F7UmdssA5ckxIIrM3eBCRjrxxsRfksVerHutotyKFUoEJkl4AzdageNDewJx86XjnuvjTCk7dUpPmhUCzA4rH/jsd9Lsf5D1Y31iCApUarNPc+X0O6nIuJhAO5wbfFQSBdasLL9pDQKN9NgrstZRos+7bBO97qC/ROaklAbvUoK2aVZBZjoykYMPjwX7vXhKzv3cvir25l8RCnCnXnGway7Vh6XM/wKSS+l/G/QHn08VVQOHfewAAAABJRU5ErkJggg==" />
            </li>
            <li><img
                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADYAAAA2CAYAAACMRWrdAAAAAXNSR0IArs4c6QAAAudJREFUaEPtmlF22jAQRZ/oGkpP/+IlkCwgYSVNVpKwktCV1F1AwhLsfvWUbqGgHoGdY/CMNJI1JqX4M9jPc2eeRhqIwZle5ky5cAH71yp7qdh/WbGf1eqqBf9czOrUJLQ6QzTadydZcV2t7oHtLWDuALxBdYBKA7P4A9S+IAM6LkG1RIdKZBTYPhD7yMBQ+jVgFhug7ALm0vE5QwTmLPIB9hmAq1DKVW5gHtyDOXQkVg2C/a5Wdxb2WwrN0TPOWpRtY6XrDcw8BOcFaypVed5cA7YEJt8ttlcG5rYJPgHALi3ww71LoBOE84Ktq1dXKcp+O2txWYuw7q7JfCxmJZW8xi1uCVCJ8sKxYL+qlycD4xrFwWVhF5+KmyeJfxqNL1RgOXR8GiQYZ8GYYFpwKusGZs5ViUsYl+gNTEE5hwRjRMppcT2XVOr4ngbuEbC1weRrLFSrRy0NLtkk2Lp6dQ2j6+t6WlwXKVA5n2mc5NZ9NzYy4T0w2oZ2OS1udvvQqa919fIMmPtuHJQde2DUvpWytrQS0JxaXKd8u6g12wOTPqgVeEiXPjCYh2kxWx7CHilRYFznCQWh8Tm9VBLBgP6DGkFLNKWOEq0x4P00D2orEq0xlzWi3SfvYZIqxNwj3YqYfazfUt+DHZlJQ7aP7Su2GygPWqr7+ymbCD9p0OufPQQTJYfbz7aYLEOzUIy1pPcykwZ7ImLBuJHhFHDc+OQ7THvnMd/oMlblOKjQaSj41cAp4XyDbmjSCILtmwnVJaG65oZAuZhFYGPDDYWKAhsLLgdUNJg2XC6oJDAtuJxQyWC54XJDDQLLBacBNRhsKJwWVBawVDhNqGxgsXDaUFnBpHBjQGUHC8E1v6KQP3KEzn7S8aa9T3ykihHmzpaMhsrXDipgvsodwalAqVixG3igcmpQ6mCeyqlCjQJGwKlDjQbmXuS+Qwn930dMgwrdq9Y8Qi/W/vwCpp3h3PqXiuXOqLbe2VbsL/glJVVlF/CPAAAAAElFTkSuQmCC" />
            </li>
            <li><img
                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADYAAAA2CAYAAACMRWrdAAAAAXNSR0IArs4c6QAAAfJJREFUaEPtml9SwjAQh39Br2Ad38gRgAvgTcpJhJOAJ5ELAEdI3hzrGWycVcBaS7PJ9J/M8ki323zZfCl0q3ClH3WlXBCw/1bZoIq9msP4FhjnyOddgSqMrALsnZ5sQ67JBns3h7mDewlJ3nCsdXDP93q25ORlgVGlbuAMJ2HLMVZBLTjVY4FlZrcGVNryoLnpt4mePvqCmWB7qtbYl6yj4zbRU+27FhfMFRM5uBV3rfsG4Dv+ZnZLBfVUjEv01DtubwAlzMxewHwVCD0uFSvNmCxF2TxCJfLEi2PiWGEG5D7WsF+UThwTx8SxFsQqpBTHxDFxTByLmgHZPGTzkM0jSh32SeJYH459P/vPvx56fmC0etATyy3ZICtGQCPkaelJblDXZHBgVQMqVYkFOBiwY8uJ+mjcJkZta6h3sB+PYttNblPlX29gFzz6szdQh4a+LHdOfMuzFzCGRwDcJtGzxQmAORFn/zoFo8ECihrsdR7VunN0cQ2grlFvAbctd1Nb64957kGs3e6UIzOHFHB0j+NuNugcLLbTyVye5/nsEOy3R9xfFeU4LmAXYOzXE0Jgff61CRbkUQhUMfaSf62AxXoUC1e1PBsGa8ajJgAbA6P3qDiv+cQOOuQ8qiDnbw+ruR5y4aHECthQKsEdx9VW7BMlmzFV6Z9bZwAAAABJRU5ErkJggg==" />
            </li>
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
            <li><a href="">Details</a></li>
            <li><a href="">Genre</a></li>
            <li><a href="">Release</a></li>
        </ul>
        <hr class="rev-nav-border">
    </div>

    <!-- People's reviews -->
    <div class="review-container" id="reviewContainer">
        <div class="review">
            <img src="<?= base_url('/assets/profiles/piyyuu.jpeg'); ?>" alt=" Profile Picture">
            <div class="review-text">
                <h4>Piyyuu</h4>
                <p>This movie teaches us about how we as human has something that’s called humanity.</p>
            </div>
        </div>

        <div class="review">
            <img src="<?= base_url('/assets/profiles/farhaa.jpeg'); ?>" alt="Profile Picture">
            <div class="review-text">
                <h4>Farhaa</h4>
                <p>Such a great film to watch.</p>
            </div>
        </div>

        <div class="review">
            <img src="<?= base_url('/assets/profiles/goy.jpg'); ?>" alt="Profile Picture">
            <div class="review-text">
                <h4>Goy</h4>
                <p>From the cast to the plot, and everything about this movie is just amazing.</p>
            </div>
        </div>

        <div class="review">
            <img src="<?= base_url('/assets/profiles/zaf.jpg'); ?>" alt="Profile Picture">
            <div class="review-text">
                <h4>Zaf04</h4>
                <p>Shawshank Redemption has a lot of lessons for us to stay human even if there’s bad thing happened to
                    us.</p>
            </div>
        </div>
    </div>

    <div class="review-section">
        <textarea class="review-input" id="reviewInput" placeholder="Add Review..."></textarea>
        <button onclick="showAlertAndRedirect()" class="add-review-btn" id="submitReview" style="margin-top: 20px;">Add
            Review</button>
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
    <script src="addreview.js"></script>
</body>

</html>
