<?
date_default_timezone_set('Asia/Jakarta');
?>
<?php
    $koneksi = mysqli_connect("localhost","flaswuxc_online","Afuza@123","flaswuxc_online");

    if (mysqli_connect_errno()){
        echo "Koneksi database gagal : " . mysqli_connect_error();
    }
?>
