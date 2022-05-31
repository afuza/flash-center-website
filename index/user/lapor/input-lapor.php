<?php
require_once "../view/header.php"
 ?>
 <div class="container-fluid">
<br/>
 <div class="row">
     <div class="col-lg-12">
         <div class="card">
             <div class="card-body">
                 <h4 class="header-title">Lapor Masalah</h4>

                 <p class="text-muted font-14">
Harap diperhatikan dan kamu pastikan bahwa memang terjadi masalah oleh file yang kamu download atau ada seuatu yang lain kamu tinggal memilih keluhan apa yang kamu miliki dan  kami akan membantunya
                 </p>
                 <hr/>
<form action="../../../config/fuction/lapor.php" method="POST" class="needs-validation" novalidate>
 <div class="form-row">
        <div class="col">
             <label>Subject Pesan</label>
             <input type="text" class="form-control" name="subject" value="" id="validationCustom02" required>
         </div>
      <div class="form-group mb-3">
    <label for="validationCustom03">Pilih Masalah Kamu</label>
        <select name="masalah" class="custom-select mb-3">
          <option value="pengembalian dana" required>pengembalian dana</option>
          <option value="Error pembelian" required>Error pembelian</option>
          <option value="Masalah Remote" required>Masalah Remote</option>
        </select>
      </div>
</div>
 <div class="form-row">
         <div class="col">
             <label for="validationCustom03">Mauskan ID ORDERAN</label>
             <input type="text" class="form-control" name="invo" id="validationCustom03"
                 placeholder="#SJKV21" required>
         </div>
         <div class="col">
             <label for="validationCustom03">Email</label>
             <input type="text" class="form-control" name="email" id="validationCustom03"
                 placeholder="Masukkan Email kamu" required>
         </div>
</div>
</div>

<div class="col">
    <label for="example-textarea">Text area</label>
    <textarea class="form-control" name="isi" id="validationCustom03" rows="5" required></textarea>
</div>
<br/>
<div class="col">
      <button type="submit" name="btn" value="input" class="btn btn-primary">Kirim</button>
</div>
<br/>
</form>

 </div>
    </div>
 </div>
 </div>
 <!-- end row -->


<?php
      require_once "../view/footer.php"
?>
