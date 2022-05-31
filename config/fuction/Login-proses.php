<?php
				if(isset($_POST['login'])){
					include "../../config/database/koneksi.php";
					$cek_data = mysqli_query($conn, "SELECT * FROM masuk WHERE
					email = '".$_POST['email']."' AND password = '".$_POST['password']."'");
					$data = mysqli_fetch_array($cek_data);
					$level = $data['level'];
					$nama = $data['Nama'];
          	//reCaptcha chek mas bro
					$captcha			= $_POST['g-recaptcha-response'];
					$secretKey		= "6LftWOIUAAAAAD50CQ-Kc64Dgx6q1D1qDzwBzhW5";
					$ip 					= $_SERVER['REMOTE_ADDR'];
					$response			= file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secretKey."&response=".$captcha."&remoteip=".$ip);
					$responseKeys	= json_decode($response,true);

					if(mysqli_num_rows($cek_data) > 0){
						session_start();
						$_SESSION['Nama'] = $nama;
						if($level == 'admin'){
              header('location:../../index/admin/Dashboard/index.php?pesan=sukses');
						}elseif($level == 'pelanggan'){
							header('location:../../index/user/Dashboard/index.php?pesan=sukses');
						}elseif($level == 'seller'){
							header('location:../../index/seller/Dashboard/index.php?pesan=sukses');
						}
						}else{
             header("location:login.php?pesan=gagal");
					}
				if(intval($responseKeys["success"]) !== 1) {
					header("location:login.php?pesan=gak");
					}

				}
	?>
