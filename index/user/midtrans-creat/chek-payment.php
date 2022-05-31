<?php

$invo = $_GET['invo'];

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,"https://api.sandbox.midtrans.com/v2/$invo/status");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPGET, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Accept: application/json',
    'Content-Type: application/json',
    'Authorization: Basic U0ItTWlkLXNlcnZlci1CeDY1SWFwYmNqNU1HQXlqV2ZoOVh1emQ6',
));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, CURLOPT_HTTPHEADER, CURLOPT_HTTPGET, CURLOPT_URL);
$result=curl_exec($ch);
curl_close($ch);


$md = json_decode($result, true);

$trx_status = $md['transaction_status'];
foreach ($md['va_numbers'] as $va) {
    # code...
    $bank = $va['bank'];
    $norek = $va['va_number'];
   }
$harga = $md['gross_amount'];
$typepay = $md['payment_type'];
$sing = $md['signature_key'];
$mc = $md['merchant_id'];
$date = $md['transaction_time'];
$trx_id = $md['transaction_id'];


include '../../../config/database/koneksi.php';


switch ($trx_status) {
  case 'paid':
    $trx1 = 'paid';
    break;
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
switch ($trx_status) {
  case 'pending':
    $trx2 = 'pay';
    break;
  default:
    $trx2 = 'index';
    break;
}


// update data ke database
$update = "UPDATE trx SET status='$trx1' WHERE INVOICE='$invo'";

$update2 = "UPDATE s_order SET order_status='$trx1' WHERE order_invoice='$invo'";
mysqli_query($koneksi, $update2);


if (mysqli_query($koneksi, $update)) {
    header("location:../history/$trx2.php?sing=$sing&va1=$bank&va2=$norek&type=$typepay&total=$harga&transaction_status=$trx_status&date=$date&invo=$invo&trx_id=$trx_id ");
}


mysqli_close($koneksi);
