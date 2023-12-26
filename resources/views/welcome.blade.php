<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>IF-CHAT</title>

        <!-- Fonts -->
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
        <link rel="stylesheet" href="{{ asset('css/edit.css')}}">
    </head>
    <body>
        <header class="header">
            <a href="" class="logo">Welcome to IF-CHAT</a>

            <i class='bx bx-menu' id="menu-icon"></i>

            <nav class="navbar">
                <a href="#Home" class="active">HOME</a>
                <a href="#About">ABOUT IF-CHAT</a>
                <a href="#myExperience">FUNCTION</a>
            </nav>
        </header>

        <section class="Home" id="Home">
            <div class="Home-content">
                <h3>IF-CHAT,</h3>
                <h1>Chat nya para mahasiswa Informatika!!</h1>
                <h3>Yuk pakai <span>IF-CHAT!</span></h3>
                <div class="Social-media">
                    <a href="#"><i class='bx bxl-google'></i></a>
                    <a href="#"><i class='bx bxl-facebook-circle'></i></a>
                    <a href="#"><i class='bx bxl-instagram'></i>></a>
                
                </div>
                <a href="#" class="btn">LOGIN</a>
            </div>
            <div class="Home-img">
                <img src="logo_white (1).svg" alt="">
            </div>
        </section>

        <section class="About" id="About">
            <div class="About img">
                <img src="logo192.png" alt="">
            </div>
            <div class="About-content">
                <h2 class="heading">About <span>IF-CHAT</span></h2>
                <h3>Apa itu IF-CHAT?</h3>
                <p>IF-CHAT adalah media komunikasi yang dibuat khusus oleh Mahasiswa Informatika Univeristas Sultan Ageng Tirtayasa. IF-CHAT dibuat dengan tujuan agar komunikasi seluruh mahasiswa informatika UNTIRTA terjalin lebih akrab. Banyak kegiatan yang dapat terjadi dalam IF-CHAT ini, sebagai contoh sebagai media diskusi tugas, media perkenanalan antar sesama mahasiswa Informatika UNTIRTA, juga sebagai media berbagi informasi terkait Informatika. </br>
                </p>
            </div>
        </section>

        <section class="myExperience" id="myExperience">
            <h2 class="heading">Function <span>IF-CHAT</span></h2>
            <div class="myExperience-container">
                <div class="myExperience-box">
                    <i class='bx bx-code-alt'></i>
                    <h3>Exchange of Narratives</h3>
                </div>

                <div class="myExperience-box">
                    <i class='bx bxs-paint'></i>
                    <h3>Collaborative   Learning</h3>
                </div>

                <div class="myExperience-box">
                    <i class='bx bx-bar-chart-alt'></i>
                    <h3>Exploration of Novel Experiences</h3>
                    </div>
            </div>
        </section>

           <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="footer-col">
                        <h4>If Chat</h4>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Function</a></li>
                        </ul>
                    </div>
                    <div class="footer-col">
                        <h4>Get help</h4>
                        <ul>
                            <li><a href="#">FAQ</a></li>
                            <li><a href="#">Contact us</a></li>
                        </ul>
                    </div>
                    <div class="footer-col">
                        <h4>follow us</h4>
                        <div class="social-links">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>

                    <div class="footer-col.">
                            <p>&copy; Copyright by <span>If Chat</span> All Rights Reserved 2023, Indonesia</p>
                    </div>
                    </div>
                    <div class="footer-iconTop">
                        <a href="#Home"><i class='bx bx-up-arrow-alt'></i></a>
        
                    </div>
            </div>

           </footer>

        <script src="https://unpkg.com/scrollreveal"></script>    

        <script src="{{ asset('js/index.js')}}"></script>
    </body>
</html>