<?php
// include_once'conection.php';
// include_once'save_member_baru.php';
// ?>

<!DOCTYPE html>
<html lang="id">
<head>
	<title>GO Water</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
<link rel="icon" href="<?php echo base_url() ?>/assets/img/core-img/logo_gowater.jpg">
<!--===============================================================================================-->

<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/main.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/fix.css">
<!--===============================================================================================-->

    <!-- Core Stylesheet -->
    <link href="<?php echo base_url() ?>/assets/style.css" rel="stylesheet">

    <!-- Responsive CSS -->
    <link href="<?php echo base_url() ?>/assets/css/responsive.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>/assets/css/bootstrap.min.css" rel="stylesheet">
<!--===============================================================================================-->
    <link href=”pendaftaran.css” rel=”stylesheet”>
</head>
<body cl >
	 <header class="header_area animated ">
        <div class="container-fluid ">
            <div class="row align-items-center">
                <!-- Menu -->
                <div class="col-12 col-lg-10">
                    <div class="menu_area">
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <!-- Logo -->
                           <a href="<?php echo base_url() ?>"><img style="width:75px; height:50px;" src="<?php echo base_url() ?>/assets/img/logo_gowater.png"></img></a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ca-navbar" aria-controls="ca-navbar" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                            <!-- Menu  -->
                            <div class="collapse navbar-collapse" id="ca-navbar">
                                <ul class="navbar-nav ml-auto" id="nav">
                                    <li class="nav-item active"><a class="nav-link" href="#home">Home</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#bawah">About</a></li>
                                    
                                </ul>
                                
                            </div>
                        </nav>
                    </div>
                </div>
                <!-- daftar -->
                <div class="col-12 col-lg-2">
                    <div class="sing-up-button d-none d-lg-block">
                        <a href="<?php echo base_url() ?>Welcome/masuk/">login</a>
                    </div>
                </div>
        </div>
    </header>
    <!-- header  -->
	<div class="">
		<div class="container-login100" style="background-image: url('<?php echo base_url() ?>/assets/img/bg-img/welcome-bg.png');">
			<div class="wrap-login70 p-t-60 p-b-50">
				<span class="login100-form-title p-b-10 "  >
					Isi Form Pendaftaran <br>
					
				</span>
				<h4  class="koko">Sesuai Data Diri Anda</h4>
                <?php
                echo 
                form_open('Welcome/daftar_member/');
                
                ?>      
                  <div class="form-group">
                    <label  class="form-text text-muted" for="exampleInputEmail1">Nama Lengkap</label>
                    <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Lengkap"  required >
                  </div>
                   <div class="form-group">
                        <label class="form-text text-muted" for="exampleFormControlSelect1">Pilih Paket Pendaftaran</label>
                        <select class="form-control" id="exampleFormControlSelect1"   name="paket"  required >
                            <option >Silahkan pilih paket</option>
                            <option value="p1" >Paket 1 Rp500.000 belum termasuk alat dan pemasangan</option>
                            <option value="p2">Paket 2 Rp1000.000 sudah termasuk alat dan pemasangan</option>
                        </select>
                    </div>
                   <div class="form-group">
                    <label  class="form-text text-muted" for="exampleInputEmail1" >Nomor HP</label>
                    <input type="number"  name="nomor" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Nomor HP" required >
                  </div>

                  <div class="form-group">
                    <label class="form-text text-muted" for="exampleFormControlTextarea1" >Masukan alamat lengkap anda</label>
                    <textarea class="form-control" name="alamat" id="exampleFormControlTextarea1" placeholder="Masukan alamat sesuai dengan Kartu Keluarga" rows="3" required ></textarea>
                 </div>
                     
                        <div  style="text-align: center; margin-top:2rem">

            
                    <button   type="submit"class="col-md-4 btn btn-primary" name="submit" value="submit" >Daftar sekarang</button>
                        </div>
                      
            <?php 
            form_close();
             ?>

            <div class="row main">
                 
                <div class="main-login main-center">
                    
                </div>
            </div>
        </div>

			</div>
		</div>
	</div>
    

	<!-- Footer  -->
    <footer class="footer-social-icon text-center section_padding_70 clearfix ">
        <!-- logo  footer -->
        <div class="footer-text">
            <img style="width:80px; height:50px;" src="<?php echo base_url() ?>/assets/img/logo_gowater.png">
        </div>
        <!-- sosmed icon -->
        <div class="footer-social-icon">
            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            <a href="#"><i class="active fa fa-twitter" aria-hidden="true"></i></a>
            <a href="#"> <i class="fa fa-instagram" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
        </div>
        <div class="footer-menu" id="bawah">
            <nav>
                <ul>
                    <li><a href="">About</a></li>
                    <li><a href="#">Terms &amp; Conditions</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </nav>
		</div>
        <!-- Foooter -->
        <div class="copyright-text">
            <!--  -->
            <p>Copyright ©2018  Designed by Sasori</p>
        </div>
    </footer>
    
	<div id="dropDownSelect1"></div>
	


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