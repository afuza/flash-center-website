<?php

  include "../../config/database/koneksi.php";

  if(!isset($_GET["reset_pass"])){

     header("https://hpanel.flashing.center/info/approve_activation.php?ErRor");

  }

  $end = $_GET["reset_pass"];

  $query = mysqli_query($koneksi, "SELECT * FROM reset_password WHERE code = '$end' ");

  if(mysqli_num_rows($query)==0){

    header("location:https://hpanel.flashing.center/info/approve_activation.php?ErRor");

  }

  $row = mysqli_fetch_array($query);

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title> Update Password | Flashing Center</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
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
                                <a href="https://flashing.center">
                                    <span><img src="https://flashingcenter.b-cdn.net/assets/images/logo/Flashing-center_logo.png" alt="" height="50"></span>
                                </a>
                            </div>

                            <div class="card-body p-4">

                                <div class="text-center w-75 m-auto">
                                    <h4 class="text-dark-50 text-center mt-0 font-weight-bold">Update Password</h4>
                                    <p class="text-muted mb-4">Masukan password baru kamu ingat jangan sampai lupa.</p>
                                </div>

                                <form action="../../config/fuction/up-password.php" method="post">
                                 <div class="form-group">
                                        <label for="password">Password *</label>
                                        <div class="input-group input-group-merge">
                                            <input type="password" id="pw1"  class="form-control" name="password" placeholder="Enter your password" required>
                                            <div class="input-group-append" data-password="false">
                                                <div class="input-group-text">
                                                    <span class="password-eye"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Ulangi Password *</label>
                                        <div class="input-group input-group-merge">
                                            <input type="password" id="pw2"  class="form-control" placeholder="Enter Again your password" required>
                                            <div class="input-group-append" data-password="false">
                                                <div class="input-group-text">
                                                    <span class="password-eye"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                  <div>
                                   <input type="hidden" value="<?php echo $row["email"]?>" name="email">
                                   </div>
                                   <br>
                                    <div class="form-group mb-0 text-center">
                                        <button class="btn btn-primary"  type="submit" name="new_pass" >Update Password</button>
                                    </div>
                                </form>
                            </div> <!-- end card-body-->
                        </div>
                        <!-- end card -->

                        <div class="row mt-3">
                            <div class="col-12 text-center">
                                <p class="text-muted">Back to <a href="https://hpanel.flashing.center/" class="text-muted ml-1"><b>Log In</b></a></p>
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
<script type="text/javascript">
    window.onload = function () {
        document.getElementById("pw1").onchange = validatePassword;
        document.getElementById("pw2").onchange = validatePassword;
    }

    function validatePassword(){
    var pass2=document.getElementById("pw2").value;
    var pass1=document.getElementById("pw1").value;
    if(pass1!=pass2)
        document.getElementById("pw2").setCustomValidity("Passwords Tidak Sama, Coba Lagi");
    else
        document.getElementById("pw2").setCustomValidity('');
    }
</script>
        <!-- bundle -->
        <script src="https://flashingcenter.b-cdn.net/assets/js/vendor.min.js"></script>
        <script src="https://flashingcenter.b-cdn.net/assets/js/app.min.js"></script>

    </body>
</html>
