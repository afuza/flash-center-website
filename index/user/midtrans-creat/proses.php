<?php
require_once(dirname(__FILE__) . '/Veritrans.php');
//Set Your server key
Veritrans_Config::$serverKey = "SB-Mid-server-Bx65Iapbcj5MGAyjWfh9Xuzd";

$invoice = $_GET['invo'];

include '../../../config/database/koneksi.php';
$data = mysqli_query($koneksi,"select * from s_order where order_invoice = '".$invoice."'");
while($d = mysqli_fetch_array($data)){
$harga = $d['harga'];
$email = $d['email_buyer'];
// Required
$transaction_details = array(
  'order_id' => $invoice,
  'gross_amount' => $harga, // no decimal allowed for creditcard
  );
  
$customer_details = array(
    'email' => $email,
    'phone' => $nope,
  );

// Fill SNAP API parameter
$params = array(
    'transaction_details' => $transaction_details,

);


try {
  // Get Snap Payment Page URL
  $paymentUrl = Veritrans_Snap::createTransaction($params)->redirect_url;

  // Redirect to Snap Payment Page
  header('Location: ' . $paymentUrl);
}
catch (Exception $e) {
  echo $e->getMessage();
}

}
