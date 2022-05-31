<?php
require_once "../view/header.php"
 ?>
 <?php
 include '../../../config/database/koneksi.php';
 ?>
 <nav aria-label="breadcrumb">
       <ol class="breadcrumb bg-light-lighten p-2">
           <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-cellphone-nfc"></i> Flashing</a></li>
       </ol>
 </nav>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <?php
                                      $beli = $_GET['id'];
                                      $data = mysqli_query($koneksi,"select * from produk where id_flashing ='$beli' and status='aktif'");
                                      while($d = mysqli_fetch_array($data)){
                                         $harga = $d['harga'];
                                         $nama = $d['nama'];
                                        $lama = $d['lama'];
                                        $email = $d['email'];
                                      
                                        ?>
                                            <div class="col-lg-5">
                                                <!-- Product image -->
                                                <a href="javascript: void(0);" class="text-center d-block mb-4">
                                                    <img src="../../../config/fuction/file/<?php echo $d['img']; ?>" class="img-fluid" style="max-width: 280px;" alt="Product-img" />
                                                </a>
                                            </div> <!-- end col -->
                                            <div class="col-lg-7">
                                                <form class="pl-lg-4">
                                                    <!-- Product title -->
                                                    <h3 class="mt-0"><?php echo $d['title']; ?> </h3>
                                                    <p class="mb-1">Added Date: <?php echo $d['tanggal']; ?> </p>
                                                    <!-- Product description -->
                                                    <div class="mt-4">
                                                        <h6 class="font-14">Harga:</h6>
                                                        <h3><?php echo rupiah($harga); ?></h3>
                                                    </div>

                                                    <!-- Pesan -->
                                                    <div class="mt-4">
                                                        <div class="d-flex">
                                                          <a href="beli.php?id=<?php echo $beli ?>"><button type="button" class="btn btn-success ml-2"><i class="mdi mdi-cart mr-1"></i>Buy Now</button></a>
                                                        </div>
                                                    </div>
                                        
                                                    <!-- Product description -->
                                                    <div class="mt-4">
                                                        <h6 class="font-14">Description:</h6>
                                                        <p> <?php echo $d['isi']; ?> </p>
                                                    </div>

                                    

                                                </form>
                                            
                                            </div> <!-- end col -->
                                        </div> <!-- end row-->
<p><h6 class="font-14">Table Deskripsi Produk:</h6></p>
                                        <div class="table-responsive mt-4">
                                            <table class="table table-bordered table-centered mb-0">
                                                <tbody>
                                                    <tr>
                                                        <td bgcolor='#F0F8FF' >Merek </td>
                                                        <td><?php echo $d['merek']; ?></td>
                                                    </tr>
                                                      <tr>
                                                        <td bgcolor='#F0F8FF' >Type Smatphone </td>
                                                        <td><?php echo $d['type_smartphone']; ?></td>
                                                    </tr>
                                                      <tr>
                                                        <td bgcolor='#F0F8FF' >Type Flashing </td>
                                                        <td> <?php echo $d['type_flashing']; ?></td>
                                                    </tr>
                                                      <tr>
                                                        <td bgcolor='#F0F8FF' >konsultasi </td>
                                                        <td><?php echo $d['konsultasi']; ?></td>
                                                    </tr>
                                                      <tr>
                                                        <td bgcolor='#F0F8FF' >Besar File Keseluruhan </td>
                                                        <td><?php echo $d['besarf']; ?></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <?
                                      }
                                            ?>
                                        </div> <!-- end table-responsive-->
                                        
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->
                        </div>
                        <!-- end row-->
                    <!-- Footer Start -->
                    <footer class="footer">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-6">
                                    2018 - 2020 © Hyper - Coderthemes.com
                                </div>
                                <div class="col-md-6">
                                    <div class="text-md-right footer-links d-none d-md-block">
                                        <a href="javascript: void(0);">About</a>
                                        <a href="javascript: void(0);">Support</a>
                                        <a href="javascript: void(0);">Contact Us</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </footer>
                    <!-- end Footer -->

                </div> <!-- content-page -->

            </div> <!-- end wrapper-->
        </div>
        <!-- END Container -->


        <?php
              require_once "../view/footer.php"
        ?>
