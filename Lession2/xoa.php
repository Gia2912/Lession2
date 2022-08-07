<?php
include 'config.php';

if(isset($_GET["id"])){
	$id = $_GET["id"];

$delete = "DELETE FROM user WHERE id = $id";
$qr_delete = mysqli_query($config, $delete);
header("location:home.php"); 
}
?>