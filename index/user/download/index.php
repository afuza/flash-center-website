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
                        <div class="col-lg-4">
                        </div>
                        <div class="col-lg-4">
                            <div>
                                <center><h3><i class="uil-file-download"></i> Download File Flashing </a></h3></center>
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
                                    <th>Req Remote</th>
                                    <th style="width: 125px;"><center>Download</center></th>
                                </tr>
                            </thead>
                            <tbody>
                              <?php
                              include '../../../config/database/koneksi.php';
                              $data = mysqli_query($koneksi,"select * from s_order where email_buyer ='$_SESSION[email]'");
                              
                              while($d = mysqli_fetch_array($data)){
                                $total = $d['total'];
                                $status = $d['order_status'];
                                $invo = $d['order_invoice'];
                                $link = $d['link'];

                              switch ($status) {
                                case 'waiting':
                                  $status1 = 'info';
                                  break;
                                  case 'paid':
                                    $status1 = 'success';
                                    break;
                                 case 'cancel':
                                  $status1 = 'danger';
                                  break;
                              }
                                            switch ($status) {
                                  case 'paid':
                                    $req1 = 'enabled';
                                    break;
                                  default:
                                    $req1 = 'disabled';
                                    break;
                              }  switch ($status) {
                                  case 'paid':
                                    $link1 = 'req_parm.php?invo='.$invo.'';
                                    break;
                                  default:
                                    $link1 = 'disabled';
                                    break;
                              }   switch ($status) {
                                  case 'paid':
                                    $link2 = ''.$link.'';
                                    break;
                                  default:
                                    $link2 = 'disabled';
                                    break;
                              }

                                ?>
                                <tr>
                                   <td>
                                    <h5>#<?php echo $invo ?></h5>
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
                                      <small><a href="<?php echo $link1 ?>"><button type="button" class="btn btn-success btn-rounded" <?php echo $req1 ?>>Request</button></a></small>
                                    </td>
                                    <td>
                                       <center> <a href="<?php echo $link2 ?>" class="action-icon"> <button type="button" class="btn btn-primary btn-rounded" <?php echo $req1?>> <i class="uil-file-download"></i></button></a></center>
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
