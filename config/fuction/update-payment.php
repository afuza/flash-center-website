<?php

// koneksi database

include '../database/koneksi.php';

// menangkap data yang di kirim dari form
$email = $_SESSION['email'];
$trx_status = $_GET['transaction_status'];
$invo = $_GET['order_id'];

switch ($trx_status) {
  case 'settlement':
    $trx1 = 'paid';
    break;
  case 'pending':
      $trx1 = 'waiting';
    break;
  case 'deny':
        $trx1 = 'cancel';
      break;
  case 'cancel':
            $trx1 = 'cancel';
    break;

  default:
    $trx1 = 'cancel';
    break;
}


// update data ke database
$update = "UPDATE trx SET status='$trx1' WHERE INVOICE='$invo'";

$update2 = "UPDATE s_order SET order_status='$trx1' WHERE order_invoice='$invo'";
mysqli_query($koneksi, $update2);

if (mysqli_query($koneksi, $update)) {
    header("location:../../index/user/history/index.php?transaction_status=$trx1");
}

mysqli_close($koneksi);
?>
