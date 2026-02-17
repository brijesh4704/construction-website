<?php
include '../config/config.php';
//Contact us code
if(isset($_REQUEST['contact'])=='contact') {
	$fname = $_REQUEST['fname'];
	$email = $_REQUEST['email'];
	$contact_num = $_REQUEST['contact_num'];
	$message = $_REQUEST['message'];

	if(empty($fname)) {
			$_SESSION['error'] = "Please fill the blank field";
			header("location:".$sitURl."/contact-us.php");

	}else {

		$sql = mysqli_query($conn, "SELECT * FROM tbl_contact_info WHERE email='$email'");

		if(mysqli_num_rows($sql)>0) {
			
				$_SESSION['error'] = "Your query allredy exists!";
				header("location:".$siteURl."/contact-us.php");
		}else{

				$sql = mysqli_query($conn, "INSERT INTO tbl_contact_info(fname, email, contact, message) VALUES('$fname', '$email', '$contact_num', '$message')");
				
				$_SESSION['success'] = "Your query has been submitted successfully!";
				header("location:".$siteURl."/contact-us.php");
			}
	}
}
