<?php
include "../database/koneksi.php";

$btn = $_POST['btn'];

//addreq

if($btn == 'add'){
    $email = $_POST['email'];
    $idteam = $_POST['idteam'];
    $idpass = $_POST['idpass'];
    $nope = $_POST['nope'];
    $invo = $_POST['invoreq'];
    $app = $_POST['app'];



$tgl=date('Y-m-d H:i:s');


$rand = rand(1, 9);
$rand1 = rand(1, 9);
$rand2 = rand(1, 9);
$rand3 = rand(1, 9);

$qust = ("$rand$rand1$rand2$rand3");

$sql_cek2=mysqli_query($koneksi,"SELECT * FROM req WHERE id_req ='".$invo."'");
                  $r_cek2=mysqli_num_rows($sql_cek2);
                  if ($r_cek2>0) {
                      header('location:../../index/user/chating/index.php?info=add');
                  }else{
                      
$req = mysqli_query($koneksi,"INSERT INTO req VALUES('','$invo','$email','$app','$idteam','$idpass','$nope','nope','$tgl','','$qust','0','kosong')");
 if ($req){
 include("sms/sms-code.php");
 }
if ($req){
   header('location:../../index/user/download/confrim_otp.php?nope='.$nope.'&invo='.$invo.'&email='.$email.'');
}
}
}

// Update Req

if ($btn == 'update'){   
$link_req = $_POST['link'];
$st_req = $_POST['status'];
$id_req = $_POST['id_req'];
$tgl = date('H:i:s');
    $emails = $_POST['emailb'];
    $isichat = $_POST['isc'];
    $tgl = date('H:i:s');


$update2 = "UPDATE req SET status='$st_req',link_ss='$link_req' WHERE id_req='$id_req'";

$chat2 = mysqli_query($koneksi,"INSERT INTO chating VALUES('','$id_req','$emails','$isichat','$tgl')");
mysqli_query($koneksi, $chat2);

if (mysqli_query($koneksi, $update2)) {
    header("location:../../index/admin/draf-product/index.php");
 }
 
}


mysqli_close($koneksi);
?>
