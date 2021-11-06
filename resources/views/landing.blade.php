<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Portal Masyarakat Balikpapan</title>

	  <!-- <link rel="stylesheet" type="text/css" href="{{ asset('plugins/bootstrap-4/css/bootstrap.min.css') }}"> -->

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">

    <!-- CSS here -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
  <!-- Preloader -->
  <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- /Preloader -->

    <!-- Header Area Start -->
    <header class="header-area">
        <div class="classy-nav-container breakpoint-off">
            <div class="container">
                <!-- Classy Menu -->
                <nav class="classy-navbar justify-content-between" id="onitaNav">

                    <!-- Logo -->
                    <a class="nav-brand" href="./index.html">
                    
                        <img src="img/logo.png" alt="" width="100" height="100">
                    
                    </a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">
                        <!-- Menu Close Button -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>
                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul id="nav">
                                <li><a href="#home">Home</a>
                                   
                                </li>
                                <!-- <li><a href="about.html">About</a></li>
                                <li><a href="service.html">Service</a></li>
                                <li><a href="work.html">Work</a></li> -->
                                <li><a href="#service">Layanan</a>
                                    <!-- <ul class="dropdown">
                                        <li><a href="about.html">About</a></li>
                                        <li><a href="service.html">Service</a></li>
                                        <li><a href="work.html">Work</a></li>
                                        <li><a href="login.html">Login</a></li>
                                        <li><a href="register.html">Register</a></li>
                                        <li><a href="forget-password.html">Forget Password</a></li>
                                        <li><a href="coming-soon.html">Coming Soon</a></li>
                                        <li><a href="404.html">404</a></li>
                                    </ul> -->
                                </li>
                                <!-- <li><a href="#price">Price</a></li> -->
                                <li><a href="#">Berita</a>
                                    <ul class="dropdown">
                                        <li><a href="blog.html">Blog</a></li>
                                        <li><a href="blog-grid.html">Blog grid</a></li>
                                        <li><a href="blog-grid-sidebar.html">Blog grid sidebar</a></li>
                                        <li><a href="single-blog.html">Single blog</a></li>
                                    </ul>
                                </li>
                                <li><a href="#contact">Kontak Kami</a></li>
                                @if (Route::has('login'))
              
                                 @auth
                                  <li> <a href="{{ url('/home') }}">Dashboard</a></li>
                                 @else
                                 <li><a href="{{ route('login') }}">Login</a></li>

                                 @if (Route::has('register'))
                                 <li><a href="{{ route('register') }}">Register</a></li>
                                @endif
                                @endauth

                                @endif

                        
                            </ul>
                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </header>

    <!-- Header Area End -->

    <!-- Welcome-area-start -->
    <div class="welcome-area home-10 bg-overlay-3" data-jarallax-video="https://www.youtube.com/watch?v=HppcuRuBz6M" id="home">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-lg-6">
                    <div class="welcome-content mt-sm-100">
                        <h3 class="wow fadeInUp" data-wow-delay="0.4s">SELAMAT DATANG </h3>
                        <h5 class="wow fadeInUp" data-wow-delay="0.6s">Selamat Datang di portal aplikasi Pelayanan Masyarakat Kota Balikpapan Kalimantan Timur, silahkan akses pelayanan digital kami</h5>
                        <div class="slider-btn mt-30">
                            <a class="boxed-btn" href="#service"><span> Layanan Digital </span></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="welcome-thumb">
                        <img class="max-width-none-cu" src="img/bg-img/30.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Welcome-area-end -->

    <!-- Why We Are Area -->

    <!-- Why We Are Area -->

    <!-- We Build Product Area -->

    <!-- We Build Area -->

    <!-- Counter-start -->
    <div class="counter-area gray-bg section-padding-100-50">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="border-bg"></div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="single-counter bg-overlay bg-img mb-50 wow zoomIn" data-wow-delay="0.2s" style="background-image: url(img/bg-img/10.jpg);">
                        <div class="icon">
                            <i class="ti-face-smile"></i>
                        </div>
                        <div class="counter-number">
                            <h3><span class="counter">10</span><span>K</span></h3>
                            <p>User Terdaftar</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="single-counter bg-overlay bg-img mb-50 wow zoomIn" data-wow-delay="0.4s" style="background-image: url(img/bg-img/10.jpg);">
                        <div class="icon">
                            <i class="ti-package"></i>
                        </div>
                        <div class="counter-number">
                            <h3><span class="counter">28</span><span>+</span></h3>
                            <p>Jumlah Layanan</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="single-counter bg-overlay bg-img mb-50 wow zoomIn" data-wow-delay="0.6s" style="background-image: url(img/bg-img/10.jpg);">
                        <div class="icon">
                            <i class="ti-alarm-clock"></i>
                        </div>
                        <div class="counter-number">
                            <h3><span class="counter">20</span><span></span></h3>
                            <p>API Terintegrasi</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="single-counter bg-overlay bg-img mb-50 wow zoomIn" data-wow-delay="0.8s" style="background-image: url(img/bg-img/10.jpg);">
                        <div class="icon">
                            <i class="ti-cup"></i>
                        </div>
                        <div class="counter-number">
                            <h3><span class="counter">305</span></h3>
                            <p>Jumlah Akses</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Counter-start -->

    <!-- Set Up Area -->

    <!-- Set Up Area -->

    <!-- Feature Area -->
    <div class="feature-area gray-bg section-padding-100-50" id="service">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                        <h4>Layanan Digital Kota Balikpapan</h4>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <!-- Single Feature area -->
                <div class="col-md-6 col-lg-4">
                    <div class="single-feature-area text-center">
                        <!-- Feature Icon -->
                        <div class="feature-icon">
                            <img src="img/icon-img/1.svg" alt="">
                        </div>
                        <!-- Single Feature Text -->
                        <div class="feature-content-text">
                            <h4>Administrasi Kelurahan</h4>
                            <p class="mb-0">Administrasi Digital Surat Keterangan Kantor Kelurahan</p>
                        </div>
                        <div class="slider-btn mt-30">
                            <a class="boxed-btn" href="{{ url('/home') }}"><span> Masuk </span></a>
                        </div>
                    </div>
                </div>

                <!-- Single Feature area -->
                <div class="col-md-6 col-lg-4">
                    <div class="single-feature-area text-center">
                        <!-- Feature Icon -->
                        <div class="feature-icon">
                            <img src="img/icon-img/2.svg" alt="">
                        </div>
                        <!-- Single Feature Text -->
                        <div class="feature-content-text">
                            <h4>Administrasi Dukcapil</h4>
                            <p class="mb-0">Administrasi Pengurusan Berkas Kependudukan &amp; Catatan Sipil </p>
                        </div>
                        <div class="slider-btn mt-30">
                            <a class="boxed-btn" href="{{ url('/home') }}"><span> Masuk </span></a>
                        </div>
                    </div>
                </div>

                <!-- Single Feature area -->
                <div class="col-md-6 col-lg-4">
                    <div class="single-feature-area text-center">
                        <!-- Feature Icon -->
                        <div class="feature-icon">
                            <img src="img/icon-img/3.svg" alt="">
                        </div>
                        <!-- Single Feature Text -->
                        <div class="feature-content-text">
                            <h4>Lapor Pajak SPTPD | Cek PBB</h4>
                            <p class="mb-0">Layanan Lapor SPTPD Anda dan Pemeriksaan Tagihan PBB</p>
                        </div>
                        <div class="slider-btn mt-30">
                            <a class="boxed-btn" href="{{ url('/home') }}"><span> Masuk </span></a>
                        </div>
                    </div>
                </div>

                <!-- Single Feature area -->
                <div class="col-md-6 col-lg-4">
                    <div class="single-feature-area text-center">
                        <!-- Feature Icon -->
                        <div class="feature-icon">
                            <img src="img/icon-img/4.svg" alt="">
                        </div>
                        <!-- Single Feature Text -->
                        <div class="feature-content-text">
                            <h4>Layanan Investasi Daerah</h4>
                            <p class="mb-0">Layanan Pengurusan Surat Izin Investasi Daerah</p>
                        </div>
                        <div class="slider-btn mt-30">
                            <a class="boxed-btn" href="{{ url('/home') }}"><span> Masuk </span></a>
                        </div>
                    </div>
                </div>



        </div>
    </div>
    <!-- Feature Area -->



    <!-- Frequently Asked Question Area -->
    <div class="frequently_asked_question bg-overlay section-padding-100-50 bg-img clearfix" style="background-image: url(img/bg-img/10.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                        <h6 class="text-white">FAQ</h6>
                        <h4 class="text-white">Seputar Pertanyaan dan Jawaban</h4>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single FAQ Area Start -->
                <div class="col-md-6">
                    <div class="single_faq mb-50 wow fadeInUp" data-wow-delay="0.2s">
                        <h5>How do I disable installed apps?</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet aut debitis nesciunt quos, impedit beatae ea quidem, animi Lorem ipsum dolor sit amet?</p>
                    </div>
                </div>
                <!-- Single FAQ Area Start -->
                <div class="col-md-6">
                    <div class="single_faq mb-50 wow fadeInUp" data-wow-delay="0.2s">
                        <h5>What should I include in App</h5>
                        <p>Consectetur adipisicing elit. Eveniet aut debitis nesciunt quos, impedit beatae ea quidem, animi Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                </div>
                <!-- Single FAQ Area Start -->
                <div class="col-md-6">
                    <div class="single_faq mb-50 wow fadeInUp" data-wow-delay="0.4s">
                        <h5>Can users choose to install the app?</h5>
                        <p>Impedit beatae ea quidem, animi Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet aut debitis nesciunt quos, impedit beatae ea quidem?</p>
                    </div>
                </div>
                <!-- Single FAQ Area Start -->
                <div class="col-md-6">
                    <div class="single_faq mb-50 wow fadeInUp" data-wow-delay="0.4s">
                        <h5>How does the Moodle app work?</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet aut debitis nesciunt quos, impedit beatae ea quidem, animi Lorem ipsum dolor sit?</p>
                    </div>
                </div>
                <!-- Single FAQ Area Start -->
                <div class="col-md-6">
                    <div class="single_faq mb-50 wow fadeInUp" data-wow-delay="0.6s">
                        <h5>Does disabling apps free up space?</h5>
                        <p>Consectetur adipisicing elit. Eveniet aut debitis nesciunt quos, impedit beatae ea quidem, animi Lorem ipsum dolor sit amet.</p>
                    </div>
                </div>
                <!-- Single FAQ Area Start -->
                <div class="col-md-6">
                    <div class="single_faq mb-50 wow fadeInUp" data-wow-delay="0.6s">
                        <h5>Why are mobile apps important?</h5>
                        <p>Animi Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet aut debitis nesciunt quos, impedit beatae ea quidem, animi</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="support_text text-center mb-50">
                        <h4>Lebih Detail <a href="#"><span>Kontak Kami : admin.portalbalikpapan@balikpapan.co.id</span></a></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Frequently Asked Question Area -->

    <!-- Client Feedback Area -->
    <div class="client-feedback-area section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                        <h6>Sambutan dan Sepatah Kata</h6>
                        <h4>Para Pimpinan Pemerintah Kota Balikpapan</h4>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="client-silder owl-carousel">
                        <!-- Single Slider -->
                        <div class="row align-items-center">
                            <div class="col-sm-4">
                                <!-- Client Thumb -->
                                <div class="client-thumb">
                                    <img src="img/bg-img/15.jpg" alt="">
                                </div>
                            </div>

                            <div class="col-sm-8">
                                <!-- Client Content -->
                                <div class="client-desc client-mt-50">
                                    <p>I must explain to you how all this mistaken idea of will give you a complete denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness.</p>

                                    <h4>Angel Diha - <span>England</span></h4>
                                </div>
                            </div>
                        </div>

                        <!-- Single Slider -->
                        <div class="row align-items-center">
                            <div class="col-sm-4">
                                <!-- Client Thumb -->
                                <div class="client-thumb">
                                    <img src="img/bg-img/16.jpg" alt="">
                                </div>
                            </div>

                            <div class="col-sm-8">
                                <!-- Client Content -->
                                <div class="client-desc client-mt-50">
                                    <p>I must explain to you how all this mistaken idea of will give you a complete denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness.</p>

                                    <h4>Zonas Diha - <span>America</span></h4>
                                </div>
                            </div>
                        </div>

                        <!-- Single Slider -->
                        <div class="row align-items-center">
                            <div class="col-sm-4">
                                <!-- Client Thumb -->
                                <div class="client-thumb">
                                    <img src="img/bg-img/17.png" alt="">
                                </div>
                            </div>

                            <div class="col-sm-8">
                                <!-- Client Content -->
                                <div class="client-desc client-mt-50">
                                    <p>I must explain to you how all this mistaken idea of will give you a complete denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness.</p>

                                    <h4>Anthila Diha - <span>India</span></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Client Feedback Area -->

    <!-- Daily update Area -->
    <div class="daily-update-area gray-bg section-padding-100-50" id="blog">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                      
                        <h4>Berita Terkini</h4>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Blog Area -->
                <div class="col-sm-6 col-lg-3">
                    <div class="single-blog-area mb-50">
                        <!-- Single Blog Thumb -->
                        <div class="blog-thumb">
                            <img src="img/berita/IMG-20211104-WA0024_copy_814x542.jpg" alt="">
                            
                        </div>
                        <!-- Single Blog Content -->
                        <div class="single-blog-content mt-20">
                            <span>Kamis, 04 November 2021</span>
                            <a href="single-blog.html">
                                <h5>Gelar Rapat Koordinasi PPID, Diskominfo Balikpapan Sosialisasikan Perki 1 Tahun 2021</h5>
                            </a>
                            <p>Dinas Komunikasi dan Informatika (Diskominfo) Kota Balikpapan menggelar Rapat Koordinasi Penjabat Pengelola Informasi Dokumentasi (PPID)..</p>
                        </div>
                        <div class="blog-btn">
                            <a href="single-blog.html">Selengkapnya</a>
                        </div>
                    </div>
                </div>

                <!-- Single Blog Area -->
                <div class="col-sm-6 col-lg-3">
                    <div class="single-blog-area mb-50">
                        <!-- Single Blog Thumb -->
                        <div class="blog-thumb">
                            <img src="img/berita/IMG-20211103-WA0010_copy_814x542.jpg" alt="">
                            <!-- <div class="blog-badge">Design</div> -->
                        </div>
                        <!-- Single Blog Content -->
                        <div class="single-blog-content mt-20">
                            <span>Rabu, 03 November 2021</span>
                            <a href="single-blog.html">
                                <h5>Diskominfo Balikpapan Gelar Bimtek SP4N LAPOR! Di Lingkungan Pemkot</h5>
                            </a>
                            <p>Dinas Komunikasi dan Informatika (Diskominfo) Kota Balikpapan menyelenggarakan Bimbingan Teknis (Bimtek) Pengelolaan SP4N LAPOR!..</p>
                        </div>
                        <div class="blog-btn">
                            <a href="single-blog.html">Selengkapnya</a>
                        </div>
                    </div>
                </div>

                <!-- Single Blog Area -->
                <div class="col-sm-6 col-lg-3">
                    <div class="single-blog-area mb-50">
                        <!-- Single Blog Thumb -->
                        <div class="blog-thumb">
                            <img src="img/berita/IMG-20211029-WA0038_copy_814x542.jpg" alt="">
                            
                        </div>
                        <!-- Single Blog Content -->
                        <div class="single-blog-content mt-20">
                            <span>Sabtu, 30 Oktober 2021</span>
                            <a href="single-blog.html">
                                <h5>Wali Kota Hadiri Sosialisasi Perseroan Perseorangan Oleh Kemenkumham</h5>
                            </a>
                            <p>Wali Kota Balikpapan Rahmad Mas'ud menghadiri sosialisasi Perseroan Perseorangan oleh Kementerian Hukum dan HAM (Kemenkumham), Jumat (29/10/2021)</p>
                        </div>
                        <div class="blog-btn">
                            <a href="single-blog.html">Selengkapnya</a>
                        </div>
                    </div>
                </div>

                <!-- Single Blog Area -->
                <div class="col-sm-6 col-lg-3">
                    <div class="single-blog-area mb-50">
                        <!-- Single Blog Thumb -->
                        <div class="blog-thumb">
                            <img src="img/berita/IMG-20211102-WA0010_copy_814x542.jpg" alt="">
                        
                        </div>
                        <!-- Single Blog Content -->
                        <div class="single-blog-content mt-20">
                            <span>Selasa, 02 November 2021</span>
                            <a href="single-blog.html">
                                <h5>DP3AKB Gelar Pelatihan Manajemen Kasus Bagi Lembaga Penyedia Layanan Perempuan Dan Anak Korban Kekerasan</h5>
                            </a>
                            <p>Dinas Pemberdayaan Perempuan Perlindungan Anak dan Keluarga Berencana (DP3AKB) Kota Balikpapan melaksanakan Pelatihan Manajemen Kasus..</p>
                        </div>
                        <div class="blog-btn">
                            <a href="single-blog.html">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Daily update Area -->

    <!-- Contact Area Start -->
    <section class="contact-our-area section-padding-100-0" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                        <h6>Kontak Kami</h6>
                        <h4>Silahkan Hubungi kami</h4>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-11 col-md-11 col-lg-5">
                    <div class="contact-bg-pattern mb-100">
                        <div class="contact-information">
                            <div class="contact-information">
                                <!-- Single Contact Info -->
                                <div class="single-contact-info d-flex align-items-center">
                                    <div class="icon">
                                        <i class="fa fa-location-arrow"></i>
                                    </div>
                                    <div class="contact-info">
                                        <h5 class="mb-1">Alamat</h5>
                                        <p class="mb-0">DISKOMINFO Jl.Jenderal Sudirman No.86, RT.11, Klandasan Ulu,Kota Balikpapan </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Contact Info -->
                            <div class="single-contact-info d-flex align-items-center mt-50">
                                <div class="icon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <div class="contact-info">
                                    <h5 class="mb-1">Hubungi Kami</h5>
                                    <p class="mb-0">(0542) 737584</p>
                                </div>
                            </div>
                        </div>

                        <div class="contact-information">
                            <!-- Single Contact Info -->
                            <div class="single-contact-info d-flex align-items-center mt-50">
                                <div class="icon">
                                    <i class="fa fa-envelope"></i>
                                </div>
                                <div class="contact-info">
                                    <h5 class="mb-1">Email Kami</h5>
                                    <p class="mb-0">admin.portalbalikpapan</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-lg-7">
                    <!-- Contact Form -->
                    <div class="contact_from_area clearfix mb-100">
                        <div class="contact_form">
                            <form action="mail.php" method="post" id="main_contact_form">
                                <div class="contact_input_area">
                                    <div id="success_fail_info"></div>
                                    <div class="row">
                                        <!-- Form Group -->
                                        <div class="col-12 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control mb-30" name="name" id="name" placeholder="Nama Depan" required>
                                            </div>
                                        </div>
                                        <!-- Form Group -->
                                        <div class="col-12 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control mb-30" name="name" id="name-2" placeholder="Nama Belakang" required>
                                            </div>
                                        </div>
                                        <!-- Form Group -->
                                        <div class="col-12 col-lg-6">
                                            <div class="form-group">
                                                <input type="email" class="form-control mb-30" name="email" id="email" placeholder="E-mail" required>
                                            </div>
                                        </div>
                                        <!-- Form Group -->
                                        <div class="col-12 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control mb-30" name="subject" id="subject" placeholder="Nomor Telp">
                                            </div>
                                        </div>
                                        <!-- Form Group -->
                                        <div class="col-12">
                                            <div class="form-group">
                                                <textarea name="message" class="form-text-area mb-30" id="message" cols="30" rows="6" placeholder="Pesan Anda *" required></textarea>
                                            </div>
                                        </div>
                                        <!-- Button -->
                                        <div class="col-12 text-center">
                                            <button type="submit" class="btn boxed-btn">Kirim Pesan</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Area End -->



    <!-- Footer Contact Area -->
    <div class="footer-contact-area section-padding-100-50">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Footer Widget -->
                <div class="col-sm-6 col-lg-3">
                    <div class="footer-single-widget mb-50">
                        <div class="footer-logo">
                            <a href="#"><img src="img/logo.png" alt=""></a>
                        </div>
                        <p class="mt-30">Silahkan Akses Akun Sosial Media Kami untuk informasi terkini</p>
                        <!-- Contact Icon -->
                        <div class="footer-contact-icon">
                            <a href="#"><i class="fa fa-facebook-f"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>


                <!-- Footer Widget -->
                <div class="col-sm-6 col-lg-3">
                    <div class="footer-single-widget mb-50">
                        <h4>Link Terkait</h4>
                        <ul>
                            <li><a href="balikpapan.go.id">Website Kota Balikpapan</a></li>
                            <li><a href="kaltim.go.id">Website Pemprov Kalimantan Timur</a></li>
                            <li><a href="diskominfo.balikpapan.go.id">Diskominfo Kota Balikpapan</a></li>
                   
                        </ul>
                    </div>
                </div>

                <!-- Footer Widget -->
                <div class="col-sm-6 col-lg-3">
                    <div class="footer-single-widget mb-50">
                        <h4>Info </h4>
                        <ul>
                            <li><a href="#"><i class="ti-location-pin"></i> DISKOMINFO</a></li>
                            <li><a href="#"><i class="ti-pin2"></i> Pemerintah Kota Balikpapan</a></li>
                            <li><a href="#"><i class="ti-email"></i> admin@balikpapan.go.id</a></li>
                            <li><a href="#"><i class="ti-mobile"></i> (0542) 73758</a></li>
                          
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Contact Area -->

    <!-- Copy Right Area -->
    <div class="copy-right-area">
        <div class="container">
            <div class="row">
                <!-- Copy Right Menu -->
                <div class="col-md-6">
                    <div class="copy-right-menu">
                        <ul>
                            <li><a href="#">Kebijakan Umum &amp; Aturan</a></li>
                            <li><a href="#faq">| Pertanyaan&Jawaban</a></li>
                          
                        </ul>
                    </div>
                </div>

                <!-- Copy Right Content -->
                <div class="col-md-6 text-right mt-sm-cu-30">
                    <div class="copy-right-content">
                        <p>Hakcipta © 2021 - Pemerintah Kota Balikpapan</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- JS here -->
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.nav.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/scrollIt.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/nice-select.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/jquery.animatedheadline.min.js"></script>
    <script src="js/bundle.js"></script>

    <!-- Custom js-->
    <script src="js/main.js"></script>


</body>

</html>