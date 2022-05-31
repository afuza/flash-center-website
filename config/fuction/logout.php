<?php
	session_start();

	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:https://hpanel.flashing.center");
	}

include '../database/koneksi.php';
$update = "UPDATE member SET status ='offline' WHERE email='$_SESSION[email]'";
mysqli_query($koneksi, $update);

session_unset();

session_destroy();

header("location:https://flashing.center/Landing/index.php?pesan=logout");
?>
