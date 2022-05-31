<?php

include "../database/koneksi.php";


    $email = $_POST["email"];
    $id_member = $_POST["[id_member"];
    $sts = $_POST["status"];


    $query = mysqli_query($koneksi, "UPDATE member SET aktif= '$sts' WHERE  email= '$email'");

    if($query){
                header('location:../../index/admin/pelanggan/index.php');
              }


?>
