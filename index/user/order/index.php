<?php
require_once "../view/header.php"
 ?>
 <br>
 <br>
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-2">
                        <div class="col-lg-8">
                          Order
                        </div>
                        <div class="col-lg-4">
                            <div class="text-lg-right">
                                <button type="button" class="btn btn-danger mb-2 mr-2"><i class="mdi mdi-basket mr-1"></i> Add New Order</button>

                            </div>
                        </div><!-- end col-->
                    </div>

                    <div class="table-responsive">
                        <table class="table table-centered mb-0">
                            <thead class="thead-light">
                                <tr>
                                    <th>Invoice Order</th>
                                    <th>Date</th>
                                    <th>Jasa</th>
                                    <th>Est Time</th>
                                    <th>Status Order</th>
                                    <th>Harga</th>
                                    <th style="width: 125px;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                              <?php
                              include '../../../config/database/koneksi.php';
                              $data = mysqli_query($koneksi,"select * from s_order where email_buyer ='$_SESSION[email]'");
                              while($d = mysqli_fetch_array($data)){
                                $total = $d['total'];

                                $status = $d['order_status'];

                              switch ($status) {
                                case 'confrim':
                                  $status1 = 'info';
                                  break;
                                  case 'accept':
                                    $status1 = 'success';
                                    break;
                                 case 'pending':
                                  $status1 = 'warning';
                                  break;
                              }
                                ?>
                                <tr>
                                   <td>
                                    <h5>#<?php echo $d['order_invoice']; ?></h5>
                                   </td>
                                    <td>
                                      <?php echo $d['order_date']; ?>
                                    </td>
                                    <td>
                                        <small>  JASA - <?php echo $d['jasa_nama']; ?></small>
                                    </td>
                                    <td>
                                        <?php echo $d['lama']; ?>
                                    </td>
                                    <td>
                                      <h5><span class="badge badge-<?php echo $status1 ?>-lighten"><?php echo $status ?> </span></h5>
                                    </td>
                                    <td>
                                      <small>  <?php echo rupiah($total); ?></small>
                                    </td>
                                    <td>
                                        <a href="invoice_order.php?invoice=<?php echo $d['order_invoice']; ?>" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                    </td>
                                </tr>
<?php
}
 ?>

                            </tbody>
                        </table>
                    </div>
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col -->
    </div>
    <!-- end row -->

</div>
<!-- container -->

</div>
<!-- content -->
<?php
      require_once "../view/footer.php"
?>
