<html lang="en">
    <head>
         <meta charset="utf-8" />
        <title>Register - Sign Up | Flashing - Center</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Flashing online Terbaik dan pertama di indonesia." name="flashinge-center" />
        <meta content="afuza pratama" name="afuza pratama" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="https://flashingcenter.b-cdn.net/assets/images/favicon.ico">

        <!-- App css -->
        <link href="https://flashingcenter.b-cdn.net/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="https://flashingcenter.b-cdn.net/assets/css/app-creative.min.css" rel="stylesheet" type="text/css" id="light-style" />
        <link href="https://flashingcenter.b-cdn.net/assets/css/app-creative-dark.min.css" rel="stylesheet" type="text/css" id="dark-style" />

    </head>

    <body class="authentication-bg" data-layout-config='{"darkMode":false}'>
          <div class="account-pages mt-5 mb-5">
          <div class="container">
              <div class="row justify-content-center">
                  <div class="col-lg-5">
                      <div class="card">
                          <!-- Logo-->
                          <div class="card-header pt-4 pb-4 text-center bg-dark">
                              <a href="https://hpanel.flashing.center">
                                  <span><img src="https://flashingcenter.b-cdn.net/assets/images/logo/Flashing-center_logo.png" alt="" height="50"></span>
                              </a>
                          </div>

                            <div class="card-body p-4">

                                <div class="text-center m-auto">
                                    <?php
                                            include "../config/database/koneksi.php";
                                            $token=$_GET['t'];
                                            $sql_cek=mysqli_query($koneksi,"SELECT * FROM member WHERE token='".$token."' and aktif='0'");
                                            $jml_data=mysqli_num_rows($sql_cek);
                                            if ($jml_data>0) {
                                                //update data users aktif
                                                mysqli_query($koneksi,"UPDATE member SET aktif='1' WHERE token='".$token."' and aktif='0'");
                                                echo '<img src="https://flashingcenter.b-cdn.net/assets/images/pngwing.com%20(1).png" alt="mail sent image" height="64" />
                                                 <h4 class="text-dark-50 text-center mt-4 font-weight-bold">Email Aprrove</h4>
                                                  <p class="text-muted mb-4">
                                                      Akun Kamu Sudah Aktif</b>.
                                                      Selamat kamu sudah bisa menukmati fasilitas di website ini terimakasih sudah mendaftar.
                                                  </p>';
                                            }else{
                                                       //data tidak di temukan
                                                        echo ' <img src="https://flashingcenter.b-cdn.net/assets/images/pngwing.com.png" alt="mail sent image" height="64" />
                                                        <h4 class="text-dark-50 text-center mt-4 font-weight-bold">Token Invalid</h4>
                                                          <p class="text-muted mb-4">
                                                              Token kamu Salah</b>.
                                                              klik kemabli link yang di kirimkan ke email Kamu.
                                                          </p>';
                                                      }
                                       ?>
                                    </div>

                                <form action="https://hpanel.flashing.center">
                                    <div class="form-group mb-0 text-center">
                                        <button class="btn btn-primary" type="submit"><i class="mdi mdi-home mr-1"></i> Back to login</button>
                                    </div>
                                </form>

                            </div> <!-- end card-body-->
                        </div>
                        <!-- end card-->

                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->

        <footer class="footer footer-alt">
            Flashing center
        </footer>

        <!-- bundle -->
        <script src="https://flashingcenter.b-cdn.net/assets/js/vendor.min.js"></script>
        <script src="https://flashingcenter.b-cdn.net/assets/js/app.min.js"></script>

    </body>
</html>
