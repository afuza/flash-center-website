<?php
require_once "../view/header.php"
 ?>
 <br/>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="row mb-2">
                    <div class="col-lg-8">
                        <form class="form-inline">
                            <div class="form-group mx-sm-3 mb-2">
                                <label for="status-select" class="mr-2">Status</label>
                                <select onchange="location = this.value;" class="custom-select" id="status-select">
                                    <option selected>Pilih ...</option>
                                    <option value="index.php?stv=accept">Accept</option>
                                    <option value="index.php?stv=selesai">selesai</option>
                                    <option value="Hindex.php?stv=waiting">waiting</option>
                                    <option value="Hindex.php?stv=proses">proses</option>
                                    <option value="index.php?stv=nope">nope</option>
                                </select>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table table-centered mb-0">
                        <thead class="thead-light">
                            <tr>
                                <th>Request ID</th>
                                <th>Tanggal Req</th>
                                <th>Tanggal Accept</th>
                                <th>Status</th>
                                <th>Nomor HP</th>
                                <th>Update</th>
                                <th>Chat</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
$id = $d['id_flashing'];
      $zs = mysqli_query($koneksi,"select * from req");
      while( $q =  mysqli_fetch_array($zs)){
          
          $id_req = $q['id_req'];
          $sts = $q['status'];
          $wkreq =$q['waktu_req'];
          $wkacc =$q['waktu_accept'];
          $nope = $q['nomor_hp'];
          $waktu = date('d-M-y', strtotime($wkacc));
          $waktu2 = date('h:i', strtotime($wak));
          
                                      switch ($sts) {
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
                                 switch ($wkacc) {
                                            case '0000-00-00 00:00:00':
                                              $wak = 'Belum Tersedia';
                                              break;
                                         default:
                                                $wak = $waktu;
                                          break;
                                  }switch ($sts) {
                                            case 'nope':
                                              $sts2 = 'disabled';
                                              break;
                                         default:
                                                $sts2 = 'enabled';
                                          break;
                                  }switch ($wkacc) {
                                            case '0000-00-00 00:00:00':
                                              $wak2 = '';
                                              break;
                                         default:
                                                $wak2 = $waktu2;
                                          break;
                                  }
                             switch ($wkacc) {
                                            case '0000-00-00 00:00:00':
                                              $wak3 = '';
                                              break;
                                         default:
                                                $wak3 = 'PM';
                                          break;
                                  }
?>
                            <tr>
                                <td>#<?php echo $id_req ?></a> </td>
                                <td>
                                    <?php echo date('d-M-y', strtotime($wkreq)); ?> <small class="text-muted"><?php echo date('h:i', strtotime($wkreq)); ?> PM</small>
                                </td>
                                  <td>
                                    <?php echo $wak ?> <small class="text-muted"><?php echo $wak2 ?><?php echo $wak3 ?></small>
                                </td>
                                <td>
                                    <h5><span class="badge badge-<?php echo $req2 ?>-lighten"><?php echo $sts ?></span></h5>
                                </td>
                                <td>
                                    <?php echo $nope ?>
                                </td>
                                <td>
                                    <button data-toggle="modal" data-target="#myModal<?php echo  $id_req ?>"  type="button" class="btn btn-danger btn-rounded" <?php echo $sts2 ?>><i class="mdi mdi-update"></i></button>
                                    
<div id="myModal<?php echo  $id_req ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="standard-modalLabel">Tampilkan</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
<form action="../../../config/fuction/add_request.php" method="POST">
    
    <?php
$id_req1 = $q['id_req'];
      $zv = mysqli_query($koneksi,"select * from req WHERE id_req='$id_req1'");
      while( $z =  mysqli_fetch_array($zv)){
?>



<div class="modal-body">
                
<p class='h4'>Note : </p>
  <p>Accept = Masi Persiapan</p>
  <p>Proses = Sudah di tempat Siap Remote atau membalas pesan</p>
  <p>selesai = req dan orderan selesai</p>
<input type="hidden" name="id_req" value="<?php echo $z['id_req']; ?>">
<input type="hidden" name="emailb" value="Supportid_req@flashing.center">
<input type="hidden" name="isc" value="<p>Hello Yang harus Kamus siapin </p>
                                            <p>
                                                1. Pastikan Terhubung ke internet
                                            </p>
                                            <p>
                                                2. Kabel Data atau download file zip di link di samping
                                            </p>
                                            <p>
                                              3. file Firemware Sudah kamu download
                                            </p>
                                            <p>
                                            </p>
                                            <p>
                                              4. Letakan semua file dalam 1 folder
                                            </p>
                                            <p>
                                              Jika Semua Sudah oke Balas Pesan ini Agar kira memulai meremot ke laptop anda
                                              jika melalui hp kami akan memandu anda, dan anda juga bisa wa Kami untuk detailnya.
                                            </p>">
<div class="hasil-data"></div>
 <div class="form-group mb-3">
<select name="status" class="custom-select" id="status-select">
                                    <option selected>Pilih ...</option>
                                    <option value="accept">Accept</option>
                                    <option value="selesai">selesai</option>
                                    <option value="proses">proses</option>
</select>
</div>

            <div class="form-group mb-3">
             <label for="validationCustom02">Link Upload Screen Shot :</label>
             <input type="text" class="form-control" name="link" id="validationCustom02"
                 placeholder="Link From save.flashing.center" value='<?php echo $z['link_ss']; ?>' required>
         </div>
            </div>
            <div class="modal-footer">
                <button type="submit" name="btn" value="update" class="btn btn-primary">Update</button>
            </div>
</form>
<?
}
?>
</div>
</div>
</div>

                                </td>
                                <td>
                                      <a href='chat.php?invo=<?php echo  $id_req ?>'><button type="button" class="btn btn-primary btn-rounded" <?php echo $sts2 ?>><i class="mdi mdi-dots-horizontal-circle"></i></button></a>
                                </td>
                            </tr>
<?
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

<!-- content -->
<script>
$(document).ready(function() {
$('.datatab').DataTable();
} );
</script>
<?php
      require_once "../view/footer.php"
?>
