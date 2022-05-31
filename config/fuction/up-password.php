<?php

include "../database/koneksi.php";

if(isset($_POST["new_pass"])){

    $email = $_POST["email"];

    $pass = md5($_POST["password"]);

    $query = mysqli_query($koneksi, "UPDATE member SET password = '$pass' WHERE email = '$email'");

    if($query){

                $delet = mysqli_query($koneksi, "DELETE FROM reset_password WHERE email = '$email'");
                
              if($delet){
                header('location:../../info/update_sucsess.php');
              }
    }
}

?>
