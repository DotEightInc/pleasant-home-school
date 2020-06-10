<?php
session_start();
if(!isset($_SESSION['ent'])) {
	header("location: ./opps");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Pleasant Home School</title>
	<meta charset="UTF-8">
	<meta name="description" content="Pleasant Home School">
	<meta name="keywords" content="photo, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/themify-icons.css"/>
	<link rel="stylesheet" href="css/accordion.css"/>
	<link rel="stylesheet" href="css/owl.carousel.min.css"/>
	<link rel="icon" href="img/1.jpeg" type="image/ico" />

	<!-- Main Stylesheets -->
	<link rel="stylesheet" href="css/style.css"/>


	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Offcanvas Menu Section -->
	<div class="menu-wrapper">
		<div class="menu-switch">
			<i class="ti-menu"></i>
		</div>
		<div class="menu-social-warp">
			<div class="menu-social">
				<a href="#"><i class="ti-facebook"></i></a>
				<a href="#"><i class="fa fa-youtube-play"></i></a>
				<a href="#"><i class="ti-linkedin"></i></a>
				<a href="#"><i class="ti-instagram"></i></a>
				<a target="_blank" href="https://wa.me/2348025340487"><i class="fa fa-whatsapp"></i></a>
			</div>
		</div>
	</div>
	<div class="side-menu-wrapper">
		<div class="sm-header">
			<div class="menu-close">
				<i class="ti-arrow-left"></i>
			</div>
			<a style="background-color: #0f0f0f; color: white" href="./" class="site-logo">
				<h4 style="color: white;">Pleasant Home School</h4>
			</a>
		</div>
		<nav class="main-menu">
			<ul>
				<li><a href="./" class="active">Home</a></li>
				<li><a href="./about">About us</a></li>
				<li><a href="./gallery">Gallery</a></li>
				<li><a href="./entrance">Admission</a></li>
				<li><a href="./dashboard">School Portal</a></li>
				<li><a href="./contact">Contact</a></li>
			</ul>
		</nav>
		<div class="sm-footer">
			<div class="sm-socail">
				<a href="#"><i class="ti-facebook"></i></a>
				<a href="#"><i class="fa fa-youtube-play"></i></a>
				<a href="#"><i class="ti-linkedin"></i></a>
				<a href="#"><i class="ti-instagram"></i></a>
				<a target="_blank" href="https://wa.me/2348025340487"><i class="fa fa-whatsapp"></i></a>
			</div>
			<div class="copyright-text"><p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy; Pleasant Home School <script>document.write(new Date().getFullYear());</script> All rights reserved | Developed by: <a style="color: red;" href="https://www.google.com/search?q=doteightinc&rlz=1C1RLNS_enNG901NG901&oq=doteightinc&aqs=chrome..69i57j69i61j69i65l2j69i61.3699j0j7&sourceid=chrome&ie=UTF-8" target="_blank">DotEightInc.</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p></div>
		</div>
	</div>
	<!-- Offcanvas Menu Section end -->

	<!-- Contact Section end -->
	<div class="contact-section">
		
		<div class="contact-box">
			<div class="row">
				<div class="col-lg-4">
					<div style="margin-bottom: 400px;" class="contact-info">
							<h4 style="text-align: center;"><span style="font-size: 70px;">✔</span></h4>
							<h4 style="text-align: center; color: red;">Your details have been saved sucessfully. <br/> Kindly check your email to get your Entrance ID</h4>
							<p>Do not refresh this page</p>
							</div>
					</div>
				</div>

			</div>
		</div>
	</div>
	<!-- Contact Section end -->

	<!--====== Javascripts & Jquery ======-->
	<script src="js/vendor/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/imagesloaded.pkgd.min.js"></script>
	<script src="js/isotope.pkgd.min.js"></script>
	<script src="js/jquery.nicescroll.min.js"></script>
	<script src="js/circle-progress.min.js"></script>
	<script src="js/pana-accordion.js"></script>
	<script src="js/main.js"></script>
		<script>
function goBack() {
    window.history.back()
}
</script>
	</body>
</html>
<?php
unset($_SESSION['ent']);
?>