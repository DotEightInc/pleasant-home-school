<?php
session_start();
$con = mysqli_connect("localhost","root","","paradise school cms");

if(!isset($_SESSION['secured'])) {
	header("location: ./invalid");
} else {
	if(!isset($_GET['id'])) {
			header("location: ./invalid");
	} else {

		$data = $_GET['id'];
	}

	$cons = mysqli_query($con,"SELECT * from `staff` WHERE `qrid` = '$data'");
	while ($row = mysqli_fetch_array($cons)) {
		$z = $row['qrid'];
		$y = $row['active'];
		$m = $row['title']." ".$row['surname']." ".$row['firstname'];
		$u = "08169664313".' '."08116014616".' '.$row['tel1'];
		$l = date("h:i:sa");
	
	}

	

			/***contact SMS API***/
			
			/**Update DB***/

			if($y == 0) {

		$a = urlencode('Greatnessabolade@outlook.com'); //Note: urlencodemust be added forusernameand
		$b = urlencode('securemelikekilode'); // passwordas encryption code for security purpose.
		$c = "Hello, '".$m."' entered the school at '".$l."'";
		$d = "Paradise";
		$e = $u;
		$url = "https://portal.nigeriabulksms.com/api/?username=".$a."&password=".$b."&message=".$c."&sender=".$d."&mobiles=".$e;
		
		$ch = curl_init();
		curl_setopt($ch,CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_HEADER, 0);
		$resp = curl_exec($ch);
		
		$sl = "UPDATE staff set `Active` = '1' WHERE `qrid` = '$data'";
		$re = mysqli_query($con, $sl);

				// notification message
		echo '

			<!DOCTYPE html>
		<html>
		<head>
		  <meta charset="utf-8">
		  <meta http-equiv="X-UA-Compatible" content="IE=edge">
		  <title>Paradise Model School | Student Portal</title>
		  <!-- Tell the browser to be responsive to screen width -->
		  <meta name="viewport" content="width=device-width, initial-scale=1">
		  <meta name="description" content="Paradise Model School website">
		  <meta name="keywords" content="Paradise Model School, School">
		  <!-- Font Awesome -->
		  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
		  <link rel="icon" href="dist/img/favicon2.ico" type="image/ico" />
		  <!-- Ionicons -->
		  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
		  <!-- Theme style -->
		  <link rel="stylesheet" href="dist/css/adminlte.min.css">
		  <!-- Google Font: Source Sans Pro -->
		  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
		</head>
		<body class="hold-transition lockscreen">
		<!-- Automatic element centering -->
		<div class="lockscreen-wrapper">
		  <div class="lockscreen-logo">
		    <a href="https://paradisemodelschool.com.ng"><b>Paradise Model School</b></a>
		  </div>
		  <!-- User name -->
		  <div class="lockscreen-name">Staff now in School.</div>
		  <!-- START LOCK SCREEN ITEM -->
		  <div class="lockscreen-item">
		    <!-- lockscreen image -->
		   
		    <!-- /.lockscreen-image -->

		    <!-- lockscreen credentials (contains the form) -->

		  </div>
		  <!-- /.lockscreen-item -->
		  <div class="help-block text-center">

		  </div>
		  
		  <div class="lockscreen-footer text-center">
		    Copyright &copy; '.date("Y").' <b><a href="https://paradisemodelschool.com.ng" class="text-black">Paradise Model School</a></b><br>
		   Developed by <a target="_blank" href="https://www.google.com/search?q=doteightinc&oq=doteightinc&aqs=chrome..69i57j69i60j69i65j69i60l2.7521j0j7&sourceid=chrome&ie=UTF-8" class="text-black"> DotEightInc.</a>
		  </div>
		</div>
		<!-- /.center -->

		<!-- jQuery -->
		<script src="plugins/jquery/jquery.min.js"></script>
		<!-- Bootstrap 4 -->
		<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
		</body>
		</html>


		';
		$err = curl_error($ch);


		curl_close($ch);

		}else {


		$a = urlencode('Greatnessabolade@outlook.com'); //Note: urlencodemust be added forusernameand
		$b = urlencode('securemelikekilode'); // passwordas encryption code for security purpose.
		$c = "Hello, '".$m."' left the school at '".$l."'";
		$e = $u;
		$d = "Paradise";
		$url = "https://portal.nigeriabulksms.com/api/?username=".$a."&password=".$b."&message=".$c."&sender=".$d."&mobiles=".$e;
		$ch = curl_init();
		curl_setopt($ch,CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_HEADER, 0);
		$resp = curl_exec($ch);
		
		$l = "UPDATE staff set `Active` = '0' WHERE `qrid` = '$data'";
		$e = mysqli_query($con, $l);

		// notification message
		echo '

			<!DOCTYPE html>
		<html>
		<head>
		  <meta charset="utf-8">
		  <meta http-equiv="X-UA-Compatible" content="IE=edge">
		  <title>Paradise Model School | Student Portal</title>
		  <!-- Tell the browser to be responsive to screen width -->
		  <meta name="viewport" content="width=device-width, initial-scale=1">
		  <meta name="description" content="Paradise Model School website">
		  <meta name="keywords" content="Paradise Model School, School">
		  <!-- Font Awesome -->
		  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
		  <link rel="icon" href="dist/img/favicon2.ico" type="image/ico" />
		  <!-- Ionicons -->
		  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
		  <!-- Theme style -->
		  <link rel="stylesheet" href="dist/css/adminlte.min.css">
		  <!-- Google Font: Source Sans Pro -->
		  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
		</head>
		<body class="hold-transition lockscreen">
		<!-- Automatic element centering -->
		<div class="lockscreen-wrapper">
		  <div class="lockscreen-logo">
		    <a href="https://paradisemodelschool.com.ng"><b>Paradise Model School</b></a>
		  </div>
		  <!-- User name -->
		  <div class="lockscreen-name">Staff now out of school.</div>
		  <!-- START LOCK SCREEN ITEM -->
		  <div class="lockscreen-item">
		    <!-- lockscreen image -->
		   
		    <!-- /.lockscreen-image -->

		    <!-- lockscreen credentials (contains the form) -->

		  </div>
		  <!-- /.lockscreen-item -->
		  <div class="help-block text-center">

		  </div>
		  
		  <div class="lockscreen-footer text-center">
		    Copyright &copy; '.date("Y").' <b><a href="https://paradisemodelschool.com.ng" class="text-black">Paradise Model School</a></b><br>
		   Developed by <a target="_blank" href="https://www.google.com/search?q=doteightinc&oq=doteightinc&aqs=chrome..69i57j69i60j69i65j69i60l2.7521j0j7&sourceid=chrome&ie=UTF-8" class="text-black"> DotEightInc.</a>
		  </div>
		</div>
		<!-- /.center -->

		<!-- jQuery -->
		<script src="plugins/jquery/jquery.min.js"></script>
		<!-- Bootstrap 4 -->
		<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
		</body>
		</html>


		';

		$err = curl_error($ch);


		curl_close($ch);	
		}

			/***end update**/
	}		

?>