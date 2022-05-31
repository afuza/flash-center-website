<?php
// koneksi database
include '../database/koneksi.php';

// menangkap data yang di kirim dari form
$email = $_POST['email'];
$nama = $_POST['nama'];
$no_hp = $_POST['no_hp'];
$alamat = $_POST['alamat'];
$kota = $_POST['kota'];
$kode_pos = $_POST['kode_pos'];
$provinsi = $_POST['provinsi'];
$negara = $_POST['negara'];


// update data ke database
$update = "UPDATE alamat SET nama='$nama', alamat='$alamat', kota='$kota', kode_pos='$kode_pos', provinsi='$provinsi', negara='$negara', no_hp ='$no_hp' WHERE email='$email'";

if (mysqli_query($koneksi, $update)) {
    header('location:../../index/user/Dashboard/index.php?pesan=update');
}else{
    header('location:../index/user/Dashboard/');
}

mysqli_close($koneksi);
?>
