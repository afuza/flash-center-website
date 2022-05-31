<?php

$btn = $_POST['btn'];

// koneksi database

include '../database/koneksi.php';

if($btn == 'paym'){

$trx_status = $_POST['status'];
$invo = $_POST['order_id'];

// update data ke database
$update = "UPDATE trx SET status='$trx_status' WHERE INVOICE='$invo'";

$update2 = "UPDATE s_order SET order_status='$trx_status' WHERE order_invoice='$invo'";
mysqli_query($koneksi, $update2);

if (mysqli_query($koneksi, $update)) {
    header("location:../../index/admin/payment/index.php?transaction_status=$trx_status");
}
}


mysqli_close($koneksi);
?>
