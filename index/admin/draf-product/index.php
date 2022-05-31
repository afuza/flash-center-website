<?php
require_once "../view/header.php"
 ?>
 <?php
       include '../../../config/database/koneksi.php';
 ?>
<!-- star index -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <h4 class="page-title">Daftar Products</h4>
        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="row mb-2">
                    <div class="col-sm-4">
                        <a href="../add-product/index.php" class="btn btn-danger mb-2"><i class="mdi mdi-plus-circle mr-2"></i> Add Products</a>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table table-centered w-100 dt-responsive nowrap" id="products-datatable">
                        <thead class="thead-light">
                            <tr>
                                <th class="all">Product</th>
                                <th>Tag Product</th>
                                <th>Harga</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
    <?php
      $data = mysqli_query($koneksi,"select * from produk ");
      while($d = mysqli_fetch_assoc($data)){
        $tittle = $d['title'];
        $harga = $d['harga'];
        $sts = $d['status'];
         $tag = $d['tag'];
         $img = $d['img'];
 switch($sts){
        case 'aktif';
    $status = 'Aktif';
         break;
        case 'deaktif';
    $status = 'Deaktif';
         break;
} switch($sts){
        case 'aktif';
    $status1 = 'success';
         break;
        case 'deaktif';
    $status1 = 'danger';
         break;
}
         
?>
                            <tr>
                                <td>
                                    <img src="../../../config/fuction/file/<?php echo  $img ?>" alt="contact-img" title="contact-img" class="rounded mr-3" height="48" />
                                <?php echo $tittle ?>
                                </td>
                                <td>
                                   <?php echo $tag ?>
                                </td>
                                <td>
                                    <?php echo rupiah($harga); ?>
                                </td>
                                <td>
                                    <span class="badge badge-<?php echo $status1 ?>"><?php echo $status ?></span>
                                </td>
                                <td>
                                         
                                <a href="../../../config/fuction/product.php?id=<?php echo  $d['id_flashing']; ?>&action=hapus" class="action-icon"> <i class="mdi mdi-trash-can-outline"></i></a>
                                <a data-toggle="modal" data-target="#myModal<?php echo  $d['id_flashing']; ?>" href="#" class="action-icon"> <i class="uil-history"></i></a>
                                <a href="edit-product.php?id=<?php echo  $d['id_flashing']; ?>" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                          
<div id="myModal<?php echo  $d['id_flashing']; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="standard-modalLabel">Tampilkan</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
<form action="../../../config/fuction/product.php" method="POST">
<?php
$id = $d['id_flashing'];
      $zs = mysqli_query($koneksi,"select * from produk WHERE id_flashing='$id'");
      while( $q =  mysqli_fetch_array($zs)){
?>
            <div class="modal-body">
                
<p class='h4'>Note :</p>
  <p>Aktif = Menampilkan Produk</p>
  <p>Deaktif = Tidak Menampilkan Produk</p>
  
<input type="hidden" name="id" value="<?php echo $q['id_flashing']; ?>">

<div class="hasil-data"></div>
<select  name='status' class="custom-select mb-3">
    <option value="aktif">Aktif</option>
    <option value="deaktif">Deaktif</option>
</select>  
            </div>
            <div class="modal-footer">
                <button type="submit" name="btn" value="tampil" class="btn btn-primary">Update</button>
            </div>
</form>
<?
      }
?>
                                </td>
                            </tr>
                            
     <?php
      }
      ?>
                        </tbody>
                    </table>
                </div>
            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div> <!-- end col -->

</div>
        </div><!-- /.modal-content -->
</div><!-- /.modal-dialog --

<!-- end row -->
                <!-- content -->
<script>
$(document).ready(function() {
$('.datatab').DataTable();
} );
</script>
<?php
      require_once "../view/footer.php"
?>
