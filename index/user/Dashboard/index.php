<?php
require_once "../view/header.php"
 ?>
<!-- star index -->
<?php
if($_GET['pesan'] == "masuk"){
                                echo "<script> Swal.fire({
                                icon: 'success',
                                title: 'Login Berhasil',
                                text: 'Selamat Menikmati Produk Kami !',
                                }) </script>";
                              }
?>

<br/>
                <!-- content -->
                <div class="main-panel">
                  <div class="content-wrapper">
                                <div class="content-heading">
                                   <div>Dashboard
                                      <small>Welcome to Flashing Center!</small>
                                   </div>
                                   <br></br>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="card tilebox-one">
                                            <div class="card-body">
                                                <i class="dripicons-basket float-right text-muted"></i>
                                                <h6 class="text-muted text-uppercase mt-0">Orders</h6>
                                                <?php
                                                include '../../../config/database/koneksi.php';
                                                $arr =array();
                                                $data = mysqli_query($koneksi,"select * from s_order where email_buyer ='$_SESSION[email]'");
                                                while($d = mysqli_fetch_array($data)){
                                                  $arr[]=$d;
                                                }
                                                $count = count($arr)
                                                ?>
                                                <h2 class="m-b-20"> <?php echo $count ?></h2>
                                                <span></span> <span class="text-muted">JUMLAH TOTAL ORDER</span>
                                            </div> <!-- end card-body-->
                                        </div> <!--end card-->
                                    </div><!-- end col -->

                                    <div class="col-sm-4">
                                        <div class="card tilebox-one">
                                            <div class="card-body">
                                                <i class="dripicons-box float-right text-muted"></i>
                                                <h6 class="text-muted text-uppercase mt-0">SALDO Refund</h6>
                                   <?php
                                                include '../../../config/database/koneksi.php';
                                                $arr =array();
                                                $data2 = mysqli_query($koneksi,"select * from trx where status ='refund' and  email ='$_SESSION[email]'");
                                                while($s = mysqli_fetch_array($data2)){
                                                  $jumlah[] = $s['amount'];
                                                }
                                                
                                                $hasil_total = array_sum($jumlah);
                                        
                                     ?>  
                                                <h2 class="m-b-20"><?echo rupiah($hasil_total); ?></span></h2>
                                                <span></span> <span class="text-muted">SALDO</span>
                                            </div> <!-- end card-body-->
                                        </div> <!--end card-->
                                    </div><!-- end col -->
                                    <div class="col-sm-4">
                                        <div class="card tilebox-one">
                                            <div class="card-body">
                                                <i class="dripicons-jewel float-right text-muted"></i>
                                                <h6 class="text-muted text-uppercase mt-0">COMPLETE ORDER</h6>
                                                <?php
                                                include '../../../config/database/koneksi.php';
                                                $bb =array();
                                                $data2 = mysqli_query($koneksi,"select * from trx where email='$_SESSION[email]' and status='paid'");
                                                while($c = mysqli_fetch_array($data2)){
                                                  $bb[]=$c;
                                                }
                                                $count1 = count($bb)
                                                ?>
                                                <h2 class="m-b-20"><?php echo $count1 ?></h2>
                                                <span></span> <span class="text-muted">ORDERAN SELESAI</span>
                                            </div> <!-- end card-body-->
                                        </div> <!--end card-->
                                    </div><!-- end col -->
</div>
                                <div class="text-center my-3 py-4">
                                   <div class="h2 text-bold">Quick Navigation</div>
                                   <p>akses cepat ke menu yang kamu inginkan</p>
                                </div>
            <div class="row">
                                                      <div class="col-lg-4">
                                                        <div class="card">
                                                          <div class="card-body text-center">
                                                            <a class="link-unstyled text-success" href="../download/index.php">
                                                                <em class="fa fa-5x fa-download mb-3"></em>
                                                              
                                                                       <br>
                                                                           <span class="font-weight-bold">Download File</span>
                                                                       <br>
                                                                    <div class="text-sm text-muted">View all &rarr;</div>
                                                              </a>
                                                          </div>
                                                        </div>
                                                      </div>
                      <div class="col-lg-4">
                        <div class="card">
                          <div class="card-body text-center">
                            <a class="link-unstyled text-danger" href="../page/index.php?tag=FLASHING">
                                <em class="fa fa-5x fa-mobile-alt mb-3"></em>
                                       <br>
                                           <span class="font-weight-bold">Jasa Flashing</span>
                                       <br>
                                    <div class="text-sm text-muted">View all &rarr;</div>
                              </a>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-4">
                        <div class="card">
                          <div class="card-body text-center">
                            <a class="link-unstyled text-info" href="../flashing/index.php">
                                <em class="fa fa-5x  fa-comment-dots mb-3"></em>
                                       <br>
                                           <span class="font-weight-bold">Chat</span>
                                       <br>
                                    <div class="text-sm text-muted">View all &rarr;</div>
                                </a>
                              </div>
                          </div>
                        </div>
                        <div class="col-lg-4">
                          <div class="card">
                            <div class="card-body text-center">
                              <a class="link-unstyled text-warning" href="../page/index.php?tag=consutasi">
                                  <em class="fa fa-5x fa-comments mb-3"></em>
                                         <br>
                                             <span class="link-unstyled text-warning">Jasa Konsultasi</span>
                                         <br>
                                      <div class="text-sm text-muted">View all &rarr;</div>
                                  </a>
                                </div>
                            </div>
                          </div>
                          <div class="col-lg-4">
                            <div class="card">
                              <div class="card-body text-center">
                                <a class="link-unstyled text-info" href="../history/index.php">
                                    <em class="fa fa-5x uil-dollar-alt mb-3"></em>
                                           <br>
                                               <span class="font-weight-bold">Riwayat Order</span>
                                           <br>
                                        <div class="text-sm text-muted">View all &rarr;</div>
                                    </a>
                                  </div>
                              </div>
                            </div>
                            <div class="col-lg-4">
                              <div class="card">
                                <div class="card-body text-center">
                                  <a class="link-unstyled text-primary" href="../lapor/index.php">
                                      <em class="fa fa-5x fa-bullhorn mb-3"></em>
                                             <br>
                                                 <span class="font-weight-bold">Lapor Masalah</span>
                                             <br>
                                          <div class="text-sm text-muted">View all &rarr;</div>
                                      </a>
                                    </div>
                                </div>
                              </div>
                            </div>
                  </div>

<?php
      require_once "../view/footer.php"
?>
