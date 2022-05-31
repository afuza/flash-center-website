<?php
//reCaptcha
$captcha			= $_POST['g-recaptcha-response'];
$secretKey		= "6LezWeIUAAAAABL3jus7tuILfkzXgxWaFvKrBy58";
$ip 					= $_SERVER['REMOTE_ADDR'];
$response			= file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secretKey."&response=".$captcha."&remoteip=".$ip);
$responseKeys	= json_decode($response,true);

//daftar_user
              include "../database/koneksi.php";
              
                  $Nama=$_POST['nama'];
                  $Email=$_POST['email'];
                  $tgl = date('y-m-d');
                  //ambil data dari form
                  $Password = md5($_POST['password']);
                  $Telepon=$_POST['Telepon'];
                  $avatar = "27-09-2020-avatar.png";

$key = "UkSGUMmZtqVX8JLSVUUBG";
$url = "https://apps.emaillistverify.com/api/verifyEmail?secret=".$key."&email=".$Email;
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true );

$response2 = curl_exec($ch);
if($response2 == 'fail'){
  header('location:../../auth/u_singup/index.php?pesan=emailError');
}elseif($response2 == 'unknown'){
  header('location:../../auth/u_singup/index.php?pesan=emailError');
}elseif($response2 == 'email_disabled'){
  header('location:../../auth/u_singup/index.php?pesan=emailError');
}elseif($response2 == 'incorrect'){
  header('location:../../auth/u_singup/index.php?pesan=emailError');
}else{
                    //buat token
                  $token=hash('sha256', md5(date('Y-m-d'))) ;
                  //cek user terdaftar
                  $sql_cek2=mysqli_query($koneksi,"SELECT * FROM member WHERE email ='".$Email."'");
                  $r_cek2=mysqli_num_rows($sql_cek2);
                  if ($r_cek2>0) {
                  	header('location:https://hpanel.flashing.center/auth/u_singup/index.php?pesan=emel1');
                  }else{
                    //jika data kosong maka insert ke tabel;
                    //aktif = 0 user belum aktif
                    
                  $insert1 = mysqli_query($koneksi,"INSERT INTO alamat VALUES('".$Email."','".$Nama."','','','','','','".$Telepon."','".$tgl."','','".$avatar."')");
                  
                  if($insert1){
                      
                  $insert = mysqli_query($koneksi,"INSERT INTO member (nama,email,password,aktif,token,level)
                    VALUES('".$Nama."','".$Email."','".$Password."','0','".$token."','pelanggan')");
                    
                    //include kirim email
                    include("mail-daftar.php");
                    if ($insert) {
                        header("location:../../info/send_activation.php?pesan=$Email");
                    }
                  }
                }
              }
            
curl_close($ch);

  if(intval($responseKeys["success"]) !== 1) {
                header("location:../../auth/u_singup/index.php?pesan=gak");
          }

  ?>
