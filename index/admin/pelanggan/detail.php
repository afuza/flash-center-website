<?php
require_once "../view/header.php"
 ?>
 
 <br/>
<div class="row">
    <div class="col-lg-12">
        <!-- Personal-Information -->
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mt-0 mb-3">Information</h4>
                <p class="text-muted font-13">
Informasi Data User
                </p>
                <?php
             $data = mysqli_query($koneksi,"select * from alamat where email = '".$_GET['email']."'");
                while($d = mysqli_fetch_array($data)){
                ?>
                <div>
                    <center><img src="../../../config/fuction/file/<?php echo $d['foto']; ?>" alt="user" height="367" width="auto" ></center>
                </div>
                <hr/>
                <div class="text-left">
                    <p class="text-muted"><strong>Full Name :</strong> <span class="ml-2"><?php echo $d['nama']; ?></span></p>
                    <p class="text-muted"><strong>Alamat :</strong> <span class="ml-2"><?php echo $d['alamat']; ?></span></p>
                    <p class="text-muted"><strong>Kota :</strong><span class="ml-2"><?php echo $d['kota']; ?></span></p>
                    <p class="text-muted"><strong>Kode Pos :</strong><span class="ml-2"><?php echo $d['kode_pos']; ?></span></p>
                    <p class="text-muted"><strong>Provinsi :</strong><span class="ml-2"><?php echo $d['provinsi']; ?></span></p>
                    <p class="text-muted"><strong>Negara :</strong><span class="ml-2"><?php echo $d['negara']; ?></span></p>
                    <p class="text-muted"><strong>Email :</strong> <span class="ml-2"><?php echo $_SESSION['email']; ?></span></p>
                    <p class="text-muted"><strong>Nomor HP :</strong> <span class="ml-2"><?php echo $d['no_hp']; ?></span></p>
                </div>
                <?php } ?>
            </div>
        </div>
 <center>
        <!-- Personal-Information -->
                          <!-- Personal-Information -->
                     <!-- end col-->
                <!-- content -->
                  </div>
<?php
      require_once "../view/footer.php"
?>
