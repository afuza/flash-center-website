<?php
require_once "../view/header.php"
 ?>
  <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-light-lighten p-2">
            <li class="breadcrumb-item">
              <i class="mdi mdi-account-edit mr-1">
              </i> Settings</li>
        </ol>
  </nav>

<!-- star index -->
<div class="row">
  <div class="col-lg-6">
      <div class="card">
          <div class="card-body">
            <?php
          	include '../../../config/database/koneksi.php';
          	$id = $_GET['id'];
          	$data = mysqli_query($koneksi,"select * from alamat where email ='$id'");
          	while($d = mysqli_fetch_array($data)){
          		?>
              <h4 class="header-title">Data Personal</h4>
<br></br>
              <div class="tab-content">
                  <div class="tab-pane show active" id="horizontal-form-preview" enctype="multipart/form-data">
                      <form class="form-horizontal" action="../../../config/fuction/test.php" method="POST" >
                          <div class="form-group row mb-3">
                              <label for="inputEmail3" class="col-3 col-form-label">Email</label>
                              <div class="col-9">
                                  <input type="email" class="form-control" id="inputEmail3" name="email" value="<?php echo $d['email']; ?>" >
                              </div>
                          </div>
                          <div class="form-group row mb-3">
                              <label for="inputPassword3" class="col-3 col-form-label">Full Name</label>
                              <div class="col-9">
                                   <input type="text" id="example-input-normal" name="nama" class="form-control" value="<?php echo $d['nama']; ?>">
                              </div>
                          </div>
                          <div class="form-group row mb-3">
                              <label for="inputPassword5" class="col-3 col-form-label">No Hp</label>
                              <div class="col-9">
                                   <input type="text" id="example-input-normal" name="no_hp" class="form-control" value="<?php echo $d['no_hp']; ?>">
                              </div>
                          </div>
                          <div class="form-group row mb-3">
                              <label for="inputPassword5" class="col-3 col-form-label">No Hp</label>
                              <div class="col-9">
                                 <div class="fallback">
                                  <input type="file" name="foto[]" required="required" accept="image/*" onchange="preview_image(event)" multiple />
                                 <img id="output_image"/>
                               </div>
                              </div>
                          </div>


                  </div> <!-- end preview-->

            </div> <!-- end tab-content-->

          </div>  <!-- end card-body -->
      </div>  <!-- end card -->
  </div>  <!-- end col -->

    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">Billing Adress</h4>
  <br></br>
                <div class="tab-content">
                    <div class="tab-pane show active" id="horizontal-form-preview">
                          <div class="form-group row mb-3">
                                <label for="inputEmail3" class="col-3 col-form-label">Alamat</label>
                                <div class="col-9">
                                   <input type="text" id="example-input-normal" name="alamat" class="form-control" value="<?php echo $d['alamat']; ?>">
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <label for="inputPassword3" class="col-3 col-form-label">kota</label>
                                <div class="col-9">
                                     <input type="text" id="example-input-normal" name="kota" class="form-control" value="<?php echo $d['kota']; ?>">
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <label for="inputPassword5" class="col-3 col-form-label">Kode Pos</label>
                                <div class="col-9">
                                     <input type="text" id="example-input-normal" name="kode_pos" class="form-control" value="<?php echo $d['kode_pos']; ?>">
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <label for="inputPassword5" class="col-3 col-form-label">Provinsi</label>
                                <div class="col-9">
                                     <input type="text" id="example-input-normal" name="provinsi" class="form-control" value="<?php echo $d['provinsi']; ?>">
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <label for="inputPassword5" class="col-3 col-form-label">Negara</label>
                                <div class="col-9">
                                     <input type="text" id="example-input-normal" name="negara" class="form-control" value="<?php echo $d['no_hp']; ?>">
                                </div>
                            </div>

                    </div> <!-- end preview-->

              </div> <!-- end tab-content-->
            </div>  <!-- end card-body -->
        </div>  <!-- end card -->
    </div>  <!-- end col -->
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card">
        <div class="card-header">
            Upadte Data
        </div>
        <div class="card-body">
            <button  class="btn btn-primary">Update</button>
        </div>

        <div class="card-footer text-muted">

        </div>
    </div> <!-- end card-->
</div> <!-- end col-->
</div>
</form>
<?php
}
?>          <!-- content -->

<?php
      require_once "../view/footer.php"
?>
