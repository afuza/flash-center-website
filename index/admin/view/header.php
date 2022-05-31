<?php
	session_start();

	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:https://hpanel.flashing.center");
	}
  ?>
  <?php
   include '../../../config/database/koneksi.php';
  ?>
<!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Flashing | Center</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Flashing CEnter For esy Setup You Management system" name="description" />
        <meta content="Coderthemes" name="Afuza Pratama" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="https://flashingcenter.b-cdn.net/assets/images/logo/Flashing-center_symbol.ico">
        <script src="https://kit.fontawesome.com/0849f2d419.js" crossorigin="anonymous"></script>
        <!-- third party css -->
        <link href="https://flashingcenter.b-cdn.net/assets/css/vendor/summernote-bs4.css" rel="stylesheet" type="text/css" />
        <link href="https://flashingcenter.b-cdn.net/assets/css/vendor/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
        <link href="https://flashingcenter.b-cdn.net/assets/css/vendor/buttons.bootstrap4.css" rel="stylesheet" type="text/css" />
        <link href="https://flashingcenter.b-cdn.net/assets/css/vendor/dataTables.bootstrap4.css" rel="stylesheet" type="text/css" />
    <!-- Summernote css -->
        
          <!-- App css -->
        <link href="https://flashingcenter.b-cdn.net/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="https://flashingcenter.b-cdn.net/assets/css/app-creative.min.css" rel="stylesheet" type="text/css" id="light-style" />
        <link href="https://flashingcenter.b-cdn.net/assets/css/app-creative-dark.min.css" rel="stylesheet" type="text/css" id="dark-style" />

                <script src="https://flashingcenter.b-cdn.net/assets/sweetalert2/dist/sweetalert2.min.js"></script>
        <link rel="stylesheet" href="https://flashingcenter.b-cdn.net/assets/sweetalert2/dist/sweetalert2.min.css">
        <script type='text/javascript'>
        function preview_image(event)
        {
         var reader = new FileReader();
         reader.onload = function()
         {
          var output = document.getElementById('output_image');
          output.src = reader.result;
         }
         reader.readAsDataURL(event.target.files[0]);
        }
        </script>
                <style>
       
        #output_image
        {
         width:100%;
         
        }
        .btn-file {
    position: relative;
    overflow: hidden;
}
.btn-file input[type=file] {
    position: absolute;
    top: 0;
    right: 0;
    min-width: 100%;
    min-height: 100%;
    font-size: 100px;
    text-align: right;
    filter: alpha(opacity=0);
    opacity: 0;
    outline: none;
    background: white;
    cursor: inherit;
    display: block;
}
        </style>
        
<?php
        function rupiah($angka){

	$hasil_rupiah = "Rp " . number_format($angka,0,',','.');
	return $hasil_rupiah;

}

?>
    </head>

    <body class="loading" data-layout-config='{"leftSideBarTheme":"dark","layoutBoxed":true, "leftSidebarCondensed":false, "leftSidebarScrollable":false,"darkMode":false, "showRightSidebarOnStart": true}'>
        <!-- Begin page -->
        <div class="wrapper">
            <!-- ========== Left Sidebar Start ========== -->
            <div class="left-side-menu">

                <!-- LOGO -->
                <a href="https://hpanel.flashing.center/index/admin/Dashboard/index.php" class="logo text-center logo-light">
                    <span class="logo-lg">
                        <img src="https://flashingcenter.b-cdn.net/assets/images/logo/Flashing-center_logo.png" alt="" height="49">
                    </span>
                    <span class="logo-sm">
                        <img src="https://flashingcenter.b-cdn.net/assets/images/logo/Flashing-center_logo.png" alt="" height="16">
                    </span>
                </a>

                <!-- LOGO -->
                <a href="https://hpanel.flashing.center/index/admin/Dashboard/index.php" class="logo text-center logo-dark">
                    <span class="logo-lg">
                        <img src="https://flashingcenter.b-cdn.net/assets/images/logo-dark.png" alt="" height="16">
                    </span>
                    <span class="logo-sm">
                        <img src="https://flashingcenter.b-cdn.net/assets/images/logo_sm_dark.png" alt="" height="16">
                    </span>
                </a>

                <div class="h-100" id="left-side-menu-container" data-simplebar>

         <!--- Sidemenu -->
                    <ul class="metismenu side-nav">

                        <li class="side-nav-title side-nav-item">Navigation</li>

                        <li class="side-nav-item">
                            <a href="../Dashboard/index.php" class="side-nav-link">
                                <i class="uil-home-alt"></i>
                            <span> Dashboards </span>
                            </a>
                        </li>
                                  <li class="side-nav-item">
                                      <a href="../add-product/index.php" class="side-nav-link">
                                          <i class="uil-book-medical"></i>
                                          <span> Add Jasa </span>
                                        </a>
                                    </li>
																		<li class="side-nav-item">
																				<a href="../draf-product/index.php" class="side-nav-link">
																						<i class="uil-book-medical"></i>
																						<span>Daftar Jasa</span>
																					</a>
																			</li>
                        <li class="side-nav-title side-nav-item">Management</li>
												<li class="side-nav-item">
														<a href="../req-remote/index.php" class="side-nav-link">
																<i class="uil-book-medical"></i>
																<span> Request Remote</span>
															</a>
													</li>
                        <li class="side-nav-item">
                            <a href="../laporan/index.php" class="side-nav-link">
                                <i class="mdi mdi-cellphone-nfc"></i>
                                <span> Laporan Penjualan </span>
                            </a>
                        </li>
												<li class="side-nav-item">
														<a href="../payment/index.php" class="side-nav-link">
																<i class="uil-invoice"></i>
																<span> Payment </span>
															</a>
													</li>
                        <li class="side-nav-item">
                            <a href="../pelanggan/index.php" class="side-nav-link">
                                <i class="uil-comments-alt"></i>
                                <span> Data Pelanggan </span>
                            </a>
                        </li>
                      <li class="side-nav-title side-nav-item mt-1">AddOns</li>

                      <li class="side-nav-item">
                          <a href="../tiket/index.php" class="side-nav-link">
                              <i class="mdi mdi-help-box"></i>
                              <span>Tiket Laporan </span>
                          </a>
                      </li>
                      <li class="side-nav-item">
                          <a href="../../../config/fuction/logout.php" class="side-nav-link">
                              <i class="uil-left-arrow-from-left"></i>
                              <span> Logout  </span>
                          </a>
                      </li>
                        </li>

                    </ul>

                    <!-- Help Box -->
                    <!-- end Help Box -->
                    <!-- End Sidebar -->

                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->

              <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">
                    <!-- Topbar Start -->
                    <div class="navbar-custom">
                        <ul class="list-unstyled topbar-right-menu float-right mb-0">

                              <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <i class="dripicons-bell noti-icon"></i>
                                    <span class="noti-icon-badge"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-lg">

                                    <!-- item-->
                                    <div class="dropdown-item noti-title">
                                        <h5 class="m-0">
                                            <span class="float-right">
                                                <a href="javascript: void(0);" class="text-dark">
                                                    <small>Clear All</small>
                                                </a>
                                            </span>Notification
                                        </h5>
                                    </div>

                                    <div style="max-height: 230px;" data-simplebar>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-primary">
                                                <i class="mdi mdi-comment-account-outline"></i>
                                            </div>
                                            <p class="notify-details">Caleb Flakelar commented on Admin
                                                <small class="text-muted">1 min ago</small>
                                            </p>
                                        </a>

                                        <!-- item-->
                                    </div>

                                    <!-- All-->
                                    <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
                                        View All
                                    </a>

                                </div>
                            </li>

                            <li class="dropdown notification-list">
                                  <a class="nav-link dropdown-toggle nav-user arrow-none mr-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="false"
                                      aria-expanded="false">
                                      <span class="account-user-avatar">
                                          <?php
                                           include '../../../config/database/koneksi.php';
                                           $data = mysqli_query($koneksi,"select * from alamat where email = 'Supportid_req@flashing.center'");
                                           while($d = mysqli_fetch_array($data)){

                                               ?>
                                          <img src="../../../config/fuction/file/<?php echo $d['foto']; ?>" alt="user-image" class="rounded-circle">

                                          <?php
                                           }
                                           ?>
                                      </span>
                                      <span>
                                          <span class="account-user-name"><?php echo $_SESSION['nama']; ?></span>
                                          <span class="account-position"><?php echo $_SESSION['level']; ?></span>
                                      </span>
                                  </a>
                                  <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated topbar-dropdown-menu profile-dropdown">
                                      <!-- item-->
                                      <a href="../../../config/fuction/logout.php" class="dropdown-item notify-item">
                                          <i class="mdi mdi-logout mr-1"></i>
                                          <span>Logout</span>
                                      </a>

                                  </div>
                              </li>
                        <button class="button-menu-mobile open-left disable-btn">
                            <i class="mdi mdi-menu"></i>
                        </button>

                    </div>
                    <!-- end Topbar -->

                    <!-- Start Content-->


                        <!-- start page title -->
