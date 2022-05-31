<?php
// koneksi database

include '../database/koneksi.php';
$bton = $_POST['btn'];
$id_h = $_GET['id'];
$ac = $_GET['action'];


if ($bton == 'update'){   
$sts = $_POST['status'];
$id  = $_POST['id'];


$update2 = "UPDATE produk SET status='$sts' WHERE id_flashing='$id'";

if (mysqli_query($koneksi, $update2)) {
    header("location:../../index/admin/draf-product/index.php");
 }
 
}

if ($ac == 'hapus'){

$update2 = "DELETE FROM produk WHERE id_flashing='$id_h'";

if (mysqli_query($koneksi, $update2)) {
    header("location:../../index/admin/draf-product/index.php");
 }
 
}


    
mysqli_close($koneksi);

?>
