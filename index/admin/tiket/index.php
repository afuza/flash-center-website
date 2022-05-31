<?php
require_once "../view/header.php"
 ?>
 <br/>
 
 <div class="row">
     <div class="col-lg-12">
         <div class="card">
             <div class="card-body">
                 <h4 class="header-title">Tiket Laporan</h4>
                 <br/>
<table class="table table-centered mb-0">
    <thead>
        <tr>
            <th>ID Laporan</th>
            <th>Status</th>
            <th>Subject</th>
            <th>Masalah</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
                                                        <?php
           include '../../../config/database/koneksi.php';
          $data = mysqli_query($koneksi,"select * from laporan GROUP BY id_laporan");
           while($d = mysqli_fetch_array($data)){
             $id = $d['id_laporan'];
                             ?>
            <tr>
            <td>#<?php echo $id ?></td>
            <td><?php echo $d['status']; ?></td>
            <td><?php echo $d['subject']; ?></td>
            <td><?php echo $d['masalah']; ?></td>
            <td>
                
                
                <!-- Switch-->
                <div>
                  <a href="balasan.php?id=<?php echo $id; ?>"><button type="button" class="btn btn-light"><i class="mdi mdi-chat-processing"></i> </button></a>
                  
                 <a data-toggle="modal" data-target="#myModal<?php echo  $d['id_laporan']; ?>" href="#" class="action-icon"><button type="button" class="btn btn-danger"><i class="mdi mdi-update"></i> </button></a>
                 
                </div>
                                 <div id="myModal<?php echo  $d['id_laporan']; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="standard-modalLabel">Tampilkan</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
<form action="../../../config/fuction/lapor.php" method="POST">
<?php
$id = $d['id_laporan'];
      $zs = mysqli_query($koneksi,"select * from laporan WHERE id_laporan='$id' GROUP BY id_laporan ");
      while( $q =  mysqli_fetch_array($zs)){
?>
            <div class="modal-body">
                
<p class='h4'>Note : <?php echo $q['id_laporan']; ?></p>
  <p>Accept = Proses Perundingan</p>
  <p>Ditutup = Tutup Tiket Laporan</p>
  
<input type="hidden" name="id_lap" value="<?php echo  $q['id_laporan']; ?>">

<div class="hasil-data"></div>
<select  name='status' class="custom-select mb-3">
    <option value="Menunggu Balasan">Accept</option>
    <option value="ditutup">Ditutup</option>
</select>  
            </div>
            <div class="modal-footer">
                <button type="submit" name="btn" value="update" class="btn btn-primary">Update</button>
            </div>
</form>
<?
      }
?>
            </td>
        </tr>
        <?}?>
    </tbody>
</table>
</div>
</div>
</div>
</div>
<?php
      require_once "../view/footer.php"
?>
