<?php
require_once "../view/header.php"
 ?>
 <br>
<?php

$tag = $_GET['tag'];

switch($tag){
        case 'FLASHING';
    $tag1 = 'FLASHING';
         break;
        case 'consutasi';
    $tag1 = 'Consultasi';
         break;
}

?>


<div class="row">
   <div class="col-md-12">
     <div class="card border-success border">
         <div class="card-body">
            <center><h3><i class="mdi mdi-shopping-outline "></i> <? echo $tag1; ?></a></h3></center>
        </div>
      </div>
    </div>
</div>



  <div class="row">
            <?php
      $tag = $_GET['tag'];
      include '../../../config/database/koneksi.php';
      $data = mysqli_query($koneksi,"select * from produk where tag ='$tag1' and status='aktif' ");
      while($d = mysqli_fetch_array($data)){
        $harga = $d['harga'];
        $title = $d['title'];
        $type = $d['type_flashing'];
       $isi = $d['isi'];
        ?>

  	                      <div class="col-md-4 col-lg-4">
                                   <div class="card">
                                       <div class="card-body">
                                           <p>
                                            <center><img src="../../../config/fuction/file/<?php echo $d['img']; ?> " style="width:200px; height:200px;" alt="<?php echo $d['title']; ?>"></center>
                                            </p>
                                               <a href="detail.php?id=<?php echo $d['id_flashing']; ?>"> <h4 class="card-title"><?php echo substr($title, 0, 27); ?></h4></a>
                                              
                                                <hr />
                                               <p> Harga : <b><?php echo rupiah($harga); ?></b></p>
                                               <p> Type Flashing : <b><?php echo $type ?></b> </p>
                                               <a href="detail.php?id=<?php echo $d['id_flashing']; ?>"><button type="button" class="btn btn-outline-info" style='float: right;'><i class="uil-circuit"></i> Detail</button></a>
                                             </div>
                                        </div>
                            </div>
                <?php
}
 ?>
  </div>



<?php
      require_once "../view/footer.php"
?>
