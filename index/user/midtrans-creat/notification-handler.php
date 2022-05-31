<?php

include '../../../config/database/koneksi.php';


require_once(dirname(__FILE__) . '/Veritrans.php');
Veritrans_Config::$isProduction = false;
Veritrans_Config::$serverKey = 'SB-Mid-server-Bx65Iapbcj5MGAyjWfh9Xuzd';
$notif = new Veritrans_Notification();

$transaction = $notif->transaction_status;
$type = $notif->payment_type;
$order_id = $notif->order_id;
$fraud = $notif->fraud_status;

if ($transaction == 'capture') {
  // For credit card transaction, we need to check whether transaction is challenge by FDS or not
  if ($type == 'credit_card'){
    if($fraud == 'challenge'){
      // TODO set payment status in merchant's database to 'Challenge by FDS'
      // TODO merchant should decide whether this transaction is authorized or not in MAP
      $update = "UPDATE trx SET status='paid' WHERE INVOICE='$order_id'";
    $update2 = "UPDATE s_order SET order_status='paid' WHERE order_invoice='$order_id'";
      }
      else {
      // TODO set payment status in merchant's database to 'Success'
    $update = "UPDATE trx SET status='paid' WHERE INVOICE='$order_id'";
    $update2 = "UPDATE s_order SET order_status='paid' WHERE order_invoice='$order_id'";
      }
    }
  }
else if ($transaction == 'settlement'){
  // TODO set payment status in merchant's database to 'Settlement'
 $update = "UPDATE trx SET status='paid' WHERE INVOICE='$order_id'";
$update2 = "UPDATE s_order SET order_status='paid' WHERE order_invoice='$order_id'";
  }
  else if($transaction == 'pending'){
  // TODO set payment status in merchant's database to 'Pending'
  $update = "UPDATE trx SET status='waiting' WHERE INVOICE='$order_id'";
$update2 = "UPDATE s_order SET order_status='waiting' WHERE order_invoice='$order_id'";
  }
  else if ($transaction == 'deny') {
  // TODO set payment status in merchant's database to 'Denied'
  $update = "UPDATE trx SET status='cancel' WHERE INVOICE='$order_id'";
$update2 = "UPDATE s_order SET order_status='cancel' WHERE order_invoice='$order_id'";
  }
  else if ($transaction == 'expire') {
  // TODO set payment status in merchant's database to 'expire'
  $update = "UPDATE trx SET status='cancel' WHERE INVOICE='$order_id'";
$update2 = "UPDATE s_order SET order_status='cancel' WHERE order_invoice='$order_id'";
  }
  else if ($transaction == 'cancel') {
  // TODO set payment status in merchant's database to 'Denied'
  $update = "UPDATE trx SET status='cancel' WHERE INVOICE='$order_id'";
$update2 = "UPDATE s_order SET order_status='cancel' WHERE order_invoice='$order_id'";
}
mysqli_query($koneksi, $update);
mysqli_query($koneksi, $update2);
mysqli_close($koneksi);

?>








