<?php
$date = date("Y");
$y = $date + 1;
$x = $date."/".$y;
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

	<!-- Blog Section end -->
	<section class="blog-details">
		<div class="container">
			<div class="single-blog-page">
				<h2>Admission Into <?php echo $x ?> Academic Session</h2>
				<div class="comment-form">
					<form action="entrancesubmit.php" method="post">
						<div class="row">
							<div class="col-lg-12">
						<div class="contact-info">
													
							<h4 style="text-align: center; color: red;">BIO DATA.:</h4>
							</div>
						
					</div>
						<div class="col-lg-4">
						<div class="contact-info">
							<label for="y-name">Surname<sup style="color: red;">*</sup></label>
							<input type="text" id="y-name" name="sur" required>
						</div>
						
					</div>
					<div class="col-lg-4">
						<div class="contact-info">
							<label for="y-name"> Name<sup style="color: red;">*</sup></label>
							<input type="text" id="y-name" name="name" required>
						</div>
						
					</div>
					<div class="col-lg-4">
						<div class="contact-info">
							<label for="y-name">Other Name<sup style="color: red;">*</sup></label>
							<input type="text" id="y-name" name="oth" required>
						</div>
						
					</div>
					<div class="col-lg-6">
						<div class="contact-info">
							<label for="y-name">Date of Birth<sup style="color: red;">*</sup></label>
							<input type="date" id="y-name" name="dob" required>
						</div>
						
					</div>
					<div class="col-lg-6">
						<div class="contact-info">
							<label for="y-name">Gender<sup style="color: red;">*</sup></label>
						<select name="gender" class="form-control">
                          <option name="gender">Male</option>
                          <option name="gender">Female</option>
                         
                        </select>
						</div>
						
					</div>
					<div class="col-lg-12">
						<div class="contact-info">
							<?php 
							$x = date("Y");
							$y = $x + 1;
							$t = $x."/".$y
							?>
							<p style="text-align: center">Does your child have any disability? If any specify below;</p><br/>
							<textarea style="text-align: center;" id="y-msg" name="dis" required></textarea>
							</div>
						
					</div>
					<div class="col-lg-12">
						<div class="contact-info">
													
							<h4 style="text-align: center; color: red;">CONTACT DATA.:</h4>
							</div>
						
					</div>
					<div class="col-lg-6">
						<div class="contact-info">
							<label for="y-name">Name of Parents/Guardian<sup style="color: red;">*</sup></label>
						<input type="text" id="y-name" name="parent" required>
						</div>
						
					</div>
					<div class="col-lg-6">
						<div class="contact-info">
							<label for="y-name">Parents/Guardian Relationship<sup style="color: red;">*</sup></label>
						<select name="rel" class="form-control">
                          <option name="rel">Parent</option>
                          <option name="rel">Guardian</option>
                         
                        </select>
						</div>
						
					</div>
					<div class="col-lg-6">
						<div class="contact-info">
							<label for="y-name">Parents/Guardian Occupation<sup style="color: red;">*</sup></label>
						<input type="text" id="y-name" name="occ" required>
						</div>
						
					</div>
					<div class="col-lg-6">
						<div class="contact-info">
							<label for="y-name">Parents/Guardian Residential Address<sup style="color: red;">*</sup></label>
						<input type="text" id="y-name" name="resadd" required>
						</div>
						
					</div>
					<div class="col-lg-6">
						<div class="contact-info">
							<label for="y-name">Parents/Guardian Telephone Number 1<sup style="color: red;">*</sup></label>
						<input type="text" id="y-name" name="tel1" required>
						</div>
						
					</div>
					<div class="col-lg-6">
						<div class="contact-info">
							<label for="y-name">Parents/Guardian Telephone Number 2</label>
						<input type="text" id="y-name" name="tel2">
						</div>
						
					</div>
					<div class="col-lg-6">
						<div class="contact-info">
							<label for="y-name">Parents/Guardian office Address 1<sup style="color: red;">*</sup></label>
						<input type="text" id="y-name" name="add1" required>
						</div>
						
					</div>
					<div class="col-lg-6">
						<div class="contact-info">
							<label for="y-name">Parents/Guardian office Address 2</label>
						<input type="text" id="y-name" name="add2">
						</div>
						
					</div>
					<div class="col-lg-12">
						<div style="text-align: center;" class="contact-info">
							<label for="y-name">Parents/Guardian Email Address<sup style="color: red;">*</sup></label>
						<input class="text-center" type="email" id="y-name" name="email" required>
							</div>
						
					</div>
					<div class="col-lg-12">
						<div class="contact-info">
							
							<h4 style="text-align: center; color: red;">Educational Details.:</h4>
							</div>
						
					</div>
					<div class="col-lg-6">
						<div class="contact-info">
							<label for="y-name">School last Attended<sup style="color: red;">*</sup></label>
						<input type="text" id="y-name" name="schlst" required>
						</div>
						
					</div>
					<div class="col-lg-6">
						<div class="contact-info">
							<label for="y-name">Class Completed<sup style="color: red;">*</sup></label>
						<input type="text" id="y-name" name="clscomp" required>
						</div>
						
					</div>
							<div class="col-lg-12">
						<div style="text-align: center;" class="contact-info">
							<button style="background-color: black; color: white;" type="submit" class="site-btn">Submit Details</button>
							</div>
						
					</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
	<!-- Blog Section end -->

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

	</body>
</html>
