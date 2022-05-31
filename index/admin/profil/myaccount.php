<?php
require_once "../view/header.php"
 ?>
                 <?php
                include '../../../config/database/koneksi.php';
                $data = mysqli_query($koneksi,"select * from alamat where email = '".$_SESSION['email']."'");
                while($d = mysqli_fetch_array($data)){
                ?>
  <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-light-lighten p-2">
            <li class="breadcrumb-item"><i class="mdi mdi-account-circle mr-1"></i> My Account</li>
                  </ol>
  </nav>
  <div class="container-fluid">
<!-- star index -->
<div class="row">
    <div class="col-sm-12">
        <!-- Profile -->
        <div class="card">
            <div class="card-body profile-user-box">

                <div class="row">
                    <div class="col-sm-8">
                        <div class="media">
                            <span class="float-left m-2 mr-4"><img src="../../../config/fuction/file/<?php echo $d['foto']; ?>" style="height: 100px;" alt="" class="rounded-circle img-thumbnail"></span>
                            <div class="media-body">

                                <h4 class="my-1"><?php echo $_SESSION['nama']; ?></h4>
                                <p class="font-13 text-muted"> <?php echo $_SESSION['level']; ?></p>

                                <ul class="mb-0 list-inline">
                                    <li class="list-inline-item mr-3">
                                        
                                        <?php
                                                include '../../../config/database/koneksi.php';
                                                $dp = mysqli_query($koneksi,"SELECT * From saldo where email ='$_SESSION[email]' ");
                                                while($z = mysqli_fetch_array($dp)){
                                                  $hasil_total =$z['sal'];
                                                }
                                                  ?>
                                        <h5 class="mb-1"><?echo rupiah($hasil_total); ?></h5>
                                        <p class="mb-0 font-13">Total Saldo</p>
                                    </li>
                                    <li class="list-inline-item">
                                        <?php
                                                include '../../../config/database/koneksi.php';
                                                $arr =array();
                                                $s = mysqli_query($koneksi,"select * from s_order where email_buyer ='$_SESSION[email]'");
                                                while($m = mysqli_fetch_array($s)){
                                                  $arr[]=$m;
                                                }
                                                $count = count($arr)
                                                ?>
                                        <h5 class="mb-1"><?php echo $count ?></h5>
                                        <p class="mb-0 font-13">Total Order</p>
                                    </li>
                                </ul>
                            </div> <!-- end media-body-->
                        </div>
                    </div> <!-- end col-->

                    <div class="col-sm-4">
                        <div class="text-center mt-sm-0 mt-3 text-sm-right">
                           <a href="setting.php?id=<?php echo $_SESSION['email'];?>">
                            <button type="button" class="btn btn-light">
                                <i class="mdi mdi-account-edit mr-1"></i> Edit Profile
                            </button>
                          </a>
                        </div>
                    </div> <!-- end col-->
                </div> <!-- end row -->

            </div> <!-- end card-body/ profile-user-box-->
        </div><!--end profile/ card -->
    </div> <!-- end col-->
</div>
<!-- end row -->
<center>
<div class="row">
    <div class="col-lg-12">
        <!-- Personal-Information -->
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mt-0 mb-3">Information</h4>
                <p class="text-muted font-13">
Informasi Data User
                </p>

                <hr/>
                <div class="text-left">
                    <p class="text-muted"><strong>Full Name :</strong> <span class="ml-2"><?php echo $_SESSION['nama']; ?></span></p>
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
