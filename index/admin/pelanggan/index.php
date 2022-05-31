<?php
require_once "../view/header.php"
 ?>
  <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-light-lighten p-2">
            <li class="breadcrumb-item"><a href="#"><i class="uil-home-alt"></i> Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
        </ol>
  </nav>

<!-- star index -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="row mb-2">
                                       <form class="form-inline">
                            <div class="form-group mx-sm-3 mb-2">
                                <label for="status-select" class="mr-2">Status</label>
                                <select onchange="location = this.value;" class="custom-select" id="status-select">
                                    <option selected>Pilih ...</option>
                                    <option value="index.php?stv=accept">Accept</option>
                                    <option value="index.php?stv=selesai">selesai</option>
                                    <option value="index.php?stv=waiting">waiting</option>
                                    <option value="index.php?stv=proses">proses</option>
                                    <option value="index.php?stv=nope">nope</option>
                                </select>
                            </div>
                        </form>
                <div class="table-responsive">
                    <table class="table table-centered table-striped dt-responsive nowrap w-100" id="products-datatable">
                        <thead>
                            <tr>
                                <th>Pelanggan</th>
                                <th>Email</th>
                                <th>Nomor Hp</th>
                                <th>Tanggal Dibuat</th>
                                <th>Status</th>
                                <th>Update</th>
                                <th>Detail</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php

                            $zs = mysqli_query($koneksi,"SELECT * FROM alamat INNER JOIN member ON member.email = alamat.email");
                            while( $q =  mysqli_fetch_array($zs)){
            $nama = $q['nama'];
            $email = $q['email'];
            $sts = $q['aktif'];
            $foto = $q['foto'];
            $nope = $q['no_hp'];
            $join = $q['join'];
            $id_p = $q['id_member'];
            
                    switch ($sts) {
                                            case '1':
                                              $in = 'success';
                                              break;
                                         default:
                                                $in = 'danger';
                                          break;
                                  }
                                          switch ($sts) {
                                            case '1':
                                              $inf = 'Aktif';
                                              break;
                                        case '2':
                                              $inf = 'Banned';
                                              break;
                                         default:
                                                $inf = 'Tidak Aktif';
                                          break;
                                  }
          
                            ?>
                            <tr>
                                <td class="table-user">
                                    <img src="../../../config/fuction/file/<?php echo $foto ?>" alt="table-user" class="mr-2 rounded-circle">
                                    <?php echo $nama ?>
                                </td>
                                <td>
                                    <?php echo $email ?>
                                </td>
                                  <td>
                                    <?php echo $nope ?>
                                </td>
                                <td>
                                   <?php echo $join ?>
                                </td>
                                <td>
                                    <span class="badge badge-<?php echo $in ?>-lighten"><?php echo $inf ?></span>
                                </td>

                                <td>
                                    <button data-toggle="modal" data-target="#myModal<?php echo $id_p ?>"  type="button" class="btn btn-outline-primary btn-rounded">Status</button>
                                    
<div id="myModal<?php echo $id_p ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="standard-modalLabel">Tampilkan</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
<form action="../../../config/fuction/pelanggan-admin.php" method="POST">
    <?php
   $id_pl1 = $q['id_member'];
      $zv = mysqli_query($koneksi,"select * from member WHERE id_member='$id_pl1'");
      while( $z =  mysqli_fetch_array($zv)){
?>
<div class="modal-body">
                
<p class='h4'>Email : <?php echo $z['email']; ?></p>
  <p>Benned = Tidak Bisa Melakukan Login Lagi</p>
  <p>aktif = Jika Ada Tidak Bisa Aktif otomatis melalui link</p>
<input type="hidden" name="email" value="<?php echo $z['email']; ?>">
<input type="hidden" name="id_member" value="<?php echo $z['id_member']; ?>">
<div class="hasil-data"></div>
 <div class="form-group mb-3">
<select name="status" class="custom-select" id="status-select">
                                    <option selected>Pilih ...</option>
                                    <option value="2">Banned</option>
                                    <option value="1">Aktif</option>
</select>
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
                                  <a href='detail.php?email=<?php echo $email ?>' <button type="button" class="btn btn-outline-info btn-rounded">Detail</button>
                                   
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
<!-- content -->
<script>
$(document).ready(function() {
$('.datatab').DataTable();
} );
</script>
<?php
      require_once "../view/footer.php"
?>
