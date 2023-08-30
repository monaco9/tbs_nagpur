<?php 
// session_start();
// if (isset($_SESSION['email'])) {
//     $email = $_SESSION['email'];
// } else {
//     header("Location: login.php");
//     exit();
// }

require('dbconn.php');
$sql = "SELECT * FROM gallery";
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
$records = $stmt->fetchAll();
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
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>TBS Dashboard</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../../images/logo.png" />

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
            <a href="" class="app-brand-link">
              
              <span class="app-brand-text demo menu-text fw-bolder ms-2">Dashboard</span>
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
              <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1">
            <!-- Dashboard -->
            <li class="menu-item active">
              <a href="dashboard.php" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
              </a>
            </li>
          
            <li class="menu-header small text-uppercase"><span class="menu-header-text">Pages</span></li>
         
            <li class="menu-item">
                        <a href="dashboard.php" class="menu-link">
                            <div data-i18n="Basic">Home Page</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="menu_admin.php" class="menu-link">
                            <div data-i18n="Boxicons">Menu</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="gallery_admin.php" class="menu-link">
                            <div data-i18n="Boxicons">Gallery</div>
                        </a>
                    </li>
                    
          
                    <li class="menu-item">
                        <a href="contact_admin.php" class="menu-link">
                            <div data-i18n="Boxicons">Enquiry</div>
                        </a>
                    </li>
           
                    <li class="menu-item">
                        <a href="logout.php" target="_blank" class="menu-link">
                            <div data-i18n="Support">Logout</div>
                        </a>
                    </li>
           
          </ul>
        </aside>
       

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          <nav
            class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            id="layout-navbar"
          >
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="bx bx-menu bx-sm"></i>
              </a>
            </div>

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
              

              <ul class="navbar-nav flex-row align-items-center ms-auto">
                <!-- Place this tag where you want the button to render. -->
                <li class="nav-item lh-1 me-3">
                  Hello Admin</a>
                </li>

                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                      <img src="../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="#">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar avatar-online">
                              <img src="../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <span class="fw-semibold d-block">Admin</span>
                            <small class="text-muted">Admin</small>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    
                    
                  
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="logout.php">
                        <i class="bx bx-power-off me-2"></i>
                        <span class="align-middle">Log Out</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <!--/ User -->
              </ul>
            </div>
          </nav>

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->



            <div class="container-xxl flex-grow-1 container-p-y">
   <div class="row">
    <div class="col-lg-12 mb-4 order-0">
      <div class="card">
        <div class="d-flex align-items-end row">
          <div class="col-sm-7">
          <div class="card-body">
                          <h5 class="card-title text-danger">Gallery</h5>
                          <!-- <p class="mb-4">
                            You have done <span class="fw-bold">72%</span> more sales today. Check your new badge in
                            your profile.
                          </p> -->
             </div>
          </div>
          <div class="col-12 col-sm-5 text-center text-sm-left">
            <div class="card-body pb-0 px-0 px-md-4">
              <img  src="../assets/img/illustrations/man-with-laptop-light.png" height="140" alt="View Badge User"
                data-app-dark-img="illustrations/man-with-laptop-dark.png"
                data-app-light-img="illustrations/man-with-laptop-light.png"
              />
            </div>
          </div>
        </div>
      </div>
    </div>    

<!-- form -->
               <div class="row">
                            <div class="col-md-12">
                                <div class="card mb-4">
                                    <div class="card-body">
                                        <form action="gallery_action.php" enctype="multipart/form-data" method="post">
                                            <div>
                                                <label for="defaultFormControlInput" class="form-label">Image Name</label>
                                                <input type="text" class="form-control" id="defaultFormControlInput" name="imagename" placeholder="Enter Your Text" aria-describedby="defaultFormControlHelp" />
                                            </div>
                                            <div class="mt-3">
                                                <label for="formFileDisabled" class="form-label">Select Your Image</label>
                                                <input class="form-control" type="file" name="uploadfile" id="formFileDisabled">
                                            </div>
                                            <div class="d-grid gap-2 col-lg-6 mx-auto mt-3">
                                                <button class="btn btn-primary btn-lg" type="submit" value="submit">Upload</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                   <!-- /form -->

                     <!-- stripped rows -->
                     <div class="card mt-5">
                            <div class="table-responsive text-nowrap">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Sr.no</th>
                                            <th>Image Name</th>
                                            <th>Action</th>
                                       </tr>
                                    </thead>

                                    <tbody class="table-border-bottom-0">
                                        <?php foreach ($records as $gallery) { ?>
                                            <tr>
                                                <td><i class="fab fa-angular fa-lg text-danger me-3"></i><strong><?php echo $gallery['SR_NO'] ?></strong></td>
                                                <td><?php echo $gallery['IMAGE_NAME'] ?></td>
                                                <td>
                                                    <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Lilian Fuller">
                                                            <img src='<?php echo $gallery['IMAGE_PATH']; ?>' alt="Avatar" class="rounded-circle">
                                                        </li>
                                                    </ul>
                                                </td>
                                                <td><a href="gallery_del.php?sr_no=<?php echo $gallery['SR_NO'];  ?>" class="btn btn-danger">Delete</a></td>
                                               
                                            </tr>
                                    </tbody>
                                <?php } ?>
                                </table>
                            </div>
                        </div>
                        <!--/ Striped Rows -->

                   
            <!-- Footer -->
            <footer class="content-footer footer bg-footer-theme">
              <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                <div class="mb-2 mb-md-0">
                  ©
                  <script>
                    document.write(new Date().getFullYear());
                  </script>
                  , made by monaco
                 
                </div>
                <div>
                

               

               
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