<?php

include "../database/koneksi.php";

    $emailb = $_POST['emailb'];
    $jasa = $_POST['jasa'];
    $harga = $_POST['Grand'];
    $lama = $_POST['lama'];
    $hasil = $_POST['hasil'];
    $note = $_POST['note'];
    $jasa = $_POST['jasa'];
    $tgl = date('y-m-d');
    $link = $_POST['link'];
  function randomString($length)
    {
        $str        = "";
        $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz123456789';
        $max        = strlen($characters) - 1;
        for ($i = 0; $i < $length; $i++) {
            $rand = mt_rand(0, $max);
            $str .= $characters[$rand];
        }
        return $str;
    }

$ran = randomString(6);

if (!$koneksi)
{
  die("Koneksi dengan MySQL gagal");
}

$query="INSERT INTO s_order (order_invoice,jasa_nama,harga,email_buyer,lama,total,note,order_status,order_date,link)
VALUES ('".$ran."','".$jasa."','".$harga."','".$emailb."','".$lama."','".$hasil."','".$note."','pay','".$tgl."','".$link."')";

if (mysqli_query($koneksi, $query)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
}

$payment = mysqli_query($koneksi,"INSERT INTO trx VALUES('$emailb','$ran','$harga','$tgl','pay')");
mysqli_query($koneksi, $payment);

include("mail-invoice.php");

mysqli_close($koneksi);

header("location:../../index/user/page/invoice_order.php?invoice=$ran");
?>
