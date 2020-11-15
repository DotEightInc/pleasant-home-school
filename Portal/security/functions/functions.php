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

function token_generator() {

	$token = $_SESSION['token'] = md5(uniqid(mt_rand(), true));

	return $token; 
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

/************************validate user login functions**********/

function validate_user_login() {

	$errors = [];

	

	if(isset($_POST['submit'])) {

			$password   	 = md5($_POST['password']);


			if(!empty($errors)) {

				foreach ($errors as $error) {
			
	                echo validation_errors($error); 

				}

			} else {

				if(login_user($password)) {
					session_start();
					$_SESSION['secured'] = $password;
					header("location: ./index");

				} else {

					echo validation_errors("Wrong Password");
				}
			} 

		}

} //function


/************************ user login functions**********/

function login_user($password) {

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

/*****validate delete stud****/
function validate_delstud() {

	$errors = [];

	$min = 3;
	$max = 20;

	if(isset($_POST['submit'])) {

		$adm     		 = clean($_POST['name']);

		if(adm_exist($adm)) {

			$errors[] = "Admission No. Does Not Exit!";
		}

	if(!empty($errors)) {

			foreach ($errors as $error) {
		
                echo validation_errors($error); 

			}

		} else {

			if(delstud($adm)) {

				redirect("./delstud");

							} else {

						redirect("./deleted");	
				
							}

		}


	} // post request

} // function

/*************register users***************/

function delstud($adm) {

	$adm 	  			= escape($adm);
	$clradm 		 = str_replace('/', '', $adm);
	$clradmqr 		 = "upload/QRCard/$clradm.png";
	$clradmltr       = "upload/admissionletter/$clradm.pdf";
	$clradmidcd 	 = "upload/IdCard/$clradm.php";

	unlink($clradmqr);
	unlink($clradmidcd);
	unlink($clradmltr);

	$conn = mysqli_connect("localhost","root","","paradise school cms");

	$cons = mysqli_query($conn,"SELECT * from students WHERE `AdminID`= '$adm'");
	while ($row = mysqli_fetch_array($cons)) {
	$x = $row['Passport'];	
	}

	unlink("upload/studentDP/$x");

	$sql = "DELETE  FROM `students` WHERE `AdminID`= '$adm'";
	$result = query($sql);
	confirm($result);	
}

/*******validate_enroll*****/
function validate_enroll() {
	$error = [];

	if($_SERVER['REQUEST_METHOD'] == "POST") {

		$surname 			= clean($_POST['surname']);
		$firstname 			= clean($_POST['firstname']);
		$lastname 			= clean($_POST['lastname']);
		$date 				= $_POST['date'];
		$month 				= $_POST['month'];
		$year 				= $_POST['year'];
		$gender 			= clean($_POST['gender']);
		$schlst 			= clean($_POST['schlst']);
		$class 				= clean($_POST['class']);
		$dept 				= clean($_POST['dept']);
		$parent 			= clean($_POST['parent']);
		$relation 			= clean($_POST['relation']);
		$occupation 		= clean($_POST['occupation']);
		$add 				= clean($_POST['add']);
		$dnum 				= clean($_POST['dnum']);
		$mnum 				= clean($_POST['mnum']);
		$pword 				= clean($_POST['pword']);
		$rpword 			= clean($_POST['rpword']);
		$schf 				= clean($_POST['schf']);
		$acf    			= clean($_POST['acf']);
       
			$target_dir = "upload/studentDP/";
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
			if($imageFileType != "jpg" && $imageFileType != "jpeg") {
			    $errors[] = "Sorry, only JPG and JPEG files types are allowed.";
			    $uploadOk = 0;
			}
			// Check if $uploadOk is set to 0 by an error
			if ($uploadOk == 0) {
			   
			// if everything is ok, try to upload file
			} else {
			    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFilePath)) {

			if(enrol($surname, $firstname, $lastname, $date, $month, $year, $gender, $schlst, $class, $dept, $parent, $relation, $occupation, $add, $dnum, $mnum, $pword, $rpword, $target_file, $schf, $acf)) {

				redirect("");

							} else {
								
				redirect("./register");
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
//******enroll
function enrol($surname, $firstname, $lastname, $date, $month, $year, $gender, $schlst, $class, $dept, $parent, $relation, $occupation, $add, $dnum, $mnum, $pword, $rpword, $target_file, $schf, $acf) {

	$sname 				= escape($surname);
	$fname 				= escape($firstname);
	$lname 				= escape($lastname);
	$day 				= $date;
	$mont 				= $month;
	$yea 				= $year;
	$gend 	 			= escape($gender);
	$schl 				= escape($schlst);
	$cls 				= escape($class);
	$dep 				= escape($dept);
	$paren 				= escape($parent);
	$rel 				= escape($relation);
	$occ 				= escape($occupation); 				
	$ad 				= escape($add);
	$dnu 				= escape($dnum);
	$mnu 				= escape($mnum);
	$pwor 				= escape($pword);
	$rpwor 				= escape($rpword);
	$sh 				= escape($schf);
	$ac 				= escape($acf);

	$datereg = date("Y-m-d h:i:sa");

	$date = date("Y");

	$conn = mysqli_connect("localhost","root","","paradise school cms");

	$cons = mysqli_query($conn,"SELECT * from students");
	while ($row = mysqli_fetch_array($cons)) {
	$x = $row['Admission No.'];
		
	}

	$d = "$x" + 1;

	$sch = "PMS";
	$cat = "STUD";
	$year = date("Y");
	$admcode = "$sch/$cat/$year/";
	$code = $admcode.$d;
	

$sql = "INSERT INTO students(`Admincode`, `AdminID`, `Admission No.`, `sn`, `SurName`, `Middle Name`, `Last Name`, `cbk`, `suF`, `Date`, `Month`, `Year`, `Gender`, `schlst`, `parent`, `relation`, `occupation`, `Telephone1`, `Address 1`, `Telephone2`, `Datereg`, `Class`, `Department`, `Active`, `Passport`, `SchF`, `AcF`)";
$sql.= " VALUES('$admcode', '$code', '$d', '1', '$sname', '$fname', '$lname', '$rpwor', '$pwor', '$day', '$mont', '$yea', '$gend', '$schl', '$paren', '$rel', '$occ', '$dnu', '$ad', '$mnu', '$datereg', '$cls', '$dep', '0', '$target_file', '$sh', '$ac')";
$result = query($sql);
$last_id = insert();
session_start();
$_SESSION["id"] = $last_id;
confirm($result);
}

/********validate appoint*****/
function validate_appoint() {
	$error = [];

	if($_SERVER['REQUEST_METHOD'] == "POST") {

		$title 				= clean($_POST['title']);
		$surname 			= clean($_POST['surname']);
		$firstname 			= clean($_POST['firstname']);
		$lastname 			= clean($_POST['lastname']);
		$date 				= $_POST['date'];
		$month 				= $_POST['month'];
		$year 				= $_POST['year'];
		$gender 			= clean($_POST['gender']);
		$schlst 			= clean($_POST['schlst']);
		$class 				= clean($_POST['class']);
		$dept 				= clean($_POST['dept']);
		$parent 			= clean($_POST['parent']);
		$relation 			= clean($_POST['relation']);
		$occupation 		= clean($_POST['occupation']);
		$add 				= clean($_POST['add']);
		$addd 				= clean($_POST['add2']);
		$dnum 				= clean($_POST['dnum']);
		$mnum 				= clean($_POST['mnum']);
       
			$target_dir = "upload/staffDP/";
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
			if($imageFileType != "jpg" && $imageFileType != "jpeg") {
			    $errors[] = "Sorry, only JPG and JPEG files types are allowed.";
			    $uploadOk = 0;
			}
			// Check if $uploadOk is set to 0 by an error
			if ($uploadOk == 0) {
			   
			// if everything is ok, try to upload file
			} else {
			    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFilePath)) {

			if(appoint($title, $surname, $firstname, $lastname, $date, $month, $year, $gender, $schlst, $class, $dept, $parent, $relation, $occupation, $add, $addd, $dnum, $mnum, $target_file)) {

				redirect("");

							} else {
								
				redirect("./appointed");
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
//******enroll
function appoint($title, $surname, $firstname, $lastname, $date, $month, $year, $gender, $schlst, $class, $dept, $parent, $relation, $occupation, $add, $addd, $dnum, $mnum, $target_file) {

	$titl 				= escape($title);
	$sname 				= escape($surname);
	$fname 				= escape($firstname);
	$lname 				= escape($lastname);
	$day 				= $date;
	$mont 				= $month;
	$yea 				= $year;
	$gend 	 			= escape($gender);
	$schl 				= escape($schlst);
	$cls 				= escape($class);
	$dep 				= escape($dept);
	$paren 				= escape($parent);
	$rel 				= escape($relation);
	$occ 				= escape($occupation); 				
	$ad 				= escape($add);
	$add 				= escape($addd);
	$dnu 				= escape($dnum);
	$mnu 				= escape($mnum);

	$datereg = date("Y-m-d h:i:sa");

	$date = date("Y");

	$conn = mysqli_connect("localhost","root","","paradise school cms");

	$cons = mysqli_query($conn,"SELECT * from staff");
	while ($row = mysqli_fetch_array($cons)) {
	$x = $row['staffno'];
		
	}

	$d = "$x" + 1;

	$sch = "PMS";
	$cat = "STAFF";
	$year = date("Y");
	$admcode = "$sch/$cat/$year/";
	$code = $admcode.$d;
	

$sql = "INSERT INTO `staff` (`sn`, `staffcode`, `staffno`, `staffid`, `title`, `surname`, `firstname`, `othername`, `date`, `month`, `year`, `gender`, `tertiary`, `qual`, `marital`, `nok`, `relation`, `nokocc`, `radd`, `nokradd`, `tel1`, `tel2`, `passport`, `active`)"; 
$sql.= "VALUES ('1', '$admcode', '$d', '$code', '$titl', '$sname', '$fname', '$lname', '$day', '$mont', '$yea', '$gend', '$schl', '$cls', '$dep', '$paren', '$rel', '$occ', '$ad', '$add', '$dnu', '$mnu', '$target_file', '0')";
$result = query($sql);
$staff_id = insert();
session_start();
$_SESSION["staffid"] = $staff_id;
confirm($result);
}

/*****validate delete staff****/
function validate_delstaff() {

	$errors = [];

	$min = 3;
	$max = 20;

	if(isset($_POST['submit'])) {

		$admr     		 = clean($_POST['adm']);

		if(staff_exist($admr)) {

			$errors[] = "StaffID Does Not Exit!";
		}

	if(!empty($errors)) {

			foreach ($errors as $error) {
		
                echo validation_errors($error); 

			}

		} else {

			if(delstaff($admr)) {

				redirect("./delstaff");

							} else {

						redirect("./deleteds");	
				
							}

		}


	} // post request

} // function

/*************register users***************/

function delstaff($admr) {

	$adm 	  		 = escape($admr);
	$clradm 		 = str_replace('/', '', $admr);
	$clradmqr 		 = "upload/QRCard/$clradm.png";
	$clradmltr       = "upload/employ/$clradm.pdf";
	$clradmidcd 	 = "upload/StaffId/$clradm.php";

	unlink($clradmqr);
	unlink($clradmidcd);
	unlink($clradmltr);

	$conn = mysqli_connect("localhost","root","","paradise school cms");

	$cons = mysqli_query($conn,"SELECT * from staff WHERE `staffid`= '$admr'");
	while ($row = mysqli_fetch_array($cons)) {
	$x = $row['passport'];	
	}

	unlink("upload/staffDP/$x");

	$sql = "DELETE  FROM `staff` WHERE `staffid`= '$admr'";
	$result = query($sql);
	confirm($result);	
}

?> 