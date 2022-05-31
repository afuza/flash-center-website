<?php
require_once "../view/header.php"
 ?>

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                            <h4 class="page-title">Shopping Cart</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-8">
                                        <div class="table-responsive">
                                    <table class="table table-borderless table-centered mb-0">
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th>Product</th>
                                                        <th>Total</th>
                                                        <th style="width: 50px;"></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                  <?php
                                                  $beli = $_GET['id'];
                                                  include '../../../config/database/koneksi.php';
                                                  $data = mysqli_query($koneksi,"select * from produk where id_flashing ='$beli'");
                                                  while($d = mysqli_fetch_array($data)){
                                                     $harga = $d['harga'];
                                                     $diskon = $d['dikon'];
                                                     $hasil = $harga - $diskon;
                                                    ?>
                                                    <tr>
                                                        <td>
                                                            <img src="../../../config/fuction/file/<?php echo $d['img']; ?>" alt="contact-img"
                                                                title="contact-img" class="rounded mr-3" height="64" />
                                                            <p class="m-0 d-inline-block align-middle font-16">
                                                                <a href="apps-ecommerce-products-details.html"
                                                                    class="text-body">JASA - <?php echo $d['title']; ?></a>
                                                                <br>
                                                            </p>
                                                        </td>
                                                        <td>
                                                          <?php echo rupiah($harga); ?>
                                                        </td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div> <!-- end table-responsive-->
                                  <form action="../../../config/fuction/input-order.php" method="POST">
                                        <!-- Add note input-->
                                        <div class="mt-3">
                                            <label for="example-textarea">Add a Note:</label>
                                            <textarea name="note" class="form-control" id="example-textarea" rows="3"
                                                placeholder="Tulis misalnya merek smartphone kamu ..."></textarea>
                                        </div>
                                   <input type="hidden" name="emailb" value="<?php echo $_SESSION['email'];?>">
                                   <input type="hidden" name="Grand" value="<?php echo $d['harga']; ?>">
                                   <input type="hidden" name="lama" value="<?php echo $d['lama']; ?>">
                                   <input type="hidden" name="emails" value="<?php echo $d['email']; ?>">
                                   <input type="hidden" name="hasil" value="<?php echo $hasil; ?>">
                                   <input type="hidden" name="jasa" value="<?php echo $d['title']; ?>">
                                   <input type="hidden" name="link" value="<?php echo $d['link']; ?>">
                                   <input type="hidden" name="cupon" value="<?php echo $d['cupon']; ?>">
                                        <!-- action buttons-->
                                        <div class="row mt-4">
                                            <div class="col-sm-6">
                                                <a href="../flashing/index.php?tag=FLASHING" class="btn text-muted d-none d-sm-inline-block btn-link font-weight-semibold">
                                                    <i class="mdi mdi-arrow-left"></i> Continue Shopping </a>
                                            </div> <!-- end col -->
                                            <div class="col-sm-6">
                                                <div class="text-sm-right">
                                                    <button type ="submit" class="btn btn-success btn-rounded"><i class="mdi mdi-cart-plus mr-1"></i>BELI</button>

                                                </div>
                                            </div> <!-- end col -->
                                    </form>
                                        </div> <!-- end row-->
                                    </div>
                                    <!-- end col -->

                                    <div class="col-lg-4">
                                        <div class="border p-3 mt-4 mt-lg-0 rounded">
                                            <h4 class="header-title mb-3">Order Summary</h4>

                                            <div class="table-responsive">
                                                <table class="table mb-0">
                                                    <tbody>
                                                        <tr>
                                                            <td>Grand Total :</td>
                                                            <td><?php echo rupiah($harga); ?></td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Discount : </td>
                                                            <td><?php  echo rupiah($diskon);  ?></td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Estimated : </td>
                                                            <td><?php echo $d['lama']; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Total :</th>
                                                            <th><?php echo rupiah($hasil); ?></td></th>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <!-- end table-responsive -->
                                        </div>
                                      <?php
                                         }
                                       ?>
                                        <div class="alert alert-warning mt-3" role="alert">
                                           Baca Syarat Dan Ketentuan di Sini </strong>
                                        </div>
                                    </div> <!-- end col -->

                                </div> <!-- end row -->
                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div> <!-- End Content -->
            <?php
                  require_once "../view/footer.php"
            ?>
