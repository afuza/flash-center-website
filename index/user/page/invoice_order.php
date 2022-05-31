<?php
require_once "../view/header.php"
 ?>
<?php
 include '../../../config/database/koneksi.php';
?>
 <?php
 $invoice = $_GET['invoice'];
 $data = mysqli_query($koneksi,"select * from s_order where order_invoice = '".$invoice."'");
 while($d = mysqli_fetch_array($data)){
  $e_buyer = $d['email_buyer'];
  $e_seller = $d['email_seller'];
  $jasa_nama = $d['jasa_nama'];
  $harga = $d['harga'];
  $total = $d['total'];
  $diskon = $d['diskon'];
  $note = $d['note'];
  $status = $d['order_status'];
  $invo2 = $d['order_invoice'];
 switch ($status) {
   case 'waiting':
     $status1 = 'info';
     break;
     case 'paid':
       $status1 = 'success';
       break;
   default:
     $status1 = 'danger';
     break;
 }
  ?>
<br>
</br>
                    <!-- Start Content-->
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">

                                        <!-- Invoice Logo-->
                                        <div class="clearfix">
                                            <div class="float-left mb-3">
                                                <img src="https://flashingcenter.b-cdn.net/assets/images/logo/Flashing-center_logo.png" alt="" height="25">
                                            </div>
                                            <div class="float-right">
                                                <h4 class="m-0 d-print-none">Invoice_Order</h4>
                                            </div>
                                        </div>

                                        <!-- Invoice Detail-->
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="float-left mt-3">
                                                    <p><b>Hello, <?php echo $_SESSION['nama']; ?> </b></p>
                                                    <p class="text-muted font-13">Pembayaran dilakukan dengan sadar dan seksama semua tanggung jawab dalah
                                                    mengirim pembayaran sepenuhnya tanggung jawab buyer mohon membaca terlebih dahulu syarat dan ketentuan.</p>
                                                </div>

                                            </div><!-- end col -->
                                            <div class="col-sm-4 offset-sm-2">
                                                <div class="mt-3 float-sm-right">
                                                    <p class="font-13"><strong>Order Date :</strong> &nbsp;&nbsp;&nbsp;<?php echo $d['order_date']; ?></p>
                                                    <p class="font-13"><strong>Order Status :</strong> <span class="badge badge-<?php echo $status1 ?> float-right"><?php echo $status ?></span></p>
                                                    <p class="font-13"><strong>Order ID :</strong> <span class="float-right"><b>#<?php echo $invo2 ?></b></span></p>
                                                </div>
                                            </div><!-- end col -->
                                        </div>
                                        <!-- end row -->



                                        <div class="row">
                                            <div class="col-12">
                                                <div class="table-responsive">
                                                    <table class="table mt-4">
                                                        <thead>
                                                        <tr>
                                                            <th>Produk</th>
                                                            <th class="text-right">Harga</th>
                                                        </tr></thead>
                                                        <tbody>
                                                        <tr>
                                                            <td><?php echo $d['jasa_nama']; ?></td>
                                                            <td class="text-right"><?echo rupiah($harga); ?></td>
                                                        </tr>

                                                        </tbody>
                                                    </table>
                                                </div> <!-- end table-responsive-->
                                            </div> <!-- end col -->
                                        </div>
                                        <!-- end row -->

                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="clearfix pt-3">
                                                    <h6 class="text-muted">Notes:</h6>
                                                    <small>
                                                      Semua trasaksi yang terjadi adalah final transaksi dan produk yang sudah di beli tidak dapan di kembalikan atau melakukan refund untuk kendala atau error pada file yang di download
                                                      bisa melakukan refund dana anda dengan cara membuka tiket laporan untuk orderan ini terimakasih.
                                                    </small>
                                                </div>
                                            </div> <!-- end col -->
                                            <div class="col-sm-6">
                                                <div class="float-right mt-3 mt-sm-0">
                                                <h3><?echo rupiah($harga); ?></h3>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div> <!-- end col -->
                                        </div>
                                        <!-- end row-->

                                        <div class="d-print-none mt-4">
                                            <div class="text-right">
<?php
$data = mysqli_query($koneksi,"SELECT * FROM trx WHERE INVOICE='".$invo2."'");
while($d = mysqli_fetch_array($data)){
$sts = $d['status'];
switch ($sts) {
  case 'paid':
    $trx1 = 'success ';
    break;
    case 'pay':
      $trx1 = 'primary';
    break;
  case 'waiting':
      $trx1 = 'info';
    break;
}

switch ($sts) {
  case 'paid':
    $trx2 = 'download ';
    break;
    case 'pay':
        $trx2 = 'bayar';
      break;
   case 'waiting':
      $trx2 = 'info';
   break;
      default:
          $trx2 = 'Cancel';
}
switch ($sts) {
  case 'paid':
    $trx3 = 'https://pbs.twimg.com/profile_images/1309521645846102017/RAtUHEMI_400x400.jpg ';
    break;
        case 'waiting':
        $trx3 = '../midtrans-creat/chek-payment.php?invo='.$invo2.' ';
      break;
    case 'pay':
        $trx3 = '../midtrans-creat/proses.php?invo='.$invo2.' ';
      break;
      default:
          $trx3 = '#blocked';
}
switch ($sts) {
  case 'paid':
    $trx4 = 'uil-file-download';
    break;
    case 'pay':
        $trx4 = 'uil-money-bill';
      break;
      default:
          $trx4 = '#';
}
?>

<a href="<?php echo $trx3 ?>" class="btn btn-<?php echo $trx1 ?>"><i class="<?php echo $trx4 ?>"></i> <?php echo $trx2 ?></a>

<?PHP
}
?>
                                                <a href="https://selectpdf.com/api2/convert/?key=08868a11-d88e-4582-939d-1d7b032d1165&url=https://hpanel.flashing.center/config/fuction/print_invoice.php?invoice=<?php echo $invo2 ?>&pdf_name=Invoice_<?php echo $invo2 ?>.pdf" class="btn btn-info"><i class="uil-print"></i>Print</a>
                                                
                                                                                     </div>
                                        </div>
                                        <!-- end buttons -->

                                    </div> <!-- end card-body-->
                                </div> <!-- end card -->
                            </div> <!-- end col-->
                        </div>
                        <!-- end row -->

                    </div>
                    <!-- container -->
<?PHP
}
?>

            <?php
                  require_once "../view/footer.php"
            ?>
