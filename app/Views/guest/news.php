<html>

<head>
    <title>Morev - News Page</title>
    <link rel="stylesheet" href="<?= base_url('/cssGuest/news.css?v=' . time()); ?>">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet" />
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
            <li><a href="<?= base_url('/guest/news'); ?>">Berita</a></li>
            <li><a href="<?= base_url('/guest/review'); ?>">Review</a></li>
            <li><a href="<?= base_url('/guest/about'); ?>">Tentang Kami</a></li>
        </ul>
        <a href="<?= base_url('/auth/login'); ?>"><button type="button">Sign In</button></a>
    </nav>
    <div class="content">
        <div class="gabungan">
            <div class="news">
                <h2>News</h2>

                <div class="news-item">
                    <img alt="Francis Ford Coppola and Todd Phillips" height="100"
                        src="https://www.hollywoodreporter.com/wp-content/uploads/2024/10/Francis-Ford-Coppola-Todd-Phillips-getty-H-2024.jpg?w=450&h=253&crop=1"
                        width="150" />
                    <div>
                        <h3>
                            <a href="https://www.hollywoodreporter.com/movies/movie-news/francis-ford-coppola-comforts-todd-phillips-joker-folie-a-deux-flails-1236025277/"
                                target="_blank">Francis Ford Coppola Praises Todd Phillips as ‘Joker: Folie à
                                Deux’ Flails: “He’s Always One Step Ahead of the Audience”</a>
                        </h3>
                        <p>By Pamela McClintock (6 Hours Ago)</p>
                    </div>
                </div>

                <div class="news-item">
                    <img alt="Michel Blanc" height="100"
                        src="https://www.hollywoodreporter.com/wp-content/uploads/2024/10/Michel-Blanc-obit-temp-getty-H-2024.jpg?w=450&h=253&crop=1"
                        width="150" />
                    <div>
                        <h3>
                            <a href="https://www.hollywoodreporter.com/movies/movie-news/michel-blanc-dead-french-actor-les-bronzes-monsieur-hire-1236025296/"
                                target="_blank">Michel Blanc, French Actor in ‘Les Bronzés’ and ‘Monsieur
                                Hire,’ Dies at 72</a>
                        </h3>
                        <br /><br />
                        <p>By Carly Thomas (5 Hours Ago)</p>
                    </div>
                </div>

                <div class="news-item">
                    <img alt="'The Burbs'" height="100"
                        src="https://www.hollywoodreporter.com/wp-content/uploads/2024/10/MSDBURB_EC017.jpg?w=450&h=253&crop=1"
                        width="150" />
                    <div>
                        <h3>
                            <a href="https://www.hollywoodreporter.com/movies/movie-news/the-burbs-director-joe-dante-keke-palmer-remake-1236023731/"
                                target="_blank">‘The Burbs’ Director Reacts to Movie’s Keke Palmer-Led Series
                                Remake: “It’s Kind of a One-Off Story”</a>
                        </h3>
                        <br />
                        <p>By Pamela McClintock (6 Hours Ago)</p>
                    </div>
                </div>

                <div class="news-item">
                    <img alt="Pedro Almodóvar" height="100"
                        src="https://www.hollywoodreporter.com/wp-content/uploads/2024/10/GettyImages-21698686972.jpg?w=450&h=253&crop=1"
                        width="150" />
                    <div>
                        <h3>
                            <a href="https://www.hollywoodreporter.com/movies/movie-news/pedro-almodovar-chaplin-award-2025-film-at-lincoln-center-1236024887/"
                                target="_blank">Pedro Almodóvar to Receive Film at Lincoln Center’s 2025
                                Chaplin Award</a>
                        </h3>
                        <br /><br />
                        <p>By Hilary Lewis (1 Day Ago)</p>
                    </div>
                </div>
            </div>

            <!-- Upcoming Films Section -->
            <div class="upcoming-films">
                <h2>Upcoming Films</h2>
                <div class="film-item">
                    <img src="https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcSLDmtAjHAPDlVXKTicLBVoa0EGwnqR6CkxzvzYUs8XXIXEx3Xy"
                        alt="Venom Poster" />
                    <div>
                        <h3>
                            <a href="https://www.youtube.com/watch?v=__2bjWbetsA" target="_blank">Venom: The Last
                                Dance</a>
                        </h3>
                        <p class="p">
                            Eddie Brock and Venom must make a devastating decision as
                            they're pursued by a mysterious military man.
                        </p>
                        <p class="watch">Where to watch?</p>
                        <p class="p">Available on October 2024 on Netflix, Disney+</p>
                    </div>
                </div>

                <div class="film-item">
                    <img alt="Moana 2" height="150"
                        src="https://media.themoviedb.org/t/p/w500/yh64qw9mgXBvlaWDi7Q9tpUBAvH.jpg" width="100" />
                    <div>
                        <h3>
                            <a href="https://www.youtube.com/watch?v=hDZ7y8RP5HE" target="_blank">Moana 2</a>
                        </h3>
                        <p class="p">
                            Moana journeys to the far seas of Oceania after receiving an
                            unexpected call from her wayfinding ancestors.
                        </p>
                        <p class="watch">Where To Watch?</p>
                        <p class="p">Available on Disney+ at November 28, 2024</p>
                    </div>
                </div>

                <div class="film-item">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSkbh7aQXD4y8HoajnrE1O2XYZk3ybxTqk61UDg1_AMtQzNUEb7"
                        alt="Mufasa Poster" />
                    <div>
                        <h3>
                            <a href="https://www.youtube.com/watch?v=MjQG-a7d41Q" target="_blank">Mufasa: The Lion
                                King</a>
                        </h3>
                        <p class="p">
                            Simba, having become king of the Pride Lands, is determined for
                            his cub to follow in his paw prints while the origins of his
                            late father Mufasa are explored.
                        </p>
                        <p class="watch">Where To Watch?</p>
                        <p class="p">Available on Disney+ at December 30, 2024</p>
                    </div>
                </div>

                <div class="film-item">
                    <img alt="Sonic 3" height="150"
                        src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/f452aa2c-0c64-4bbf-b065-942b8dbda8bb/df3h6xn-2b46f4c6-89de-464a-ad1b-279c0854ee26.jpg/v1/fill/w_1280,h_1965,q_75,strp/sonic_the_hedgehog_3_by_diamonddead_art_df3h6xn-fullview.jpg?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7ImhlaWdodCI6Ijw9MTk2NSIsInBhdGgiOiJcL2ZcL2Y0NTJhYTJjLTBjNjQtNGJiZi1iMDY1LTk0MmI4ZGJkYThiYlwvZGYzaDZ4bi0yYjQ2ZjRjNi04OWRlLTQ2NGEtYWQxYi0yNzljMDg1NGVlMjYuanBnIiwid2lkdGgiOiI8PTEyODAifV1dLCJhdWQiOlsidXJuOnNlcnZpY2U6aW1hZ2Uub3BlcmF0aW9ucyJdfQ.sMHbVqpwggbQYOOioGc9MPTzcm0keNeFBa-rmu_ECxE"
                        width="100" />
                    <div>
                        <h3>
                            <a href="https://www.youtube.com/watch?v=qSu6i2iFMO0" target="_blank">Sonic 3</a>
                        </h3>
                        <p class="p">
                            Sonic, Knuckles and Tails reunite to battle Shadow, a mysterious
                            new enemy with powers unlike anything they've faced before. With
                            their abilities outmatched in every way, they seek out an
                            unlikely alliance to stop Shadow and protect the planet.
                        </p>
                        <p class="watch">Where To Watch?</p>
                        <p class="availability">
                            Available in theaters at December 20, 2024
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FOoter -->
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