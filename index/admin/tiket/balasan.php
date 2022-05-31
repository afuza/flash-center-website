<?php
require_once "../view/header.php"
 ?>
 <br/>
  <h4 class="header-title">Admin</h4>
  <div class="row">
     <div class="col-lg-12">
         <div class="card">
             <div class="card-body">
                          <div class="row">
                                                    <div class="col">
                                                        <div data-simplebar style="max-height: 550px">
                                                            <div class="text-body">
                                                                                                  <?
                                    $id_lapor = $_GET['id'];
                                            $data = mysqli_query($koneksi,"select * from laporan where  id_laporan ='$id_lapor'");
                                            
                              while($d = mysqli_fetch_array($data))
                              {
                                            $isichat = $d['isilaporan'];
                                            $email = $d['email'];
                                            $status = $d['status'];
                                            $subject = $d['subject'];
                                            $masalah = $d['masalah'];
                                            $id_orderan = $d['id_orderan'];
                                            
                                            
           switch ($email) {
                                case 'Supportid_req@flashing.center':
                                  $od1 = 'Admin Flashing';
                                  break;
                               default:
                                $od1 = $email;
                                break;
            }
            switch ($email) {
                                case 'Supportid_req@flashing.center':
                                  $od = 'media bg-light p-2';
                                  break;
                               default:
                                $od ='media mt-1 p-2';
                                break;
            }
            ?>
                
                                                                <div class="<?php echo $od ?>">
                                                                    <div class="media-body">
                                                                        <h5 class="mt-0 mb-0 font-14">
                                                                            <span class="float-right text-muted font-12">Jam</span>
                                                                            <?php echo $od1 ?>
                                                                        </h5>
                                                                        <p class="mt-1 mb-0 text-muted font-14">
                                                                            <span class="w-75">
                                                                            <?php echo $isichat ?>
                                                                            </span>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                  <?}?>
                                                            </div>
                                                             </div>
                                                                </div>
                                                                 </div>
                                                                 </div>
</div>
</div>
</div>
<div class="row">
     <div class="col-lg-12">
<card>
    <div class="card-body">
               <form action="../../../config/fuction/lapor.php" method="POST">
           <input type="hidden" name="idlapor" value="<?php echo $id_lapor ?>">
          <input type="hidden" name="email" value="Supportid_req@flashing.center">
          <input type="hidden" name="status" value="<?php echo $status ?>">
          <input type="hidden" name="subject" value="<?php echo $subject ?>">
          <input type="hidden" name="invo" value="<?php echo $id_orderan ?>">
          <input type="hidden" name="masalah" value="<?php echo $masalah ?>">
          <br/>
  <div class="col">
    <label for="example-textarea">Balas Tiket</label>
    <textarea class="form-control" name="isi" id="validationCustom03" rows="5" required></textarea>
          </div>
          <br/>
<div class="col">
         <button type="submit" name="btn" value="balas1" class="btn btn-primary">Balas</button>
</div>
                 </form>
                 <div class="card-body">
</card>
</div>
</div>
</div>
</div>
<?php
      require_once "../view/footer.php"
?>
