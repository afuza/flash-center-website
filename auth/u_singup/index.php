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
        <script src="https://flashingcenter.b-cdn.net/assets/sweetalert2/dist/sweetalert2.min.js"></script>
        <link rel="stylesheet" href="https://flashingcenter.b-cdn.net/assets/sweetalert2/dist/sweetalert2.min.css">
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
                                    <h4 class="text-dark-50 text-center mt-0 font-weight-bold">Daftar Pelanggan</h4>
                                    <p class="text-muted mb-4">ini data dengan benar utamakan yang bertanda (*) </p>
                                </div>
                                <?php
                            if(isset($_GET['pesan'])){
                              if($_GET['pesan'] == "emailError"){
                              echo "<script> Swal.fire({
                              icon: 'error',
                              title: 'Email Error',
                              text: 'Email kamu tidak aktif atau tidak benar !',
                              }) </script>";
                            }else if($_GET['pesan'] == "gak"){
                                echo "<script> Swal.fire({
                                icon: 'error',
                                title: 'Chek Robot Dulu yah',
                                text: 'Kamu  Belum cetang!',
                                }) </script>";
                              }else if($_GET['pesan'] == "emel1"){
                                  echo "<script> Swal.fire({
                                  icon: 'error',
                                  title: 'Email Terdaftar',
                                  text: 'Emailnya Sudah Kedaftar!',
                                  }) </script>";
                                }
                            }
                            ?>
                                <form action="../../config/fuction/daftar_member.php" method="post">

                                    <div class="form-group">
                                        <label for="fullname">Full Name *</label>
                                        <input class="form-control" type="text" id="fullname" name="nama" placeholder="Enter your name">
                                    </div>
                                    <div class="form-group">
                                        <label for="emailaddress">Email address *</label>
                                        <input class="form-control" type="email" id="emailaddress" name="email" required placeholder="Enter your email" required>
                                    </div>
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
                                    <div class="form-group" id="only-number">
                                        <label for="emailaddress">No Hp</label>
                                        <input class="form-control" type="tel" onkeypress="return hanyaAngka(event)" maxlength="13" name="Telepon" id="number" required placeholder="081247723">
                                    </div>
                                       <div class="form-group">
                                          <div class="custom-control custom-checkbox">
                                              <input type="checkbox" class="custom-control-input" name="checkbox" value="check" id="checkbox-signup">
                                              <label class="custom-control-label" for="checkbox-signup">I accept <a href="https://fb.com" class="text-muted">Terms and Conditions</a></label>
                                          </div>
                                    </div>
                                                                      <div class="g-recaptcha" data-sitekey="6LezWeIUAAAAAEUYbb3qPshHccNaYlAukNdBR6Mh"></div>
                                                                      <br>
                                                                       <br>
                                   <div class="form-group mb-0 text-center">
                                        <button class="btn btn-primary" name="daftar" type="submit" onclick="if(!this.form.checkbox.checked){Swal.fire({
                                        icon: 'error',
                                        title: 'Oops..',
                                        text: 'You must agree to the terms first !',
                                        });return false}" > Sign Up </button>
                                    </div>

                                </form>
                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->

                        <div class="row mt-3">
                            <div class="col-12 text-center">
                                <p class="text-muted">Sudah Punya Account ? <a href="https://hpanel.flashing.center/" class="text-muted ml-1"><b>Log In</b></a></p>
                            </div> <!-- end col-->
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
        <script>
		function hanyaAngka(evt) {
		  var charCode = (evt.which) ? evt.which : event.keyCode
		   if (charCode > 31 && (charCode < 48 || charCode > 57))

		    return false;
		  return true;
		}
	        </script>
          <script src='https://www.google.com/recaptcha/api.js'></script>
        <!-- bundle -->
        <script src="https://flashingcenter.b-cdn.net/assets/js/vendor.min.js"></script>
        <script src="https://flashingcenter.b-cdn.net/assets/js/app.min.js"></script>

    </body>
</html>
