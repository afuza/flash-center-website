<?php
include "../database/koneksi.php";

    $judul = $_POST['judul']; 
    $harga = $_POST['harga']; 
    $merek = $_POST['merek'];
    $type_s = $_POST['type_smartphone'];
    $type_f = $_POST['type_flashing'];
    $konsul = $_POST['konsultasi'];
    $besarf = $_POST['besarf'];
    $linkd = $_POST['linkd']; 
    $tag2 = $_POST['tag2']; 
    $tgl = date('y-m-d');
    $tag = $_POST['tag']; 
    $detail = $_POST['detail'];  
    $btn = $_POST['btn']; 
    $ac = $_GET['action'];
    $id  = $_POST['id'];
    $sts = $_POST['status'];
 
if($btn == 'simpan'){
 
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

 $posting = mysqli_query($koneksi,"INSERT INTO produk VALUES ('','$judul','$detail','$tag','$tag2','$merek','$type_s','$type_f','$konsul',' $besarf','$x','$tgl','$harga','','$linkd','aktif')") or die(mysqli_error($koneksi));
 if($posting){
 header("location:../../index/admin/draf-product/index.php?pesan=sukses");
  }
   }

  }
 }
}

if($btn == 'update'){

   $update = mysqli_query($koneksi,"UPDATE produk SET title ='$judul',lama='$tag2',merek='$merek',type_smartphone='$type_s',type_flashing='$type_f',harga='$harga',konsultasi='$konsul',besarf='$besarf',update_post='$tgl',update_post='$linkd' WHERE id_flashing='$id'");
    if($update){
 header("location:../../index/admin/draf-product/index.php?pesan=sukses");
  }else{
      echo("Error description: " . mysqli_error($koneksi));
  } 
}


if ($btn == 'tampil'){  
 
$update2 = "UPDATE produk SET status='$sts' WHERE id_flashing='$id'";

if (mysqli_query($koneksi, $update2)) {
    header("location:../../index/admin/draf-product/index.php");
 }
 
}

if ($ac == 'hapus'){
    
$id_h = $_GET['id'];

$update2 = "DELETE FROM produk WHERE id_flashing='$id_h'";

if (mysqli_query($koneksi, $update2)) {
    header("location:../../index/admin/draf-product/index.php");
 }
 
}

mysqli_close($koneksi);
?>
