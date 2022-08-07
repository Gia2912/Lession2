<?php
include 'config.php';
session_start();
	if(isset($_POST['submit']) && $_POST["email"] != '' && $_POST["password"] != '')
	{
		$email = $_POST["email"];
		$password = $_POST["password"];

		$sql = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";
		$query = mysqli_query($config, $sql);
		$data = mysqli_fetch_assoc($query);
		if (mysqli_num_rows($query) > 0 ) {
			$_SESSION['user'] = $data;
			$_SESSION['email'] = $email;
			header("location:home.php");
		}else{
			header("location:login.php");
		}
	}else{
		header("location:login.php");
	}
?>