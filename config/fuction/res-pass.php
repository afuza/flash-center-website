<?php
include "../database/koneksi.php";

if(isset($_POST["reset_pass"])){

    $emailTo = $_POST["email"]; //email kamu atau email penerima link reset

    $code = uniqid(true); //Untuk kode atau parameter acak

    $end = sha1($code);

    $sql_cek2=mysqli_query($koneksi,"SELECT * FROM member WHERE email ='".$emailTo."'");

    $r_cek2=mysqli_num_rows($sql_cek2);

    if ($r_cek2>0) {

      $query = mysqli_query($koneksi, "INSERT INTO reset_password VALUES ('','$emailTo','$end')");

          include("mail-reset.php");

      if ($query){
          
        header("location:../../info/send_resetpass.php?pesan=$emailTo");
        
            }

    }else{

    header('location:../../auth/reset-password/index.php?pesan=emel1');

    }
}
