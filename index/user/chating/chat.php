<?php
require_once "../view/header.php"
 ?>
 <?php
 include '../../../config/database/koneksi.php';
 ?>
 <?php
 header("refresh: 60;");
 $invo = $_GET['invo'];
 $email_s = 'Supportid_req@flashing.center';
 ?>
<br/>

<!-- star index -->
<?php
                              $data = mysqli_query($koneksi,"select * from req where id_req ='$invo'");
                              while($d = mysqli_fetch_array($data)){
                                $id_remote= $d['id_remote'];
                                $pass_remote = $d['pass_remote'];
                                $status = $d['status'];
                                $app = $d['app'];
                                 $link = $d['link_ss'];
}
         switch ($status) {
                                case 'accept':
                                  $status1 = 'info';
                                  break;
                                  case 'proses':
                                    $status1 = 'warning';
                                    break;
                        }
          switch ($app ) {
                                case 'Ultra':
                                  $app1 = 'Ultra Viewer';
                                  break;
                                  case 'Team':
                                $app1 = 'Team Viewer';
                                break;
            }
?>
                <!-- content -->
                <div class="row">
                <!-- start chat users-->
                <div class="col-xl-4 col-lg-6 order-lg-1 order-xl-1">
                    <div class="card border-success border">
                        <div class="card-body p-0">
                              <div class="card-body">
                                <center><p class="h4"> Information</p></center>
                                <hr class="mt-1" />
                                <div class="card text-white bg-success">
                                  <div class="card-body">
                                    <center> Remote Pelanggan </center>
                               <p class="h5"> ID <?php echo $app1 ?> : <?php echo $id_remote ?></p>
                               <p class="h5"> Password       : <?php echo $pass_remote ?></p>
                             </div>
                              </div>
<button type="button"  class="btn btn-block btn-xs btn-info" data-toggle="modal" data-target="#signup-modal">Ubah</button>
<div id="signup-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-body">
                <div class="text-center mt-2 mb-4">
                    <a href="index.html" class="text-success">
                        <span><img src="assets/images/logo-dark.png" alt="" height="18"></span>
                    </a>
                </div>

                <form class="pl-3 pr-3" action="#">

                    <div class="form-group">
                        <label for="username">ID Remote Desktop</label>
                        <input class="form-control" type="email" id="username" name="" required="" value="<?php echo $id_remote ?>">
                    </div>

                    <div class="form-group">
                        <label for="emailaddress">Password Remote Desktop</label>
                        <input class="form-control" type="email" id="emailaddress" name="" value="<?php echo $pass_remote ?>">
                    </div>
                    <div class="form-group">
                        <label for="emailaddress">Password</label>
  <select name="app" class="custom-select mb-3">
    <option  selected>Pilih Aplikasi</option>
    <option value="Team">Team Viewer</option>
    <option value="Ultra">Ultra Viewer</option>
  </select>    
                    </div>
                    <div class="form-group text-center">
                        <button class="btn btn-info" type="submit">Ganti</button>
                    </div>

                </form>

            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

                               <hr />
                               <p class="h5"> Status Remote  :</p>
                               <p><i class="mdi mdi-circle text-<?php echo $status1 ?>"></i><?php echo $status ?></span></p>

                               <p class="h5"> Wathapp Admin  :</p>
                               <p>085623742</P>
                              <p class="h5"> Email :</p>
                              <p>Supportid_req@flashing.center</p>


                          <hr class="mt-1" />
                               <center><p class="h5">Cloud Password</p></center>
                              <p class="h5"> Account id  :</p>
                               <p><?php echo $invo ?></P>
                              <p class="h5"> Password :</p>
                              <?php $pass1 = ''.$invo.'123'; ?>
                              <p><?php echo $pass1  ?></p>

                                     <a href="<?php echo $link ?>" target="_blank"><button type="button" class="btn btn-block btn-xs btn-success">klik di sini untuk mengirim file dan Screen Shot</button></a>

                                </div> <!-- end Tab Pane-->

                        </div> <!-- end card-body-->
                    </div>
                </div>
                <div class="col-xl-8 col-lg-auto order-lg-4 order-xl-1">
                    <div class="card">
                        <div class="card-body">
                            <ul class="conversation-list" data-simplebar style="max-height: 600px">
                                
                                  <?
                                            $data = mysqli_query($koneksi,"select * from chating where  id_chat ='$invo'");
                              while($d = mysqli_fetch_array($data)){
                                            $isichat = $d['isichat'];
                                            $email = $d['email_b'];
                                            $e_ses = $_SESSION[email];
                                            
                             switch ($email) {
                                case 'Supportid_req@flashing.center':
                                  $od1 = 'Admin Flashing';
                                  break;
                               default:
                                $od1 =''.$_SESSION['nama'].'';
                                break;
            }
            switch ($email) {
                                case 'Supportid_req@flashing.center':
                                  $od = '';
                                  break;
                               default:
                                $od ='odd';
                                break;
            }
                                               ?>
                                <li class="clearfix <?php echo $od ?>">
                                    <div class="chat-avatar">
                                        <img src="https://flashingcenter.b-cdn.net/assets/images/users/avatar-5.jpg" class="rounded" alt="Shreyu N" />
                                        <i>10:00</i>
                                    </div>
                                    <div class="conversation-text">
                                        <div class="ctext-wrap">
                                            <i><?php echo $od1 ?></i>
                              
                             <?php echo $isichat ?>
                              
                                          
                                        </div>
                                    </div>
                              </li>
                              <?
                              }
                              ?>
                              </ul>
                            <div class="row">
                                <div class="col">
                                    <div class="mt-2 bg-light p-3 rounded">
                                        <form action="../../../config/fuction/chat-post.php" method="POST" class="needs-validation" novalidate="" name="chat-form" 
                                            id="chat-form">
                                            <div class="row">
                                                <div class="col mb-2 mb-sm-0">
                                                    <input type="hidden" name="emailb" value="<?php echo $_SESSION['email'];?>">
                                                    <input type="hidden" name="invo" value="<?php echo $invo?>">
                                                    <input type="text" name='isichat' class="form-control border-0" placeholder="Enter your text" required="">
                                                    <div class="invalid-feedback">
                                                        Please enter your messsage
                                                    </div>
                                                </div>
                                                <div class="col-sm-auto">
                                                    <div class="btn-group">
                                                        <button type="submit" class="btn btn-success chat-send btn-block"><i class='uil uil-message'></i></button>
                                                    </div>
                                                </div> <!-- end col -->
                                            </div> <!-- end row-->
                                        </form>
                                    </div>
                                </div> <!-- end col-->
                            </div>
                            <!-- end row -->
                        </div> <!-- end card-body -->
                    </div> <!-- end card -->
                </div>
                <!-- end chat area-->
              </div>

<?php
      require_once "../view/footer.php"
?>
