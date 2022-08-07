<?php

include 'config.php';

$check = isset($_POST['submit']);
if($check && $_POST["name"] != '' && $_POST["email"] != '' && $_POST["password"] != '' && $_POST["repassword"] != '') { 
	$username = $_POST["name"];
	$email = $_POST["email"]; 
	$password = $_POST["password"];
	$repassword = $_POST["repassword"];
	$level = 0;
	if($password != $repassword)
	{
		header("location:Register.php");
	}else {

		$sq = "SELECT email FROM user WHERE email = '$email' ";
		$check = mysqli_query($config, $sq);
			if (mysqli_num_rows($check) > 0){
			header("location:Register.php");
			} 

	$sql = "INSERT INTO user(username, email, password, level) VALUES ('$username','$email','$password','$level') ";
	mysqli_query($config,$sql);
	header("location:login.php");
		}
} else {
	header("location:Register.php");
}	

?>