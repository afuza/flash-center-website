<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Send Email | Flashing Center</title>
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
                              <a href="https://hpanel.flashing.center">
                                  <span><img src="https://flashingcenter.b-cdn.net/assets/images/logo/Flashing-center_logo.png" alt="" height="50"></span>
                              </a>
                          </div>

                            <div class="card-body p-4">

                                <div class="text-center m-auto">
                                    <img src="https://flashingcenter.b-cdn.net/assets/images/mail_sent.svg" alt="mail sent image" height="64" />
                                    <h4 class="text-dark-50 text-center mt-4 font-weight-bold">Chek Email kamu</h4>
                                    <?php
                                       $mail =$_GET['pesan'];
                                     ?>
                                    <p class="text-muted mb-4">
                                        Email telah dikirim ke email <b><?php echo $mail;?></b>.
                                        Akun anda aktif setelah mengklik link confrimasi di email tersebut chek inbox atau spma di email anda.
                                    </p>
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
