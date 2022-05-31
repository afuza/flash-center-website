<?php
session_start(); // Start session nya
// Kita cek apakah user sudah login atau belum
// Cek nya dengan cara cek apakah terdapat session username atau tidak
if($_SESSION['level']=="seller"){ // Jika session username ada berarti dia sudah login
  	header("location:../../index/seller/Dashboard/index.php");
}else if($_SESSION['level']=="pelanggan"){
  header("location:../../index/user/Dashboard/index.php");
}
?>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Log In | Flahsing Center</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="https://flashingcenter.b-cdn.net/assets/images/favicon.ico">

        <!-- App css -->
        <link href="https://flashingcenter.b-cdn.net/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="https://flashingcenter.b-cdn.net/assets/css/app-creative.min.css" rel="stylesheet" type="text/css" id="light-style" />
        <link href="https://flashingcenter.b-cdn.net/assets/css/app-creative-dark.min.css" rel="stylesheet" type="text/css" id="dark-style" />
        <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>

        <script src="https://flashingcenter.b-cdn.net/assets/sweetalert2/dist/sweetalert2.min.js"></script>
        <link rel="stylesheet" href="https://flashingcenter.b-cdn.net/assets/sweetalert2/dist/sweetalert2.min.css">
    </head>

    <body class="authentication-bg" data-layout-config='{"darkMode":false}'>

        <div class="account-pages mt-5 mb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <div class="card">

                            <!-- Logo -->
                            <div class="card-header pt-4 pb-4 text-center bg-dark">
                                <a href="https://flashing.center">
                                    <span><img src="https://flashingcenter.b-cdn.net/assets/images/logo/Flashing-center_logo.png" alt="" height="50"></span>
                                </a>
                            </div>

                            <div class="card-body p-4">

                                <div class="text-center w-75 m-auto">
                                    <h4 class="text-dark-50 text-center mt-0 font-weight-bold">Login</h4>
                                    <p class="text-muted mb-4"></p>
                                </div>
                                <?php
                            if(isset($_GET['pesan'])){
                              if($_GET['pesan'] == "gagal"){
                              echo "<script> Swal.fire({
                              icon: 'error',
                              title: 'Email Kamu Salah',
                              text: 'Email atau Password Kamu Salah !',
                              }) </script>";
                            }else if($_GET['pesan'] == "recaptcha"){
                                echo "<script> Swal.fire({
                                icon: 'error',
                                title: 'Chek Robot Dulu yah',
                                text: 'Kamu  Belum Recaptcha !',
                                }) </script>";
                             }else if($_GET['pesan'] == "aktif"){
                                echo "<script> Swal.fire({
                                icon: 'error',
                                title: 'Chek Email kamu',
                                text: 'Kamu  Belum aktivasi akun !',
                                }) </script>";
                              }else if($_GET['pesan'] == "benned"){
                                echo "<script> Swal.fire({
                                icon: 'error',
                                title: 'akun kamu Terbanned',
                                text: 'Kamu Melakukan Aktivitas Mecurigakan !',
                                }) </script>";
                              }

                            }
                            ?>
                                <form action="../../config/fuction/login.php" method="post" >

                                    <div class="form-group">
                                        <label for="emailaddress">Email address</label>
                                        <input class="form-control" type="email" name="email" id="emailaddress" required="" placeholder="Enter your email">
                                    </div>

                                    <div class="form-group">
                                        <a href="../reset-password" class="text-muted float-right"><small>Lupa password?</small></a>
                                        <label for="password">Password</label>
                                        <div class="input-group input-group-merge">
                                            <input type="password" id="password" class="form-control" name="password" placeholder="Enter your password">
                                            <div class="input-group-append" data-password="false">
                                                <div class="input-group-text">
                                                    <span class="password-eye"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="g-recaptcha" data-sitekey="6LezWeIUAAAAAEUYbb3qPshHccNaYlAukNdBR6Mh"></div>
                                    <div class="form-group mb-3">

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="checkbox-signin" checked>
                                            <label class="custom-control-label" for="checkbox-signin">Remember me</label>
                                        </div>
                                    </div>

                                    <div class="form-group mb-0 text-center">
                                        <button class="btn btn-primary" name="login" type="submit"> Log In </button>
                                    </div>

                                </form>
                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->

                        <div class="row mt-3">
                            <div class="col-12 text-center">
                                <p class="text-muted">Buat Account ? <a href="../u_singup" class="text-muted ml-1"><b>Sign Up</b></a></p>
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->

        <footer class="footer footer-alt">
           2019 - 2020 © Flashing - Center
        </footer>
        <script src="https://flashingcenter.b-cdn.net/asset/vendors/sweetalert/sweetalert.min.js"></script>
        <script src="https://flashingcenter.b-cdn.net/asset/vendors/jquery.avgrund/jquery.avgrund.min.js"></script>
        <!-- bundle -->
        <script src="https://flashingcenter.b-cdn.net/assets/js/vendor.min.js"></script>
        <script src="https://flashingcenter.b-cdn.net/assets/js/app.min.js"></script>
        <script src='https://www.google.com/recaptcha/api.js'></script>
        <script>
      grecaptcha.ready(function() {
        grecaptcha.execute('6LftWOIUAAAAAAwJAFsYHqacBN_UAHLs0FK_KX6Y', {action: 'homepage'}).then(function(token) {
           ...
        });
      });
      </script>
    </body>
</html>
