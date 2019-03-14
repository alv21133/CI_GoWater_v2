<!DOCTYPE html>
<html lang="id">
<?php error_reporting(0) ?>

<head>
	<title>GO Water</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="<?php echo base_url() ?>/assets/img/core-img/logo_gowater.jpg">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/main.css">
	<link href="<?php echo base_url() ?>/assets/style.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>/assets/css/responsive.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>/assets/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css1/themify-icons.css">
</head>

<body>
	<header class="header_area animated ">
		<div class="container-fluid ">
			<div class="row align-items-center">
				<!-- Menu Area Start -->
				<div class="col-12 col-lg-10">
					<div class="menu_area">
						<nav class="navbar navbar-expand-lg navbar-light">
							<!-- Logo -->
							<a href="<?php echo base_url() ?>"><img style="width:75px; height:50px;" src="<?php echo base_url() ?>/assets/img/logo_gowater.png"></img></a>
							<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ca-navbar" aria-controls="ca-navbar"
							 aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
							<!-- Menu Area -->
							<div class="collapse navbar-collapse" id="ca-navbar">
								<ul class="navbar-nav ml-auto" id="nav">


								</ul>

							</div>
						</nav>
					</div>
				</div>

			</div>
	</header>
	<!-- ***** Header Area End ***** -->
	<div class="limiter ">
		<div class="container-login100" style="background-image: url('<?php echo base_url() ?>/assets/img/bg-img/welcome-bg.png');">
			<div class="wrap-login70 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41 ">
					LOGIN ADMIN

					<br>
					<div>
						<input hidden type="text" id="key1" value="<?php echo $_SESSION['key_'];?>">
						<input hidden type="text" id="key2" value="<?php echo $_SESSION['key5'];?>">
						<input hidden type="text" id="key3" value="<?php echo $_SESSION['pas_false'];?>">
					</div>
				</span>
				<h4 class="koko text-white font-weight-bold">Gunakan username & password Anda </h4>
				<div class="login100-form validate-form p-b-33 p-t-5">
					<?php  
                    echo form_open('l_admin/admin'); 
                    ?>
					<div class="wrap-input100 validate-input" data-validate="Masukan username Anda">
						<input class="input100 " type="text" name="username" placeholder="Username">
						<span class="focus-input100">
							<div class="ti-user mt-5 ml-3"></div>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Masukan  password Anda">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100">
							<div class="ti-lock mt-5 ml-3"></div>
						</span>
					</div>

					<div class="container-login100-form-btn m-t-32">
						<button class="login100-form-btn" type="submit" onclick="al();" name="submit" value="submit">
							Login
						</button>
					</div>
					<?php 
                    form_close();
                    ?>
				</div>
			</div>
		</div>
	</div>
	<footer class="footer-social-icon text-center section_padding_70 clearfix ">
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
		<!-- Foooter Text-->
		<div class="copyright-text">
			<!-- ***** Removing this text is now allowed! This template is licensed under CC BY 3.0 ***** -->
			<p>Copyright ©2018 Designed by Sasori</p>
		</div>
	</footer>

	<div id="dropDownSelect1"></div>
	<script src="<?php echo base_url() ?>/assets/js/sweet_min.js"></script>
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

	<script>
		$(document).ready(function () {
			var y = document.getElementById("key1").value;
			var z = document.getElementById("key3").value;
			if (y == 'ljfsdfjl' || z == 'ljfsdfjlskdfjh') {

				swal("Username dan Password salah");
				console.log(y);
				//console.log(z);

			}
		})

	</script>
</body>

</html>
