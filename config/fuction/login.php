<?php
ini_set('display_errors', 1);
//reCaptcha chek mas bro
$captcha			= $_POST['g-recaptcha-response'];
$secretKey		= "6LezWeIUAAAAABL3jus7tuILfkzXgxWaFvKrBy58";
$ip 					= $_SERVER['REMOTE_ADDR'];
$response			= file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secretKey."&response=".$captcha."&remoteip=".$ip);
$responseKeys	= json_decode($response,true);

// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include '../database/koneksi.php';

// menangkap data yang dikirim dari form login
$email = $_POST['email'];
$password = md5($_POST['password']);

// menyeleksi data user dengan username dan password yang sesuai
$sql_cek2=mysqli_query($koneksi,"SELECT * FROM member WHERE email='$email' and aktif='2'");
$r_cek2=mysqli_num_rows($sql_cek2);
if ($r_cek2>0) {
 	header('location:../../auth/login/index.php?pesan=benned');
}else{  
// menyeleksi data user dengan username dan password yang sesuai
$sql_cek2=mysqli_query($koneksi,"SELECT * FROM member WHERE email='$email' and aktif='0'");
$r_cek2=mysqli_num_rows($sql_cek2);
if ($r_cek2>0) {
	header('location:../../auth/login/index.php?pesan=aktif');
}else{
$update = "UPDATE member SET 	status ='online' WHERE email='$email' and password='$password'";
mysqli_query($koneksi, $update);
$login = mysqli_query($koneksi,"select * from member where email='$email' and password='$password'");
$cek = mysqli_num_rows($login);
// cek apakah username dan password di temukan pada databaseemail
if($cek == 1){

	$data = mysqli_fetch_assoc($login);

 if($data['level']=="admin"){
		// buat session login dan username
	  $_SESSION['email'] = $email;
		$_SESSION['level'] = "admin";
	
		$_SESSION['nama'] = $data['nama'];

			// alihkan ke halaman dashboard pegawai
		header("location:../../index/admin/Dashboard/index.php?pesan=masuk");

	// cek jika user login sebagai pengurus
	}else if($data['level']=="pelanggan"){
		// buat session login dan username
		$_SESSION['email'] = $email;
		$_SESSION['level'] = "pelanggan";
	
		$_SESSION['nama'] = $data['nama'];

		// alihkan ke halaman dashboard pengurus
	header("location:../../index/user/Dashboard/index.php?pesan=masuk");

	}else{

		// alihkan ke halaman login kembali
		header("location:../../auth/login/index.php?pesan=gagal");
	}
}
else{
header("location:../../auth/login/index.php?pesan=gagal");
}
				if(intval($responseKeys["success"]) !== 1) {
					header("location:../../auth/login/index.php?pesan=recaptcha");
					}
}
}


	?>
