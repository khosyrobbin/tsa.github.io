<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#hide").click(function () {
                $("p").slideUp(800);
            });
        $("#show").click(function(){
            $("p").slideDown(800);
            });
        });
    </script>

</head>

<body>
    <!-- nav -->
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="javascript:void(0)">HOLIDAY</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mynavbar">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">List</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="text" placeholder="Search">
                    <button class="btn btn-primary" type="button">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container-fluid mt-3">
        <section class="section1">
            <center>
                <hr>
                <button id="hide" class="navbar-toggler" type="button" data-bs-toggle="collapse">Hide</button>
                <button id="show" class="navbar-toggler" type="button" data-bs-toggle="collapse">Show</button>
                <h3>3 Pantai Terindah di Indonesia</h3>
                <p>Selamat Hari Laut Sedunia! Sebagai negara kepulauan, Indonesia memiliki banyak laut dan pantai
                    terindah yang begitu eksotis. Kamu nggak perlu repot-repot ke luar negeri untuk menikmati keindahan
                    bahari, karena di Indonesia pun ada banyak.</p>
                <hr>
            </center>
        </section>
        <div class=image>
            <div>
                <div class="container features">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <h3 class="feature-title" id="tittle">Nihiwatu Beach, Sumba, NTT</h3>
                            <img src="img/pantai1.jpg" class="img-fluid">
                            <p>Keindahan pantai-pantai di daerah Sumba memang nggak perlu diragukan lagi. Salah satunya
                                adalah Nihiwatu Beach, pantai sepanjang 2,5 km ini merupakan salah satu dari 20 pantai
                                terbaik di dunia, lho!</p>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <h3 class="feature-title" id="tittle">Pantai Ora, Maluku Tengah</h3>
                            <img src="img/pantai2.jpg" class="img-fluid">
                            <p>Pantai Ora terletak di bagian utara Pulau Seram, Maluku Tengah. Untuk mencapainya, kamu
                                bisa menaiki kapal ferry dari pelabuhan di Kota Ambon. Keindahan pantainya menyaingi
                                Bora-bora dan juga Maldives!</p>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <h3 class="feature-title" id="tittle">Tomini Bay, Sulawesi Utara</h3>
                            <img src="img/pantai3.jpg" class="img-fluid">
                            <p>Bagi para pecinta kegiatan diving dan snorkeling, wajib banget mengunjungi Tomini Bay di
                                Sulawesi Utara. Tempat ini belum banyak dijamah, keindahan alamnya sangat terjaga.</p>
                        </div>

                        <center>
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            
                        </div>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <div class="footer-basic">
        <footer>
            <div class="social"><a href="#"><i class="icon ion-social-instagram"></i></a><a href="#"><i
                        class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-facebook"></i></a>
            </div>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="#">Home</a></li>
                <li class="list-inline-item"><a href="#">List</a></li>
                <li class="list-inline-item"><a href="#">About</a></li>
            </ul>
            <p class="copyright">Kelompok Bersama © 2022</p>
        </footer>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
</body>

</html>
