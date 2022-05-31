<?php

include "../database/koneksi.php";

    $btn = $_POST['btn'];
    $ac = $_GET['hs'];
    
    $subj = $_POST['subject'];
    $masalah = $_POST['masalah'];
    $invo = $_POST['invo'];
    $email = $_POST['email'];
    $isi = $_POST['isi'];
    
if ($btn == 'input'){
    
  function randomString($length)
    {
        $str        = "";
        $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz123456789';
        $max        = strlen($characters) - 1;
        for ($i = 0; $i < $length; $i++) {
            $rand = mt_rand(0, $max);
            $str .= $characters[$rand];
        }
        return $str;
    }

$ran = randomString(7);

$query="INSERT INTO laporan (id_laporan,id_orderan,email,status,isilaporan,subject,masalah)
VALUES ('".$ran."','".$invo."','".$email."','dibuka','".$isi."','".$subj."','".$masalah."')";

if(mysqli_query($koneksi, $query)){
     header("location:../../index/user/lapor/index.php");
}

}

if ($btn == 'balas'){
    
    $idlapor = $_POST['idlapor'];
    $status = $_POST['status'];
    
    $query="INSERT INTO laporan (id_laporan,id_orderan,email,status,isilaporan,subject,masalah)
VALUES ('".$idlapor."','".$invo."','".$email."','".$status."','".$isi."','".$subj."','".$masalah."')";

if(mysqli_query($koneksi, $query)){
    header("location:../../index/user/lapor/balasan.php?id=$idlapor");
}
}

if ($btn == 'balas1'){
    
    $idlapor = $_POST['idlapor'];
    $status = $_POST['status'];
    
    $query="INSERT INTO laporan (id_laporan,id_orderan,email,status,isilaporan,subject,masalah)
VALUES ('".$idlapor."','".$invo."','".$email."','".$status."','".$isi."','".$subj."','".$masalah."')";

if(mysqli_query($koneksi, $query)){
    header("location:../../index/admin/tiket/balasan.php?id=$idlapor");
}
    
}

if ($ac == 'hapus'){
    
$id_h = $_GET['id_lapor'];

$update2 = "DELETE FROM laporan WHERE id_laporan='$id_h'";

if (mysqli_query($koneksi, $update2)) {
    
   header("location:../../index/user/lapor/index.php");
 }
 
}

if ($btn == 'update'){   
    
$st = $_POST['status'];
$id_lap = $_POST['id_lap'];


$update2 = "UPDATE laporan SET status='$st' WHERE id_laporan='$id_lap'";

if (mysqli_query($koneksi, $update2)) {
    header("location:../../index/admin/tiket/index.php");
 }
 
}

mysqli_close($koneksi);

?>
