<?php
require_once "../view/header.php"
 ?>
 <br/>
 
 <div class="row">
     <div class="col-lg-12">
         <div class="card">
             <div class="card-body">
                 <h4 class="header-title">Lapor Masalah</h4>
               <div  class="float-right" >
                  <a href="input-lapor.php"><button type="button" class="btn btn-success">Laporkan  Masalah</button></a>
                </div> 
                 <br/>
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
          $data = mysqli_query($koneksi,"select * from laporan where email ='$_SESSION[email]' GROUP BY id_laporan");
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
                 <a href="../../../config/fuction/lapor.php?id_lapor=<?php echo $id; ?>&hs=hapus"> <button type="button" class="btn btn-danger"><i class="mdi mdi-window-close"></i> </button></a>
                </div>
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
