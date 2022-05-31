<?php
require_once "../view/header.php"
 ?>
 <div class="row">
     <div class="col-12">
         <div class="page-title-box">
             <h4 class="page-title">ADD JASA</h4>
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
                       <div class="form-group mt-3 mt-xl-0">
                           <label for="projectname" class="mb-0">Gambar</label>
                           <p class="text-muted font-14">Gabar Yang Disarankan 1200x800 (px). MAX 1 X (.png | .jpg | .jpeg | .gif)</p>

                           <form class="dropzone" id="myAwesomeDropzone" action="../../../config/fuction/product.php" method="POST" enctype="multipart/form-data">
                               <div class="fallback">
                                  <input type="file" name="foto[]" required="required" accept="image/*" onchange="preview_image(event)" multiple />
                                 <img id="output_image"/>
                               </div>
                       </div>
                         <div class="form-group">
                             <label for="projectname">Judul Product :</label>
                             <input type="text" id="projectname" name="judul" class="form-control" placeholder="Masukan Judul Jasa" required>
                         </div>
                         <div class="form-group mb-0">
                             <label for="project-overview">TAG WAJIB : </label>
                             <select name="tag" class="form-control select2"  data-toggle="select2">
                                 <option value="FLASHING">FLASHING</option>
                                 <option value="Consultasi">Consultasi</option>
                             </select>

                         </div>

                     </div> <!-- end col-->

                     <div class="col-xl-6">
                                 <!-- Date View -->

                       <div class="form-group">
                           <label for="project-budget">Harga
                             <h6 class="text-muted">Notes:</h6>
                             <small>
                               Angka Saja tidak pakai titik.
                             </small>
                           </label>
                           <input type="text" name="harga" class="form-control" placeholder="harga jasa">
                       </div>
                                              <div class="form-group">
                           <label for="project-budget">Merek
                            </label>
                           <input type="text" name="merek" class="form-control" placeholder="Brand Smartphone (Asus ..)">
                       </div>

                       <div class="form-group">
                           <label for="project-budget">Type Smartphone
                           </label>
                           <input type="text" name="type_smartphone" class="form-control" placeholder="Type (Asus Zefone 2 )">
                       </div>
                 <div class="form-group mb-0">
                             <label for="project-overview">Konsultasi : </label>
                             <select name="konsultasi" class="form-control select2"  data-toggle="select2">
                                 <option value="Termasuk">Termasuk</option>
                            <option value="Tidak Termasuk">Tidak Termasuk</option>
                 </select>
                 </div>
                      <div class="form-group mb-0">
                             <label for="project-overview">Type Flashing : </label>
                             <select name="type_flashing" class="form-control select2"  data-toggle="select2">
                                 <option value="Vdidio">Vdidio</option>
                            <option value="Doc Tutorial">Doc Tutorial</option>
                            <option value="Remote Dekstop">Remote Dekstop</option>
                            
                 </select>
                 </div>
                   <div class="form-group">
                           <label for="project-budget">Besar File Keseluruhan
                           </label>
                           <input type="text" name="besarf" class="form-control" placeholder="masukan angka di akhiri besar (2.4 GB)">
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
                 <div class="form-group">
                           <label for="project-budget">Link Download
                           </label>
                           <input type="text" name="linkd" class="form-control" placeholder="Masukakan link download dari web cloud">
                  </div>
             </div> <!-- end card-body -->
             
         </div> <!-- end card-->
         
     </div> <!-- end col-->
 </div>
 <div class ="row">
<div class ="col-md-12">
<div class ="card">
  <div class ="card-body">
    <div class="form-group">
        <label for="project-overview">Detail</label>
        <textarea  class="form-control" name="detail" id="summernote-basic">
        </textarea>
    </div>
  </div>
</div>
 </div>
</div>
 <!-- end row-->
 <div class="row">
     <div class="col-md-12">
         <div class="card">
         <div class="card-header">
             Posting
         </div>
         <div class="card-body">
             <input class="btn btn-primary" type="submit" name="btn" value="simpan"  class="btn btn-primary">
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
