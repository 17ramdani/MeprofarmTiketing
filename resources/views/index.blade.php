<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>MeproTiketing</title>
    <meta content="" name="description">
    <meta content="" name="keywords">


    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Roboto:100,300,400,500,700|Philosopher:400,400i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->

    <link href=" {{ asset('index') }}/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href=" {{ asset('index') }}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href=" {{ asset('index') }}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href=" {{ asset('index') }}/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href=" {{ asset('index') }}/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href=" {{ asset('index') }}/assets/css/style.css" rel="stylesheet">

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">

            <div id="logo">
                <h1><a href="index.html"><span>e</span>Tiketing</a></h1>
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link " href="{{ route('login') }}">Admin</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->
    @include('sweetalert::alert')
    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div class="hero-container " data-aos="fade-in">
            <h1>Selamat Datang di eTiketing</h1>
            <h2> Solusi Terbaik untuk Masalah Perangkat Anda</h2>
            <img src=" {{ asset('index') }}/assets/img/hero-img.png" alt="Hero Imgs" data-aos="zoom-out"
                data-aos-delay="100">

            <a href="{{ route('user.login') }}" class="btn-get-started scrollto">Klik Untuk Memulai Perbaikan</a>
        </div>
    </section><!-- End Hero Section -->

    <!-- ======= Footer ======= -->
    <footer class="footer">
        <div class="container">
            <div class="row">

                <div class="col-md-6 ">
                    <div class="footer-logo">

                        <a class="navbar-brand" href="#">eTiketing</a>
                        <p> Tiketing adalah solusi terbaik untuk memperbaiki masalah hardware dan software pada
                            perangkat karyawan Anda. Dengan layanan kami, Anda dapat memperbaiki masalah dengan cepat
                            dan mudah tanpa harus membuang waktu dan dapatkan layanan terbaik dan hemat waktu dengan
                            Tiketing!. </p>

                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="list-menu">

                        {{-- <h4>About Us</h4>

                        <ul class="list-unstyled">
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Features item</a></li>
                            <li><a href="#">Live streaming</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul> --}}

                    </div>
                </div>


                <div class="col-sm-3">
                    <div class="list-menu">
                        <img src="{{ asset('style/assets/images/mepro.jpg') }}" class="w-50" alt="logo icon">
                    </div>
                </div>

            </div>
        </div>

        <div class="copyrights">
            <div class="container">
                <p>&copy; 2023 PT. Meprofarm Pharmaceutical Industries</p>
                {{-- <div class="credits">
                    Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                </div> --}}
            </div>
        </div>

    </footer><!-- End  Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src=" {{ asset('index') }}/assets/vendor/aos/aos.js"></script>
    <script src=" {{ asset('index') }}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src=" {{ asset('index') }}/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src=" {{ asset('index') }}/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src=" {{ asset('index') }}/assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src=" {{ asset('index') }}/assets/js/main.js"></script>

</body>

</html>
