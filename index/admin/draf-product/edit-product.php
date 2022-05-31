<?php
require_once "../view/header.php"
 ?>
    <?php
      $data = mysqli_query($koneksi,"select * from produk where id_flashing = '".$_GET['id']."' ");
      while($d = mysqli_fetch_assoc($data)){
         $title = $d['title'];
         $tag = $d['tag'];
         $lama = $d['lama'];
         $merek = $d['merek'];
         $type_smartphone = $d['type_smartphone'];
         $type_flashing = $d['type_flashing'];
         $konsultasi = $d['konsultasi'];
         $besarf = $d['besarf'];
         $link = $d['link'];
        $harga = $d['harga'];
        $idkun = $_GET['id'];
      }
      ?>
 <div class="row">
     <div class="col-12">
         <div class="page-title-box">
             <h4 class="page-title">UPDATE PRODUCT</h4>
         </div>
     </div>
 </div>
 <!-- end page title -->
 <div class="row">
     <div class="col-12">
         <div class="card">
             <div class="card-body">
                <div class="row">
                     <div class="col-xl-6">
                         <form action="../../../config/fuction/product.php" method="POST">
                         <div class="form-group">
                             <label for="projectname">Judul Product :</label>
                             <input type="text" id="projectname" name="judul" class="form-control" value="<?php echo $title ?>" required>
                         </div>
                       <div class="form-group">
                           <label for="project-budget">Harga
                             <h6 class="text-muted">Notes:</h6>
                             <small>
                               Angka Saja tidak pakai titik.
                             </small>
                           </label>
                           <input type="text" name="harga" class="form-control" value="<?php echo $harga ?>" >
                       </div>
                                              <div class="form-group">
                           <label for="project-budget">Merek
                            </label>
                           <input type="text" name="merek" class="form-control" value="<?php echo $merek ?>">
                       </div>

                       <div class="form-group">
                           <label for="project-budget">Type Smartphone
                           </label>
                           <input type="text" name="type_smartphone" class="form-control"value="<?php echo $type_smartphone ?>">
                       </div>
                     </div> <!-- end col-->

                     <div class="col-xl-6">
                                 <!-- Date View -->
                 <div class="form-group mb-0">
                             <label for="project-overview">Konsultasi : </label>
                             <select name="konsultasi" class="form-control select2"  data-toggle="select2" >
                                 <option value="<?php echo $konsultasi ?>"><?php echo $konsultasi ?></option>
                            <option value="Termasuk">Termasuk</option>
                            <option value="Tidak Termasuk">Tidak Termasuk</option>
                 </select>
                 </div>
                      <div class="form-group mb-0">
                             <label for="project-overview">Type Flashing : </label>
                            <select name="type_flashing" class="form-control select2"  data-toggle="select2">
                          <option value="<?php echo $type_flashing ?>"><?php echo $type_flashing ?></option>
                            <option value="Vdidio">Vdidio</option>
                            <option value="Doc Tutorial">Doc Tutorial</option>
                            <option value="Remote Dekstop">Remote Dekstop</option>
                            
                 </select>
                 </div>
                   <div class="form-group">
                           <label for="project-budget">Besar File Keseluruhan
                           </label>
                           <input type="text" name="besarf" class="form-control" value="<?php echo $besarf ?>">
                       </div>
                  <div class="form-group">
                           <label for="project-budget">Link Download
                           </label>
                           <input type="text" name="linkd" class="form-control" value="<?php echo $link ?>">
                  </div>
                         <!-- Date View -->
                         <div class="form-group mb-0">
                             <label for="project-overview">Lama Pengerjaan
                               <h6 class="text-muted">Notes:</h6>
                               <small>
                                 Khusus Remote.
                               </small>
                             </label>
                             </div>
                             <select name="tag2" class="form-control select2"data-toggle="select2">
                                  <option value="<?php echo $lama ?>"><?php echo $lama ?></option>
                                 <option value="Individual">Individual</option>
                                 <option value="30 Menit">30 Menit</option>
                                 <option value="45 Menit">45 Menit</option>
                                 <option value="1 jam">1 jam </option>
                                 <option value="2 jam">2 jam</option>
                                 <option value="2,5 jam">2,5 jam</option>
                                 <option value="4 jam">4 jam </option>
                             </select>
                         </div>
                     </div> <!-- end col-->
                     
                 </div>
                 <!-- end row -->
             </div> <!-- end card-body -->
             
         </div> <!-- end card-->
         
     </div> <!-- end col-->
 </div>
 <!-- end row-->
 <div class="row">
     <div class="col-md-12">
         <div class="card">
         <div class="card-header">
             Posting
         </div>
         <input type="hidden" name="id" value="<?php echo $idkun ?>">
         <div class="card-body">
             <input class="btn btn-primary" type="submit" name="btn" value="update"  class="btn btn-primary">
         </div>
         <div class="card-footer text-muted">
         </div>
     </div> <!-- end card-->
 </div> <!-- end col-->
 </div>
</form>

<!-- container -->

<?php
      require_once "../view/footer.php"
?>
