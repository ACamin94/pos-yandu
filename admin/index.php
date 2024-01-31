<?php
session_start();

if(!$_SESSION["username"] AND !$_SESSION["password"])
{
    header('location:../index.php?pesan=2');
}
?>

<!DOCTYPE html>

<!-- =========================================================
* Sneat - Bootstrap 5 HTML Admin Template - Pro | v1.0.0
==============================================================

* Product Page: https://themeselection.com/products/sneat-bootstrap-html-admin-template/
* Created by: ThemeSelection
* License: You must have a valid license purchased in order to legally use the theme for your project.
* Copyright ThemeSelection (https://themeselection.com)

=========================================================
 -->
<!-- beautify ignore:start -->
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free">

  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Posyandu yuk</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="/posyandu/assets/img/favicon/logo-01.png" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <link rel="stylesheet" href="../assets/vendor/libs/apex-charts/apex-charts.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="../assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../assets/js/config.js"></script>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            <a href="index.php" class="app-brand-link">
              <span class="app-brand-logo demo">
                
                  <img src="/posyandu/assets/img/favicon/logoremove.png" width="30" viewBox="0 0 30 42">
                </svg>
              </span>
              <span class="app-brand-text demo menu-text fw-bolder ms-2">E-Posyandu</span>
            </a>

            <a href="index.php" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
              <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1">
            <!-- Dashboard -->
            <li class="menu-item active">
              <a href="index.php" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
              </a>
            </li>
			<hr class="sidebar-divider my-1">
            <!-- Layouts -->
            <li class="menu-header small text-uppercase"><span class="menu-header-text">Pengguna</span></li>
            <li class="menu-item">
              <a href="index.php?tujuan=pengguna" class="menu-link ">
                <i class="menu-icon tf-icons bx bx-user"></i>
                <div data-i18n="Layouts">Data Petugas</div>
              </a>              
            </li>

            <li class="menu-item">
              <a href="index.php?tujuan=dataibu" class="menu-link ">
                <i class="menu-icon tf-icons bx bx-user"></i>
                <div data-i18n="Layouts">Data Ibu</div>
              </a>              
            </li>

            <li class="menu-item">
              <a href="index.php?tujuan=dataanak" class="menu-link ">
                <i class="menu-icon tf-icons bx bx-user"></i>
                <div data-i18n="Layouts">Data Anak</div>
              </a>              
            </li>

            

            <li class="menu-header small text-uppercase"><span class="menu-header-text">Vaksin & imunisasi</span></li>
            <li class="menu-item">
              <a href="index.php?tujuan=datavaksin" class="menu-link ">
                <i class="menu-icon tf-icons bx bx-tag"></i>
                <div data-i18n="Layouts">Data Vaksin</div>
              </a>              
            </li>

            <li class="menu-item">
              <a href="index.php?tujuan=kategori" class="menu-link ">
                <i class="menu-icon tf-icons bx bx-detail"></i>
                <div data-i18n="Layouts">Imunisasi</div>
              </a>              
            </li>

            

            <!-- Forms & Tables -->
            <li class="menu-header small text-uppercase"><span class="menu-header-text">Forms &amp; Tables</span></li>
            <!-- Forms -->
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-detail"></i>
                <div data-i18n="Form Elements">Form Elements</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="forms-basic-inputs.html" class="menu-link">
                    <div data-i18n="Basic Inputs">Basic Inputs</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="forms-input-groups.html" class="menu-link">
                    <div data-i18n="Input groups">Input groups</div>
                  </a>
                </li>
              </ul>
            </li>
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-detail"></i>
                <div data-i18n="Form Layouts">Form Layouts</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="form-layouts-vertical.html" class="menu-link">
                    <div data-i18n="Vertical Form">Vertical Form</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="form-layouts-horizontal.html" class="menu-link">
                    <div data-i18n="Horizontal Form">Horizontal Form</div>
                  </a>
                </li>
              </ul>
            </li>
            <!-- Tables -->
            <li class="menu-item">
              <a href="tables-basic.html" class="menu-link">
                <i class="menu-icon tf-icons bx bx-table"></i>
                <div data-i18n="Tables">Tables</div>
              </a>
            </li>
            <!-- Misc -->
            <li class="menu-header small text-uppercase"><span class="menu-header-text">Misc</span></li>
            <li class="menu-item">
              <a
                href="https://github.com/themeselection/sneat-html-admin-template-free/issues"
                target="_blank"
                class="menu-link"
              >
                <i class="menu-icon tf-icons bx bx-support"></i>
                <div data-i18n="Support">Support</div>
              </a>
            </li>
            <li class="menu-item">
              <a
                href="https://themeselection.com/demo/sneat-bootstrap-html-admin-template/documentation/"
                target="_blank"
                class="menu-link"
              >
                <i class="menu-icon tf-icons bx bx-file"></i>
                <div data-i18n="Documentation">Documentation</div>
              </a>
            </li>
          </ul>
        </aside>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->
			<nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
			     
				  <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0   d-xl-none ">
					<a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
					  <i class="bx bx-menu bx-sm"></i>
					</a>
				  </div>
      

      <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">

        

        
        <!-- Search -->
        <div class="navbar-nav align-items-center">
          <div class="nav-item navbar-search-wrapper mb-0">
            <a class="nav-item nav-link search-toggler px-0" href="javascript:void(0);">
              <i class="bx bx-search bx-sm"></i>
              <span class="d-none d-md-inline-block text-muted">Search </span>
            </a>
          </div>
        </div>
		
        <!-- /Search -->       

        <ul class="navbar-nav flex-row align-items-center ms-auto">     
        
          <!-- Language -->
          <li class="nav-item dropdown-language dropdown me-2 me-xl-0">
            <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
              <i class='bx bx-globe bx-sm'></i>
            </a>
            <ul class="dropdown-menu dropdown-menu-end">
              <li>
                <a class="dropdown-item" href="javascript:void(0);" data-language="en" data-text-direction="ltr">
                  <span class="align-middle">English</span>
                </a>
              </li>
              <li>
                <a class="dropdown-item" href="javascript:void(0);" data-language="fr" data-text-direction="ltr">
                  <span class="align-middle">French</span>
                </a>
              </li>
              <li>
                <a class="dropdown-item" href="javascript:void(0);" data-language="ar" data-text-direction="rtl">
                  <span class="align-middle">Arabic</span>
                </a>
              </li>
              <li>
                <a class="dropdown-item" href="javascript:void(0);" data-language="de" data-text-direction="ltr">
                  <span class="align-middle">German</span>
                </a>
              </li>
            </ul>
          </li>
          <!-- /Language -->          
          
          <!-- Style Switcher -->
          <li class="nav-item dropdown-style-switcher dropdown me-2 me-xl-0">
            <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
              <i class='bx bx-sun'></i>
            </a>
            <ul class="dropdown-menu dropdown-menu-end dropdown-styles">
              <li>
                <a class="dropdown-item" href="javascript:void(0);" data-theme="light">
                  <span class="align-middle"><i class='bx bx-sun me-2'></i>Light</span>
                </a>
              </li>
              <li>
                <a class="dropdown-item" href="javascript:void(0);" data-theme="dark">
                  <span class="align-middle"><i class="bx bx-moon me-2"></i>Dark</span>
                </a>
              </li>
              <li>
                <a class="dropdown-item" href="javascript:void(0);" data-theme="system">
                  <span class="align-middle"><i class="bx bx-desktop me-2"></i>System</span>
                </a>
              </li>
            </ul>
          </li>
          <!-- / Style Switcher-->
          

          <!-- Notification -->
          <li class="nav-item dropdown-notifications navbar-dropdown dropdown me-3 me-xl-1">
            <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
              <i class="bx bx-bell bx-sm"></i>
              <span class="badge bg-danger rounded-pill badge-notifications">5</span>
            </a>
            <ul class="dropdown-menu dropdown-menu-end py-0">             
              <li class="dropdown-menu-footer border-top p-3">
                <button class="btn btn-primary text-uppercase w-100">view all notifications</button>
              </li>
            </ul>
          </li>
          <!--/ Notification -->
          <!-- User -->
          <li class="nav-item navbar-dropdown dropdown-user dropdown">
            <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
              <div class="avatar avatar-online">
                <img src="../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle">
              </div>
            </a>
            <ul class="dropdown-menu dropdown-menu-end">
              <li>
                <a class="dropdown-item" href="pages-account-settings-account.html">
                  <div class="d-flex">
                    <div class="flex-shrink-0 me-3">
                      <div class="avatar avatar-online">
                        <img src="//assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle">
                      </div>
                    </div>
                    <div class="flex-grow-1">
                      <span class="fw-medium d-block">John Doe</span>
                      <small class="text-muted">Admin</small>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <div class="dropdown-divider"></div>
              </li>
              <li>
                <a class="dropdown-item" href="pages-profile-user.html">
                  <i class="bx bx-user me-2"></i>
                  <span class="align-middle">My Profile</span>
                </a>
              </li>
              <li>
                <a class="dropdown-item" href="pages-account-settings-account.html">
                  <i class="bx bx-cog me-2"></i>
                  <span class="align-middle">Settings</span>
                </a>
              </li>             
              
              <li>
                <div class="dropdown-divider"></div>
              </li>
              <li>
                <a class="dropdown-item" href="auth-login-cover.html" target="_blank">
                  <i class="bx bx-power-off me-2"></i>
                  <span class="align-middle">Log Out</span>
                </a>
              </li>
            </ul>
          </li>
          <!--/ User -->
          

        </ul>
      </div>

      
      <!-- Search Small Screens -->
      <div class="navbar-search-wrapper search-input-wrapper  d-none">
        <input type="text" class="form-control search-input container-xxl border-0" placeholder="Search..." aria-label="Search...">
        <i class="bx bx-x bx-sm search-toggler cursor-pointer"></i>
      </div>
      
      
  </nav>
          

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            
            <!-- / Content -->
			
			<?php
                    if(!isset($_GET["tujuan"]))
                    {
                        include("home.php");
                    }
                    elseif ($_GET["tujuan"]=='pengguna')
                    {
                        include("pengguna.php");
                    }
                    elseif ($_GET["tujuan"]=='tambahpengguna')
                    {
                        include("tambahpengguna.php");
                    }
                    elseif ($_GET["tujuan"]=='editpengguna')
                    {
                        include("editpengguna.php");
                    }
                    elseif ($_GET["tujuan"]=='dataibu')
                    {
                        include("dataibu.php");
                    }
                    elseif ($_GET["tujuan"]=='tambahdataibu')
                    {
                        include("tambahdataibu.php");
                    }
                    elseif ($_GET["tujuan"]=='dataanak')
                    {
                        include("dataanak.php");
                    }
                    elseif ($_GET["tujuan"]=='tambahdataanak')
                    {
                        include("tambahdataanak.php");
                    }
                    elseif (($_GET["tujuan"])=='kategori') 
                    {
                        include("kategori.php");
                    }
                    elseif ($_GET["tujuan"]=='tambahkategori')
                    {
                        include("tambahkategori.php");
                    }
                    elseif (($_GET["tujuan"])=='editkategori') 
                    {
                        include("editkategori.php");
                    }
                    
                    elseif (($_GET["tujuan"])=='ticket') 
                    {
                        include("ticket.php");
                    }
                    elseif (($_GET["tujuan"])=='tambahticket') 
                    {
                        include("tambahticket.php");
                    }
                    elseif (($_GET["tujuan"])=='tambahmeja') 
                    {
                        include("tambahmeja.php");
                    }
                    elseif (($_GET["tujuan"])=='editmeja') 
                    {
                        include("editmeja.php");
                    }
                    elseif (($_GET["tujuan"])=='menu') 
                    {
                        include("menu.php");
                    }
                    elseif (($_GET["tujuan"])=='tambahmenu') 
                    {
                        include("tambahmenu.php");
                    }
                    elseif (($_GET["tujuan"])=='editmenu') 
                    {
                        include("editmenu.php");
                    }
                    elseif (($_GET["tujuan"])=='transaksi') 
                    {
                        include("transaksi.php");
                    }
                    elseif (($_GET["tujuan"])=='tambahtransaksi') 
                    {
                        include("tambahtransaksi.php");
                    }
                ?>

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
              
            </footer>
			<footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; 2024, made with ❤️ | by Achmad Khoirul Amin  </span>
                    </div>
                </div>
            </footer>
			
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

    

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../assets/vendor/libs/popper/popper.js"></script>
    <script src="../assets/vendor/js/bootstrap.js"></script>
    <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="../assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="../assets/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="../assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="../assets/js/dashboards-analytics.js"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>

<script>
  $(document).ready(function(){
		$("#idibu").change(function(){
			var idibu =$ ("#idibu").val();
			$.ajax({
				type: "get",
				url: "caridata.php",
				data: "idibu="+idibu,
				dataType: 'json',
				success: function(data){
					var alamat = data [3];
					$("#alamat").val(alamat);
				}
			})
		})
	})
</script>
