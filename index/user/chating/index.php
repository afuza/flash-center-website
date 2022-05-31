<?php
require_once "../view/header.php"
 ?>
 <?php
   include '../../../config/database/koneksi.php';
 ?>
 <?php
                           if(isset($_GET['info'])){
                             if($_GET['info'] == "sukses"){
                            echo "<script> Swal.fire({
                             position: 'center',
                              icon: 'success',
                              title: 'Request berhasil di buat',
                              showConfirmButton: false,
                              timer: 3000
                              }) </script>";
                           }if($_GET['info'] == "add"){
                            echo "<script> Swal.fire({
                             position: 'center',
                              icon: 'info',
                              title: 'Sudah Melakukan Request',
                              showConfirmButton: false,
                              timer: 3000
                              }) </script>";
                           }
                           }
    ?>
<?php
$test = "accept";
?>
<br/>

<!-- star index -->

                <!-- content -->
                <div class="row">
                <!-- start chat users-->
                <div class="col-xl-12 col-lg-12 order-lg-1 order-xl-1">
                    <div class="card">
                        <div class="card-body p-0">
                           
                          <table class="table table-centered mb-0">
    <thead class="thead-dark">
        <tr>
            <th>Waktu Request</th>
            <th>Waktu Accept</th>
            <th>Id_Request</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
                <?php
        $data = mysqli_query($koneksi,"select * from req where email = '".$_SESSION['email']."'");
while($d = mysqli_fetch_array($data)){
    
    
$confrim = $d['confrim'];
$id_req = $d['id_req'];
$status = $d['status'];
$waktu_req = $d['waktu_req'];
$waktu_accept = $d['waktu_accept'];
$nope=$d['nomor_hp'];

                          switch ($status) {
                            case 'accept':
                              $req1 = 'enabled';
                              break;
                          case 'proses':
                                $req1 = 'enabled';
                              break;
                           case 'waiting':
                                $req1 = 'disabled';
                              break;
                              case 'selesai':
                                   $req1 = 'disabled';
                                 break;
                                 default:
                                $req1 = 'enabled';
                                break;
                          }
                            switch ($status) {
                                            case 'accept':
                                              $req2 = 'info';
                                              break;
                                          case 'proses':
                                                $req2 = 'warning';
                                              break;
                                           case 'waiting':
                                                $req2 = 'danger';
                                              break;
                                            case 'selesai':
                                                   $req2 = 'success';
                                            break;
                                            default:
                                                $req2 = 'dark';
                                            break;
                              }
                          switch ($status) {
                                    case 'accept':
                                      $req3 = 'chat.php?invo='.$id_req.'';
                                      break;
                                  case 'proses':
                                        $req3 = 'chat.php?invo='.$id_req.'';
                                      break;
                                   case 'waiting':
                                        $req3 = '#';
                                      break;
                                      case 'selesai':
                                           $req3 = '#';
                                         break;
                                default:
                                    $req3 = 'https://hpanel.flashing.center/index/user/download/confrim_otp.php?nope='.$nope.'&invo='.$id_req.'';
                                break;
                                  }
                            switch ($status) {
                                            case 'nope':
                                              $req6 = 'confrim';
                                            break;
                                            default:
                                              $req6 = 'view';
                                            break;
                              }
                                switch ($status) {
                                            case 'nope':
                                              $req7 = 'dark ';
                                            break;
                                            default:
                                              $req7 = 'primary';
                                            break;
                              }
                              
?>
        <tr>
            <td><?php echo $waktu_req; ?>  WIB</td>
            <td><?php echo $waktu_accept; ?> WIB</td>
            <td>
              <?php echo $id_req; ?>
            </td>
            <td><i class="mdi mdi-circle text-<?php echo $req2; ?>"></i><?php echo $status; ?></td>
<td>
    <a href='<?php echo $req3; ?>'><button type="button" class="btn btn-outline-<?php echo $req7; ?> btn-rounded" <?php echo $req1; ?>></i><?php echo $req6; ?></button></a>
    
</td>
</tr>
<?
}
?>
    </tbody>
</table>
                                </div> <!-- end col-->
                            </div>
                            <!-- end row -->
                        </div> <!-- end card-body -->
                    </div> <!-- end card -->
                </div>
                <!-- end chat area-->
              </div>

<?php
      require_once "../view/footer.php"
?>
