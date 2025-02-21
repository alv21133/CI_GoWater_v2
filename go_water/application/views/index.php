<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Go Water</title>

    <!-- Favicon -->
    <link rel="icon" href="<?php echo base_url() ?>/assets/img/core-img/logo_gowater.jpg">

    <!-- Core Stylesheet -->
    <link href="<?php echo base_url() ?>/assets/style.css" rel="stylesheet">

    <!-- Responsive CSS -->
    <link href="<?php echo base_url() ?>/assets/css/responsive.css" rel="stylesheet">

</head>

<body>
    <!-- Preloader Start -->
    <div id="preloader">
        <div class="colorlib-load"></div>
    </div>

    <!-- ***** Header Area Start ***** -->
    <header class="header_area animated">
        <div class="container-fluid">
            <div class="row align-items-center">
                <!-- Menu Area Start -->
                <div class="col-12 col-lg-10">
                    <div class="menu_area">
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <!-- Logo -->
                            <a href="#home"><img style="width:75px;height:50px;" src="<?php echo base_url() ?>/assets/img/logo_gowater.png"></img></a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ca-navbar" aria-controls="ca-navbar" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                            <!-- Menu Area -->
                            <div class="collapse navbar-collapse" id="ca-navbar">
                                <ul class="navbar-nav ml-auto" id="nav">
                                    <li class="nav-item active"><a class="nav-link" href="#home">Home</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#features">Panduan</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#screenshot">Gallery</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#pricing">Biaya</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#testimonials">Contributor</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#team">Team</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                                </ul>
                                <div class="sing-up-button d-lg-none">
                                    <a href="Welcome/login/">Login</a>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
                <!-- Signup btn -->
                <div class="col-12 col-lg-2">
                    <div class="sing-up-button d-none d-lg-block">
                        <a href="#about">Tentang Kami</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Wellcome Area Start ***** -->
    <section class="wellcome_area clearfix" id="home">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12 col-md">
                    <div class="wellcome-heading">
                        <h2>Go Water app</h2>
                        <h3>G</h3>
                        <p>Melayani kebutuhan  air masyarakat dengan sepenuh hati.. </p>
                    </div>
                    <div class="get-start-area">
   
                        <!-- <form action="#" method="post" class="form-inline">
                            <input type="email" class="form-control email" placeholder="name@company.com">
                            <input type="submit" class="submit" value="Get Started">
                        </form> -->
                        <!-- Form End
                        tumbol login -->
                            <div class=" row">
                                <div class="col-12 col-lg-2">
                                        <div class="sing-up-button d-none d-lg-block">
                                            <a href="welcome/masuk/">Login</a>
                                        </div>
                                </div>
                                    <div class="col-12 col-lg-2">
                                    <a class="active" href="welcome/daftar/"><input type="submit" class="submit" value="Daftar"></a>
                                    
                                </div>

                            </div>
                            <!-- tumbol login -->

                      </div>
                </div>
            </div>
        </div>
        <!-- Welcome thumb -->
        <div class="welcome-thumb wow fadeInDown" data-wow-delay="0.5s">
            <img style="margin-bottom:8rem ; margin-left:3rem" src="<?php echo base_url() ?>/assets/img/bg-img/keluarga2.png" alt="">
        </div>
    </section>
    <!-- ***** Wellcome Area End ***** -->

    <!-- ***** Special Area Start ***** -->
    <section class="special-area bg-white section_padding_100" id="about">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section Heading Area -->
                    <div class="section-heading text-center">
                        <h2>Apa yang sepesial dari kami ?</h2>
                        <div class="line-shape"></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Special Area -->
                <div class="col-12 col-md-4">
                    <div class="single-special text-center wow fadeInUp" data-wow-delay="0.2s">
                        <div class="single-icon">
                            <i class="ti-mobile" aria-hidden="true"></i>
                        </div>
                        <h4>Mudah di Gunakan</h4>
                        <p>Kebutuhan air dapat terpenuhi dan kita tidak perlu membuat sumur sendiri selain itu suplay air terjaga</p>
                    </div>
                </div>
                <!-- Single Special Area -->
                <div class="col-12 col-md-4">
                    <div class="single-special text-center wow fadeInUp" data-wow-delay="0.4s">
                        <div class="single-icon">
                            <i class="ti-ruler-pencil" aria-hidden="true"></i>
                        </div>
                        <h4>Informatif</h4>
                       <p>Semua  informasi mengenai biaya maupun agenda akan dapat di ketahui di dashboardmember masing-masing </p>
                    </div>
                </div>
                <!-- Single Special Area -->
                <div class="col-12 col-md-4">
                    <div class="single-special text-center wow fadeInUp" data-wow-delay="0.6s">
                        <div class="single-icon">
                            <i class="ti-settings" aria-hidden="true"></i>
                        </div>
                        <h4>Update Informasi</h4>
                       <p>Go water selalu akan mengupdate informasi terbaru melalui dashboard member masing-masing</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Special Description Area -->
        <div class="special_description_area mt-150">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="special_description_img">
                            <img src="<?php echo base_url() ?>/assets/img/bg-img/special.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-5 ml-xl-auto">
                        <div class="special_description_content">
                            <!-- <h2>Our Best Propositions for You!</h2> -->
                            <h2>Pelayanan Kami Untuk Anda!</h2>
                            <p>Kami melayani anda sepenuh hati, dengan kebersihan air murni dari sumber terpercaya sehingga dapat
                            digunakan untuk kebutuhan sehari-hari anda dengan aman. Memastikan air mengalir setiap saat ke seluruh konsumen go water</p>
                            <div class="app-download-area">
                                <div class="app-download-btn wow fadeInUp" data-wow-delay="0.2s">
                                    <!-- Google Store Btn -->
                                    <a href="#">
                                        <i class="fa fa-android"></i>
                                        <p class="mb-0"><span>available on</span> Google Store</p>
                                    </a>
                                </div>
                                <div class="app-download-btn wow fadeInDown" data-wow-delay="0.4s">
                                    <!-- Apple Store Btn -->
                                    <a href="#">
                                        <i class="fa fa-apple"></i>
                                        <p class="mb-0"><span>available on</span> Apple Store</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Special Area End ***** -->

    <!-- ***** Awesome Features Start ***** -->
    <section class="awesome-feature-area bg-white section_padding_0_50 clearfix" id="features">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Heading Text -->
                    <div class="section-heading text-center">
                        <h2>Bagaimana Untuk Daftar ?</h2>
                        <div class="line-shape"></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Feature Start -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-feature">
                        <i class="ti-user" aria-hidden="true"></i>
                        <h5>Paket 1</h5>
                        <p>Peserta mendaftar hanya membayar biaya admin dengan ketentuan semua alat di dari go water ke rumah tanggung member </p>
                    </div>
                </div>
                <!-- Single Feature Start -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-feature">
                        <i class="ti-ruler-pencil" aria-hidden="true"></i>
                        <h5>Isi Form Pendaftaran</h5>
                        <p>Calon Member Go Water membuka web Go water dan mengisi form yang sudah di sediakan dengan lengkap dan benar </p>
                    </div>
                </div>
                <!-- Single Feature Start -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-feature">
                        <i class="ti-dashboard" aria-hidden="true"></i>
                        <h5>Konfirmasi</h5>
                        <p>Selanjutnya Calon Pelangggan datang ke kantor untuk  melakukan konfirmasi dan membayar biaya admin sesuai ketentuan </p>
                    </div>
                </div>
                <!-- Single Feature Start -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-feature">
                        <i class="ti-palette" aria-hidden="true"></i>
                        <h5>Paket 2</h5>
                        <p>Peserta Pendaftar membayar dengan biaya alat dan pemasangan dari sumber go water menuju rumah konsumen oleh pihak dari go water</p> 
                    </div>
                </div>
                <!-- Single Feature Start -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-feature">
                        <i class="ti-desktop" aria-hidden="true"></i>
                        <h5>Isi Form Pendaftaran</h5>
                        <p>Calon Member Go Water membuka web Go water dan mengisi form yang sudah di sediakan dengan lengkap dan benar</p>
                    </div>
                </div>
                <!-- Single Feature Start -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-feature" >
                        <i class="ti-mobile" aria-hidden="true"></i>
                        <h5>Alur 5</h5>
                        <p>Selanjutnya Calon Pelangggan datang ke kantor untuk melakukan konfirmasi dan membayar biaya admin sesuai ketentuan</p>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- ***** Awesome Features End ***** -->

    <!-- ***** Video Area Start ***** -->
    <div class="video-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Video Area Start -->
                    <div class="video-area" style="background-image: url(<?php echo base_url() ?>/assets/img/bg-img/pelayanan.jpg);">
                        <div class="video-play-btn">
                            <a href="https://www.youtube.com/watch?v=YPVAQqmHGDc" class="video_btn"><i class="fa fa-play" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Video Area End ***** -->

    <!-- ***** Cool Facts Area Start ***** -->
    <section class="cool_facts_area clearfix">
        <div class="container">
            <div class="row">
                <!-- Single Cool Fact-->
                <div class="col-12 col-md-3 col-lg-3">
                    <div class="single-cool-fact d-flex justify-content-center wow fadeInUp" data-wow-delay="0.2s">
                        <div class="counter-area">
                            <h3><span class="counter">20</span></h3>
                        </div>
                        <div class="cool-facts-content">
                            <i class="ion-arrow-down-a"></i>
                            <p>SUMBER <br>MATA AIR</p>
                        </div>
                    </div>
                </div>
                <!-- Single Cool Fact-->
                <div class="col-12 col-md-3 col-lg-3">
                    <div class="single-cool-fact d-flex justify-content-center wow fadeInUp" data-wow-delay="0.4s">
                        <div class="counter-area">
                            <h3><span class="counter">80</span></h3>
                        </div>
                        <div class="cool-facts-content">
                            <i class="ion-happy-outline"></i>
                            <p>Team <br>Contributor</p>
                        </div>
                    </div>
                </div>
                <!-- Single Cool Fact-->
                <div class="col-12 col-md-3 col-lg-3">
                    <div class="single-cool-fact d-flex justify-content-center wow fadeInUp" data-wow-delay="0.6s">
                        <div class="counter-area">
                            <h3><span class="counter">67</span></h3>
                        </div>
                        <div class="cool-facts-content">
                            <i class="ion-person"></i>
                            <p>MEMBER <br>AKTIF</p>
                        </div>
                    </div>
                </div>
                <!-- Single Cool Fact-->
                <div class="col-12 col-md-3 col-lg-3">
                    <div class="single-cool-fact d-flex justify-content-center wow fadeInUp" data-wow-delay="0.8s">
                        <div class="counter-area">
                            <h3><span class="counter">8</span></h3>
                        </div>
                        <div class="cool-facts-content">
                            <i class="ion-ios-star-outline"></i>
                            <p>KEPUASAN <br>PELANGGAN</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Cool Facts Area End ***** -->

    <!-- ***** App Screenshots Area Start ***** -->
    <section class="app-screenshots-area bg-white section_padding_0_100 clearfix" id="screenshot">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <!-- Heading Text  -->
                    <div class="section-heading">
                        <h2>Go Water Gallery</h2>
                        <div class="line-shape"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- App Screenshots Slides  -->
                    <div class="app_screenshots_slides owl-carousel">
                        <div class="single-shot">
                            <img src="<?php echo base_url() ?>/assets/img/scr-img/app-1.jpg" alt="">
                        </div>
                        <div class="single-shot">
                            <img src="<?php echo base_url() ?>/assets/img/scr-img/app-2.jpg" alt="">
                        </div>
                        <div class="single-shot">
                            <img src="<?php echo base_url() ?>/assets/img/scr-img/app-3.jpg" alt="">
                        </div>
                        <div class="single-shot">
                            <img src="<?php echo base_url() ?>/assets/img/scr-img/app-4.jpg" alt="">
                        </div>
                        <div class="single-shot">
                            <img src="<?php echo base_url() ?>/assets/img/scr-img/app-5.jpg" alt="">
                        </div>
                        <div class="single-shot">
                            <img src="<?php echo base_url() ?>/assets/img/scr-img/app-3.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** App Screenshots Area End *****====== -->

    <!-- ***** Pricing Plane Area Start *****==== -->
    <section class="pricing-plane-area section_padding_100_70 clearfix" id="pricing">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Heading Text  -->
                    <div class="section-heading text-center">
                        <h2>Rincian Biaya</h2>
                        <div class="line-shape"></div>
                    </div>
                </div>
            </div>



            <div class="row no-gutters">
                <div class="col-12 col-md-6 col-lg-3">
                    <!-- Package Price  -->
                    <div class="single-price-plan text-center">
                        <!-- Package Text  -->
                        <div class="package-plan">
                            <h5>Paket 1</h5>
                            <div class="ca-price d-flex justify-content-center">
                                <span>Rp</span>
                                <h4>500.000</h4>
                            </div>
                        </div>
                        <div class="package-description">
                            <p> Maping Jalur Pelanggan</p>
                            <p>Unlimited updates</p>
                            <p>Bebas Konsultasi &amp; supoort</p>
                            <p>24/7 Support</p>
                            <p>Kualitas terjaga</p>
                        </div>
                        <!-- Plan Button  -->
                        <div class="plan-button">
                            <a href="#">Tersedia</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <!-- Package Price  -->
                    <div class="single-price-plan text-center">
                        <!-- Package Text  -->
                        <div class="package-plan">
                            <h5>Paket 2</h5>
                            <div class="ca-price d-flex justify-content-center">
                                <span>Rp</span>
                                <h4>2000.000</h4>
                            </div>
                        </div>
                        <div class="package-description">
                            <p> Maping Jalur Pelanggan</p>
                            <p>Unlimited updates</p>
                            <p>Bebas Konsultasi &amp; supoort</p>
                            <p>24/7 Support</p>
                            <p>Kualitas terjaga</p>
                        </div>
                        <!-- Plan Button  -->
                        <div class="plan-button">
                            <a href="#">Tersedia</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <!-- Package Price  -->
                    <div class="single-price-plan active text-center">
                        <!-- Package Text  -->
                        <div class="package-plan">
                            <h5>Bisnis</h5>
                            <div class="ca-price d-flex justify-content-center">
                                <span>MOU</span>
                                <h4>Survei</h4>
                            </div>
                        </div>
                        <div class="package-description">
                            <p> Maping Jalur Pelanggan</p>
                            <p>Unlimited updates</p>
                            <p>Bebas Konsultasi &amp; supoort</p>
                            <p>24/7 Support</p>
                            <p>Kualitas terjaga</p>
                        </div>
                        <!-- Plan Button  -->
                        <div class="plan-button">
                            <a href="#">Tersedia</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <!-- Package Price  -->
                    <div class="single-price-plan text-center">
                        <!-- Package Text  -->
                        <div class="package-plan">
                            <h5>Komunitas</h5>
                            <div class="ca-price d-flex justify-content-center">
                                <span>Rp</span>
                                <h4>4000.000</h4>
                            </div>
                        </div>
                        <div class="package-description">
                            <p> Maping Jalur Pelanggan</p>
                            <p>Unlimited updates</p>
                            <p>Bebas Konsultasi &amp; supoort</p>
                            <p>24/7 Support</p>
                            <p>Kualitas terjaga</p>
                        </div>
                        <!-- Plan Button  -->
                        <div class="plan-button">
                            <a href="#">Tersedia</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Pricing Plane Area End ***** -->

    <!-- ***** Client Feedback Area Start ***** -->
    <section class="clients-feedback-area bg-white section_padding_100 clearfix" id="testimonials">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10">
                    <div class="slider slider-for">
                        <!-- Client Feedback Text  -->
                        <div class="client-feedback-text text-center">
                            <div class="client">
                                <i class="fa fa-quote-left" aria-hidden="true">  Wahyudi</i>
                            </div>
                            <div class="client-description text-center">
                                <p>“ Memastikan semua pekerjaan yang di lakukan anggota sesuai dengan planing dan schedule , riview hasil pekerjaan member serta solving problem dari member  ”</p>
                            </div>
                            <div class="star-icon text-center">
                                <i class="ion-ios-star"></i>
                                <i class="ion-ios-star"></i>
                                <i class="ion-ios-star"></i>
                                <i class="ion-ios-star"></i>
                                <i class="ion-ios-star"></i>
                            </div>
                            <div class="client-name text-center">
                                <h5>Leader</h5>
                                <p>Project Leader</p>
                            </div>
                        </div>
                        <!-- Client Feedback Text  -->
                        <div class="client-feedback-text text-center">
                            <div class="client">
                                <i class="fa fa-quote-left" aria-hidden="true"> M. Nugraha Jatun</i>
                            </div>
                            <div class="client-description text-center">
                                <p>“ Membuat rancang database dari seluruh alur program dan memenuhi kebutuhan data yang di perlukan oleh user tanpa ada missing data di dalam program ”</p>
                            </div>
                            <div class="star-icon text-center">
                                <i class="ion-ios-star"></i>
                                <i class="ion-ios-star"></i>
                                <i class="ion-ios-star"></i>
                                <i class="ion-ios-star"></i>
                                <i class="ion-ios-star"></i>
                            </div>
                            <div class="client-name text-center">
                                <h5>Trauble Maker</h5>
                                <p>ERD and Database</p>
                            </div>
                        </div>
                        <!-- Client Feedback Text  -->
                        <div class="client-feedback-text text-center">
                            <div class="client">
                                <i class="fa fa-quote-left" aria-hidden="true">Saefudin Irsyad</i>
                            </div>
                            <div class="client-description text-center">
                                <p>“ Mengumpulkan materi yang yang akan di olah di dalam program Membuat grafis yang mudah di pahami user serta inovatiif dan menganding nlai estetika yang informatif terhadap user ”</p>
                            </div>
                            <div class="star-icon text-center">
                                <i class="ion-ios-star"></i>
                                <i class="ion-ios-star"></i>
                                <i class="ion-ios-star"></i>
                                <i class="ion-ios-star"></i>
                                <i class="ion-ios-star"></i>
                            </div>
                            <div class="client-name text-center">
                                <h5>Documenter</h5>
                                <p>Matrial and Grafis</p>
                            </div>
                        </div>
                        <!-- Client Feedback Text  -->
                        <div class="client-feedback-text text-center">
                            <div class="client">
                                <i class="fa fa-quote-left" aria-hidden="true"> Go Water</i>
                            </div>
                            <div class="client-description text-center">
                                <p>“ Suatu layana air bersih masarakat dengan setuhan teknologi yang   ”</p>
                            </div>
                            <div class="star-icon text-center">
                                <i class="ion-ios-star"></i>
                                <i class="ion-ios-star"></i>
                                <i class="ion-ios-star"></i>
                                <i class="ion-ios-star"></i>
                                <i class="ion-ios-star"></i>
                            </div>
                            <div class="client-name text-center">
                                <h5>Go Water Inc</h5>
                                <p>Indonesia</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Client Thumbnail Area -->
                <div class="col-12 col-md-6 col-lg-5">
                    <div class="slider slider-nav">
                        <div class="client-thumbnail">
                            <img src="<?php echo base_url() ?>/assets/img/bg-img/client-1.jpg" alt="">
                        </div>
                        <div class="client-thumbnail">
                            <img src="<?php echo base_url() ?>/assets/img/bg-img/client-3.jpg" alt="">
                        </div>
                        <div class="client-thumbnail">
                            <img src="<?php echo base_url() ?>/assets/img/bg-img/client-2.jpg" alt="">
                        </div>
                        <div class="client-thumbnail">
                            <img src="<?php echo base_url() ?>/assets/img/logo_admin.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Client Feedback Area End ***** -->

    <!-- ***** CTA Area Start ***** -->
    <section class="our-monthly-membership section_padding_50 clearfix" id="daftar22">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <div class="membership-description" >
                        <h2>Mari Bergabung Dengan Kami</h2>
                        <p>Nikmati Kemudahan dan kenyamanan untuk hidup sehat </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="get-started-button wow bounceInDown" data-wow-delay="0.5s">
                        <a href="<?php echo base_url() ?>/Welcome/daftar/" style="position:absolute">Daftar Sekarang</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** CTA Area End ***** -->

    <!-- ***** Our Team Area Start ***** -->
    <section class="our-Team-area bg-white section_padding_100_50 clearfix" id="team">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <!-- Heading Text  -->
                    <div class="section-heading">
                        <h2>Go Water Team</h2>
                        <div class="line-shape"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-team-member">
                        <div class="member-image">
                            <img src="<?php echo base_url() ?>/assets/img/bg-img/client-1.jpg" style="height:280px;" alt="">
                            <div class="team-hover-effects">
                                <div class="team-social-icon">
                                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                    <a href="#"> <i class="fa fa-instagram" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="member-text">
                            <h4>Wahyudi</h4>
                            <p>Project Leader</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-team-member">
                        <div class="member-image">
                            <img src="<?php echo base_url() ?>/assets/img/bg-img/client-3.jpg" alt="">
                            <div class="team-hover-effects">
                                <div class="team-social-icon">
                                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                    <a href="#"> <i class="fa fa-instagram" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="member-text">
                            <h4>Saefudi Irsyad </h4>
                            <p>Design Grafis</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-team-member">
                        <div class="member-image">
                            <img src="<?php echo base_url() ?>/assets/img/bg-img/client-2.jpg" alt="">
                            <div class="team-hover-effects">
                                <div class="team-social-icon">
                                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                    <a href="#"> <i class="fa fa-instagram" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="member-text">
                            <h4>M Nugraha Jatun</h4>
                            <p>Database</p>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Our Team Area End ***** -->

    <!-- ***** Contact Us Area Start ***** -->
    <section class="footer-contact-area section_padding_100 clearfix" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <!-- Heading Text  -->
                    <div class="section-heading">
                        <h2>Go Water</h2>
                        <div class="line-shape"></div>
                    </div>
                    <div class="footer-text">
                        <p>Alamat Lengkap go water Lorem ipsum dolor sit amet consectet</p>
                    </div>
                    <div class="address-text">
                        <p><span>Address:</span> 40 Baria Sreet 133/2 NewYork City, US</p>
                    </div>
                    <div class="phone-text">
                        <p><span>Phone:</span> +11-225-888-888-66</p>
                    </div>
                    <div class="email-text">
                        <p><span>Email:</span> info.deercreative@gmail.com</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <!-- Form Start-->
                    <div class="contact_from">
                        <form action="#" method="post">
                            <!-- Message Input Area Start -->
                            <div class="contact_input_area">
                                <div class="row">
                                    <!-- Single Input Area Start -->
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="name" id="name" placeholder="Nama Anda" required>
                                        </div>
                                    </div>
                                    <!-- Single Input Area Start -->
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" id="email" placeholder="E-mail Anda" required>
                                        </div>
                                    </div>
                                    <!-- Single Input Area Start -->
                                    <div class="col-12">
                                        <div class="form-group">
                                            <textarea name="message" class="form-control" id="message" cols="30" rows="4" placeholder="Tulis Pesan " required></textarea>
                                        </div>
                                    </div>
                                    <!-- Single Input Area Start -->
                                    <div class="col-12">
                                        <button type="submit" class="btn submit-btn">Kirim</button>
                                    </div>
                                </div>
                            </div>
                            <!-- Message Input Area End -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Contact Us Area End ***** -->

    <!-- ***** Footer Area Start ***** -->
    <footer class="footer-social-icon text-center section_padding_70 clearfix">
        <!-- footer logo -->
        <div class="footer-text">
            <img style="width:80px; height:50px;" src="<?php echo base_url() ?>/assets/img/logo_gowater.png"></img>
        </div>
        <!-- social icon-->
        <div class="footer-social-icon">
            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            <a href="#"><i class="active fa fa-twitter" aria-hidden="true"></i></a>
            <a href="#"> <i class="fa fa-instagram" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
        </div>
        <div class="footer-menu">
            <nav>
                <ul>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Terms &amp; Conditions</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </nav>
        </div>
        <!-- Foooter Text-->
        <div class="copyright-text">
            <!-- ***** Removing this text is now allowed! This template is licensed under CC BY 3.0 ***** -->
            <p>Copyright ©2018  Designed by Sasori</p>
        </div>
    </footer>
    <!-- ***** Footer Area Start ***** -->

    <!-- Jquery-2.2.4 JS -->
    <script src="<?php echo base_url() ?>/assets/js/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="<?php echo base_url() ?>/assets/js/popper.min.js"></script>
    <!-- Bootstrap-4 Beta JS -->
    <script src="<?php echo base_url() ?>/assets/js/bootstrap.min.js"></script>
    <!-- All Plugins JS -->
    <script src="<?php echo base_url() ?>/assets/js/plugins.js"></script>
    <!-- Slick Slider Js-->
    <script src="<?php echo base_url() ?>/assets/js/slick.min.js"></script>
    <!-- Footer Reveal JS -->
    <script src="<?php echo base_url() ?>/assets/js/footer-reveal.min.js"></script>
    <!-- Active JS -->
    <script src="<?php echo base_url() ?>/assets/js/active.js"></script>
</body>

</html>
