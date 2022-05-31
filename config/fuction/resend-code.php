<?php

include "../database/koneksi.php";

    $nope1 = $_POST['nope'];
    $invo = $_POST['invo'];
    
    $nope='+'.$nope1.'';



$rand = rand(1, 9);
$rand1 = rand(1, 9);
$rand2 = rand(1, 9);
$rand3 = rand(1, 9);

$qust = ("$rand$rand1$rand2$rand3");

$sql_cek2=mysqli_query($koneksi,"SELECT * FROM req WHERE id_req ='".$invo."' and confrim ='1'");
                  $r_cek2=mysqli_num_rows($sql_cek2);
                  if ($r_cek2>0) {
  header('location:../../index/user/chating/index.php?info=sukses');
}else{
                  
 $req_valid = "UPDATE req SET token='$qust' WHERE id_req='$invo' and confrim ='0'";

          if(mysqli_query($koneksi, $req_valid)){
              
 include("sms/sms-code.php");

 }
 
  if(mysqli_query($koneksi, $req_valid)){
              
  header('location:../../index/user/download/confrim_otp.php?nope='.$nope.'&invo='.$invo.'');

 }
 
}

mysqli_close($koneksi);
?>
