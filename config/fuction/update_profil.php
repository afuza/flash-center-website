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

$limit = 10 * 1024 * 1024;
$ekstensi =  array('png','jpg','jpeg','gif');
$jumlahFile = count($_FILES['foto']['name']);

for($x=0; $x<$jumlahFile; $x++){
  $namafile = $_FILES['foto']['name'][$x];
  $tmp = $_FILES['foto']['tmp_name'][$x];
  $tipe_file = pathinfo($namafile, PATHINFO_EXTENSION);
  $ukuran = $_FILES['foto']['size'][$x];
  if($ukuran > $limit){
    header("location:index.php?alert=gagal_ukuran");
  }else{
    if(!in_array($tipe_file, $ekstensi)){
      header("location:index.php?alert=gagal_ektensi");
    }else{

      move_uploaded_file($tmp, 'file/'.date('d-m-Y').'-'.$namafile);
      $x = date('d-m-Y').'-'.$namafile;
// update data ke database
$update = "UPDATE alamat SET nama='$nama', alamat='$alamat', kota='$kota', kode_pos='$kode_pos', provinsi='$provinsi', negara='$negara', no_hp='$no_hp',foto='$x' WHERE email='$email'";

if (mysqli_query($koneksi, $update)) {
    header('location:../../index/user/Dashboard/index.php?pesan=update');
}else{
    header('location:../index/user/Dashboard/');
}
}
}
}
mysqli_close($koneksi);
?>
