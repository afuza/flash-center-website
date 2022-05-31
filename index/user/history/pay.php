<?php
require_once "../view/header.php"
 ?>
 <?php
 
 $typeb = $_GET['type'];
 $va1 = $_GET['va1'];
 $va2 = $_GET['va2'];
 $total_Pay = $_GET['total'];
 $date = $_GET['date'];
 $invo = $_GET['invo'];
 $tx_id = $_GET['trx_id'];
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
                                                <h4 class="m-0 d-print-none"><?php echo $invo2 ?></h4>
                                            </div>
                                        </div>

                                        <!-- Invoice Detail-->
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="float-left mt-3">
                                                    <p><b>Payment Wating / Pembayaran menunggu</b></p>
                                                    <p class="text-muted font-13">Harap di chek terlebih dahulu angka pada nomor rekening dan jumlah yang di bayar harus sesuai dengan yang tertera atau sistem pembayaran yang andah pilih salah kirim pembayaran bukan tanggung jawab kami.</p>
                                                </div>

                                            </div><!-- end col -->
                                            <div class="col-sm-4 offset-sm-2">
                                                <div class="mt-3 float-sm-right">
                                                    <p class="font-13"><strong>Order Date :</strong> &nbsp;&nbsp;&nbsp;<?php echo $date ?></p>
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
                                                            <th>Type</th>
                                                            <th >BANK</th>
                                                            <th >Nomor Rekening</th>
                                                        </tr></thead>
                                                        <tbody>
                                                        <tr>
                                                            <td><?php echo $typeb ?></td>
                                                            <td><?php echo $va1 ?></td>
                                                            <td><?php echo $va2  ?></td>
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
                                                     <p>1.Transaksi bersipat final trasaksi Penjelesan lebih lanjut di <a href="">sini</a></p>
                                                     <p>2.Setelah pembayaran klik Pay.</p>
                                                     <p>3.Harap di Perhatikan description Produk agar tidak terjadi kesalahan.</p>
                                                     <p>4.Semua tidakan terkait kejahatan akan kami proses kepada pihak terkait.</p>
                                                     <p>4.Sitem Pembayaran Otomatis tidak perlu melakukan konfirmasi.</p>
                                                     <p>4.Lama Waktu Pemayaran 30 menit.</p>
                                                    </small>
                                                </div>
                                            </div> <!-- end col -->
                                            <div class="col-sm-6">
                                                <div class="float-right mt-3 mt-sm-0">
                                                <h3>TOTAL <?echo rupiah($total_Pay); ?></h3>
                                                </div>
                                                <div>
                                                    <?php
                                                    switch ($typeb) {
  case 'gopay':
    $qr1 = 'height="300" width="300" src="https://api.sandbox.veritrans.co.id/v2/gopay';
    break;
default:
    $qr1 = '';
    break;
    
                                                    }
                                                
                                                    
                                                ?>
                                                <img <?php echo $qr1 ?>/<?php echo  $tx_id ?>/qr-code" >
                                                </div>
                                                <div class="clearfix"></div>
                                            </div> <!-- end col -->
                                        </div>
                                        <!-- end row-->

                                        <div class="d-print-none mt-4">
                                            <div class="text-right">

                                                <a href="../midtrans-creat/chek-payment.php?invo=<?php echo $invo ?>" class="btn btn-info"></i>Pay</a>
                                                
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
            <?php
                  require_once "../view/footer.php"
            ?>
