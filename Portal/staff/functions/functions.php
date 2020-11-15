<?php
/*************helper functions***************/

function clean($string) {

	return htmlentities($string);
}

function redirect($location) {

	return header("Location: {$location}");
}

function set_message($message) {

	if(!empty($message)) {

		$_SESSION['message'] = $message;

		}else {

			$message = "";
		}
}



function display_message() {

	if(isset($_SESSION['message'])) {

		echo $_SESSION['message'];
		unset($_SESSION['message']);
	}
}

function validation_errors($error_message) {

$error_message = <<<DELIMITER

<div class="alert alert-danger alert-mg-b alert-success-style6 alert-st-bg3 alert-st-bg14">
    <button type="button" class="close sucess-op" data-dismiss="alert" aria-label="Close">
		<span class="icon-sc-cl" aria-hidden="true">&times;</span>
									</button>
                 <p><strong>$error_message </strong></p>
                            </div>
DELIMITER;

   return $error_message;     

}

/**********validate admission number*********/

function adm_exist($adm) {

	$sql = "SELECT * FROM `students` WHERE `AdminID` = '$adm'";
	$result = query($sql);

	if(row_count($result) == 1) {

		return false;

	}else {

		return true;
	} 
}

/**********validate applicant id*********/

function erl_exist($erl) {

	$sql = "SELECT * FROM `entrance` WHERE `appid` = '$erl'";
	$result = query($sql);

	if(row_count($result) == 1) {

		return false;

	}else {

		return true;
	} 
}



/************************validate user login functions**********/

function validate_user_login() {

	$errors = [];

	

	if(isset($_POST['submit'])) {

			$admission       = $_POST['staff'];


			if(!empty($errors)) {

				foreach ($errors as $error) {
			
	                echo validation_errors($error); 

				}

			} else {

				if(login_user($admission)) {
					session_start();
					$_SESSION['staff_id'] = $admission;
					header("location: ./index");

				} else {

					echo validation_errors("Invalid StaffID");
				}
			} 

		}

} //function


/************************ user login functions**********/

function login_user($admission) {

$sql = "SELECT * FROM `staff` WHERE `staffid` = '".escape($admission)."'";
$result = query($sql);
if(row_count($result) == 1) {
	$row = mysqli_fetch_array($result);

	$user_password = $row['staffid'];

	if($admission == $user_password) {

		$_SESSION['staff_id'] = $admission;

		return true;
	} else {
		return false;
	}

	return true;
} else {

	return false;
}

} //end of function 



/*******validate_frn*****/



function validate_frn() {
	$error = [];

	if($_SERVER['REQUEST_METHOD'] == "POST") {

		$adm    			= clean($_POST['admin']);
		$klas   			= clean($_POST['class']);


			if(adm_exist($adm)) {

			$errors[] = "Admission No. Does Not Exit!";
		}
       
			$target_dir = "upload/results/";
			$target_file =  basename($_FILES["fileToUpload"]["name"]);
			$targetFilePath = $target_dir . $target_file;
			$uploadOk = 1;
			$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
			// Check if image file is a actual image or fake image
			if(isset($_POST["submit"]) && !empty($_FILES["fileToUpload"]["name"])){
			   
			// Check if file already exists
			if (file_exists($targetFilePath)) {
			    $errors[] = "Sorry, image already exists. Try renaming your file and try again!";
			    $uploadOk = 0;
			}

			// Allow certain file formats
			if($imageFileType != "pdf") {
			    $errors[] = "Sorry, only PDF files types are allowed.";
			    $uploadOk = 0;
			}
			// Check if $uploadOk is set to 0 by an error
			if ($uploadOk == 0) {
			   
			// if everything is ok, try to upload file
			} else {
			    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFilePath)) {

			if(frn_upload($adm, $klas, $target_file)) {

				redirect("");

							} else {
								
				$errors[] = "Result Uploaded Successfully!";
							}

		}
	}
}
}
if(!empty($errors)) {

			foreach ($errors as $error) {
		
                echo validation_errors($error); 

			}

	} // post request
} // function


//******frn upload******/
function frn_upload($adm, $klas, $target_file) {

	$sname 				= escape($adm);
	$fname 				= escape($klas);	

$sql = "INSERT INTO firstterm(`result`, `admno`, `class`)";
$sql.= " VALUES('$target_file', '$sname', '$fname')";
$result = query($sql);
confirm($result);
}




/*******validate_snd*****/




function validate_snd() {
	$error = [];

	if($_SERVER['REQUEST_METHOD'] == "POST") {

		$adm    			= clean($_POST['admin']);
		$klas   			= clean($_POST['class']);


			if(adm_exist($adm)) {

			$errors[] = "Admission No. Does Not Exit!";
		}
       
			$target_dir = "upload/results/";
			$target_file =  basename($_FILES["fileToUpload"]["name"]);
			$targetFilePath = $target_dir . $target_file;
			$uploadOk = 1;
			$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
			// Check if image file is a actual image or fake image
			if(isset($_POST["submit"]) && !empty($_FILES["fileToUpload"]["name"])){
			   
			// Check if file already exists
			if (file_exists($targetFilePath)) {
			    $errors[] = "Sorry, image already exists. Try renaming your file and try again!";
			    $uploadOk = 0;
			}

			// Allow certain file formats
			if($imageFileType != "pdf") {
			    $errors[] = "Sorry, only PDF files types are allowed.";
			    $uploadOk = 0;
			}
			// Check if $uploadOk is set to 0 by an error
			if ($uploadOk == 0) {
			   
			// if everything is ok, try to upload file
			} else {
			    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFilePath)) {

			if(snd_upload($adm, $klas, $target_file)) {

				redirect("");

							} else {
								
				$errors[] = "Result Uploaded Successfully!";
							}

		}
	}
}
}
if(!empty($errors)) {

			foreach ($errors as $error) {
		
                echo validation_errors($error); 

			}

	} // post request
} // function

//******snd upload******/
function snd_upload($adm, $klas, $target_file) {

	$sname 				= escape($adm);
	$fname 				= escape($klas);	

$sql = "INSERT INTO sndterm(`result`, `admno`, `class`)";
$sql.= " VALUES('$target_file', '$sname', '$fname')";
$result = query($sql);
confirm($result);
}




/*******validate_trd*****/



function validate_trd() {
	$error = [];

	if($_SERVER['REQUEST_METHOD'] == "POST") {

		$adm    			= clean($_POST['admin']);
		$klas   			= clean($_POST['load']);
		$stat    			= clean($_POST['class']);


			if(adm_exist($adm)) {

			$errors[] = "Admission No. Does Not Exit!";
		}
       
			$target_dir = "upload/results/";
			$target_file =  basename($_FILES["fileToUpload"]["name"]);
			$targetFilePath = $target_dir . $target_file;
			$uploadOk = 1;
			$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
			// Check if image file is a actual image or fake image
			if(isset($_POST["submit"]) && !empty($_FILES["fileToUpload"]["name"])){
			   
			// Check if file already exists
			if (file_exists($targetFilePath)) {
			    $errors[] = "Sorry, image already exists. Try renaming your file and try again!";
			    $uploadOk = 0;
			}

			// Allow certain file formats
			if($imageFileType != "pdf") {
			    $errors[] = "Sorry, only PDF files types are allowed.";
			    $uploadOk = 0;
			}
			// Check if $uploadOk is set to 0 by an error
			if ($uploadOk == 0) {
			   
			// if everything is ok, try to upload file
			} else {
			    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFilePath)) {

			if(trd_upload($adm, $klas, $stat, $target_file)) {

				redirect("");

							} else {
								
				$errors[] = "Result Uploaded Successfully!";
							}

		}
	}
}
}
if(!empty($errors)) {

			foreach ($errors as $error) {
		
                echo validation_errors($error); 

			}

	} // post request
} // function

//******trd upload******/
function trd_upload($adm, $klas, $stat, $target_file) {

	$sname 				= escape($adm);
	$fname 				= escape($klas);
	$name 				= escape($stat);	

$sql = "INSERT INTO thrdterm(`result`, `admno`, `class`)";
$sql.= " VALUES('$target_file', '$sname', '$fname')";
$result = query($sql);
confirm($result);

$sll = "UPDATE students set `Class` = '$name' WHERE `AdminID` = '$sname'";
$res = query($sll);
}




/*******validate_enr*****/



function validate_enr() {
	$error = [];

	if($_SERVER['REQUEST_METHOD'] == "POST") {

		$erl    			= clean($_POST['admin']);
		$mth    			= clean($_POST['math']);
		$eng    			= clean($_POST['eng']);
		$qr     			= clean($_POST['qr']);
		$vr     			= clean($_POST['vr']);
		$gn     			= clean($_POST['gn']);
		$tl     			= clean($_POST['tl']);


	if(erl_exist($erl)) {

			$errors[] = "Applicant ID Does Not Exit!";
		}


			if(!empty($errors)) {

				foreach ($errors as $error) {
			
	                echo validation_errors($error); 

				}

			} else {

				if(lenr_upload($erl, $mth, $eng, $qr, $vr, $gn, $tl)) {
					redirect("");

				} else {

					$errors[] = "Result Uploaded Successfully!";
				}
			} 

		}

} //function
//******enr upload******/
function enr_upload($erl, $mth, $eng, $qr, $vr, $gn, $tl) {

	$sname 				= escape($erl);
	$fname 				= escape($mth);
	$name 				= escape($eng);	
	$ame 				= escape($qr);
	$fame 				= escape($vr);
	$nae 				= escape($gn);
	$me 				= escape($tl);	

$sql = "INSERT INTO enrslt(`appid`, `math`, `english`, `qr`, `vr`, `general`, `total`)";
$sql.= " VALUES('$sname', '$fname', '$name', '$ame', '$fame', '$nae', '$me')";
$result = query($sql);
confirm($result);
}


/************************validate user log functions**********/

function validate_user_log() {

	$errors = [];

	

	if(isset($_POST['submit'])) {

			$password   	 = md5($_POST['password']);
			$idd  	 		 = $_POST['iddler'];

			if(!empty($errors)) {

				foreach ($errors as $error) {
			
	                echo validation_errors($error); 

				}

			} else {

				if(log_user($password)) {
					session_start();
					$_SESSION['secured'] = $password;
					header("location: ./seen?id=$idd");

				} else {

					echo validation_errors("Wrong Password");
				}
			} 

		}

} //function


/************************ user login functions**********/

function log_user($password) {

$sql = "SELECT `identifier` FROM `security`";
$result = query($sql);
if(row_count($result) == 1) {
	$row = mysqli_fetch_array($result);

	$user_password = $row['identifier'];

	if($password == $user_password) {

		$_SESSION['secured'] = $password;

		return true;
	} else {
		return false;
	}

	return true;
} else {

	return false;
}

} //end of function 
?> 