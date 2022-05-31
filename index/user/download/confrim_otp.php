<?php
require_once "../view/header.php"
 ?>
<?php
                           if(isset($_GET['info'])){
                             if($_GET['info'] == "gagal"){
                             echo "<script> Swal.fire({
                              position: 'center',
                               icon: 'error',
                               title: 'Kode salah',
                               showConfirmButton: false,
                               timer: 3000
                               }) </script>";
                           }
                           }
    ?>
 <div class="container-fluid">
<br/>
 <div class="row">
<center>
<div class="col-lg-6">
           <div class="card">
                 <div class="card-body">
                   <p class="text-muted font-14">
                  Kode sudah kami kirim ke nomor yang anda berikan jika dalam waktu 2 menit tidak masuk mohon klik resend kode agar kami kirim kembali.
                   </p>
                   <hr/>
                   <form action="../../../config/fuction/valid-kode.php" method="POST" class="needs-validation" novalidate>
                       <input type="hidden" name="nope" value="<?php echo $_GET['nope']; ?>">
                       <input type="hidden" name="invo" value="<?php echo $_GET['invo']; ?>">
                       <input type="hidden" name="email" value="<?php echo $_GET['email']; ?>">
         <div class="form-group mb-3">
             <label for="validationCustom03">Kode</label>
             <input type="text" class="form-control" name="kode" id="validationCustom03"
                 placeholder="Kode 4 angka" required>
         </div>
         <div class="form-group mb-3">
          </div>
          <button class="btn btn-outline-success" type="submit">Confrim</button>
     </form>
        <form action="../../../config/fuction/resend-code.php" method="POST">
            
            <p class="h5" > Nomor Hp : <?php echo $_GET['nope']; ?> </p>
            <input type="hidden" name="nope" value="<?php echo $_GET['nope']; ?>">
            <input type="hidden" name="invo" value="<?php echo $_GET['invo']; ?>">
             <button class="btn btn-outline-secondary" type="submit">resend kode</button>
             
       </form>
     </div>
     
    </div>
 </div>
</center>
 </div>
 <!-- end row -->


<?php
      require_once "../view/footer.php"
?>
