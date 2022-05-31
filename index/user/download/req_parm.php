<?php
require_once "../view/header.php"
 ?>
 <div class="container-fluid">
<br/>
 <div class="row">
     <div class="col-lg-12">
         <div class="card">
             <div class="card-body">
                 <h4 class="header-title">Requet Remote Dekstop</h4>

                 <p class="text-muted font-14">
                   Harap di perhatikan dan isi semua bidang yang di butuhkan pastikan kamu sudah terhubung ke internet saat mengirim id dan Password teamviewer/untra viewer, kesalaahn mengirim id dan password
                   tidak berpengaruh apapun anda dapat mengganti id dan password jika sudah di accept.
                 </p>
                 <hr/>


             </div> <!-- end card-body-->
         </div> <!-- end card-->
     </div> <!-- end col-->
     <div class="col-lg-6">
       <div class="card">
           <div class="card-body">
             <h4 class="header-title">Download Teamviewer :</h4>
             <a href="https://www.teamviewer.com/en-us/download/windows/"> <img  src="https://www.teamviewer.com/wp-content/themes/tv-wordpress-theme/dist/media/logo-teamviewer.svg"  width="120" height="67"> </a>
             <a href="https://play.google.com/store/apps/details?id=com.teamviewer.quicksupport.market"> <img  src="https://flashingcenter.b-cdn.net/assets/images/google-play-badge.png"  width="150" height="67"> </a>

           </div>
           </div>
           </div>
           <div class="col-lg-6">
             <div class="card">
                 <div class="card-body">
                 <h4 class="header-title">Download Ultraviewer :</h4>
                   <a href="https://www.teamviewer.com/en-us/download/windows/"> <img  src="https://i.pinimg.com/originals/0a/4a/9b/0a4a9b086cb4dc4bf2a283fb09401659.png"  width="220" height="67"> </a>
                 </div>
                 </div>
                 </div>
<div class="col-lg-12">
           <div class="card">
                 <div class="card-body">
                   <p class="text-muted font-14">
                    Setelah klik submit Kami akan mengirim kode sms ke nomor telphone kamu kami harap kamu menggunakan nomor yang benar dan aktif untuk menerima kode OTP.
                   </p>
                   <hr/>
                              <?php
                              include '../../../config/database/koneksi.php';
                              $data = mysqli_query($koneksi,"select * from s_order where  order_invoice='$_GET[invo]'");
                              
                              while($d = mysqli_fetch_array($data)){
                                $email = $d['email_buyer'];
                               
                                ?>
                                
                   <form action="../../../config/fuction/add_request.php" method="POST" class="needs-validation" novalidate>
         <input type="hidden" name="invoreq" value="<?php echo $_GET['invo']; ?>">
         <div class="form-group mb-3">
             <label>Email</label>
             <input type="text" class="form-control" name="email" value="<?php echo $email ?>" id="validationCustom02" required>
         </div>
                 <div class="form-group mb-3">
             <label for="validationCustom03">Pilih Aplikasi</label>
  <select name="app" class="custom-select mb-3">
    <option value="Team" required>Team Viewer</option>
    <option value="Ultra" required>Ultra Viewer</option>
  </select>  
         </div>
         <div class="form-group mb-3">
             <label for="validationCustom02">ID Teamviewer / Ultraviewer</label>
             <input type="text" class="form-control" name="idteam" id="validationCustom02"
                 placeholder="ID Remote" required>
         </div>
         <div class="form-group mb-3">
             <label for="validationCustom02">Password</label>
             <input type="text" class="form-control" name="idpass" id="validationCustom02"
                 placeholder="Password id Remote" required>
         </div>
         <div class="form-group mb-3">
             <label for="validationCustom03">Nomor Telephone</label>
             <input type="text" class="form-control" name="nope" id="validationCustom03"
                 placeholder="+628..Gunakan +628" required>
         </div>
         <div class="form-group mb-3">
             <div class="custom-control custom-checkbox form-check">
                 <input type="checkbox" class="custom-control-input" id="invalidCheck"
                     required>
                 <label class="custom-control-label" for="invalidCheck">Setuju dengan persyaratan
                      dan kondisi</label>
             </div>
         </div>
         <button type="submit" name="btn" value="add" class="btn btn-primary" type="submit">Requet</button>
         
     </form>
<?php
}
?>

 </div>
    </div>
 </div>
 </div>
 <!-- end row -->


<?php
      require_once "../view/footer.php"
?>
