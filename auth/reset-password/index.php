<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Recover Password | Hyper - Responsive Bootstrap 4 Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="https://flashingcenter.b-cdn.net/assets/images/favicon.ico">

        <!-- App css -->
        <link href="https://flashingcenter.b-cdn.net/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="https://flashingcenter.b-cdn.net/assets/css/app-creative.min.css" rel="stylesheet" type="text/css" id="light-style" />
        <link href="https://flashingcenter.b-cdn.net/assets/css/app-creative-dark.min.css" rel="stylesheet" type="text/css" id="dark-style" />
        
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
                            <?php
                                    if(isset($_GET['pesan'])){
                              if($_GET['pesan'] == "emel1"){
                              echo "<script> Swal.fire({
                              icon: 'error',
                              title: 'Oops..',
                              text: 'Email Tidak Terdaftar !',
                              }) </script>";
                            }
                                    }
                            ?>
                            <div class="card-body p-4">
                                
                                <div class="text-center w-75 m-auto">
                                    <h4 class="text-dark-50 text-center mt-0 font-weight-bold">Reset Password</h4>
                                    <p class="text-muted mb-4">Enter your email address and we'll send you an email with instructions to reset your password.</p>
                                </div>

                                <form action="../../config/fuction/res-pass.php" method="post">
                                    <div class="form-group mb-3">
                                        <label for="emailaddress">Email address</label>
                                        <input class="form-control" type="email" id="emailaddress" name="email" required="" placeholder="Enter your email">
                                    </div>

                                    <div class="form-group mb-0 text-center">
                                        <button class="btn btn-primary" name="reset_pass" type="submit">Reset Password</button>
                                    </div>
                                </form>
                            </div> <!-- end card-body-->
                        </div>
                        <!-- end card -->

                        <div class="row mt-3">
                            <div class="col-12 text-center">
                                <p class="text-muted">Kemabli ke <a href="../login" class="text-muted ml-1"><b>Log In</b></a></p>
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
        
    </body>
</html>
