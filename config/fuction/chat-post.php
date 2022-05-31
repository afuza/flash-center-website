<?php
include "../database/koneksi.php";


    $email = $_POST['emailb'];
    $invo = $_POST['invo'];
    $isichat = $_POST['isichat'];
    $tgl = date('H:i:s');



$req = mysqli_query($koneksi,"INSERT INTO chating VALUES('','$invo','$email','$isichat','$tgl')");

 if ($req){
     if($email == 'Supportid_req@flashing.center'){
 header('location:../../index/admin/req-remote/chat.php?invo='.$invo.'');
 
  }else{
      header('location:../../index/user/chating/chat.php?invo='.$invo.'');
  }
 }


mysqli_close($koneksi);

?>
