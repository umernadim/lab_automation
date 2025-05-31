<?php

include './config.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Lab Automation</title>
  <!-- base:css -->
  <link rel="stylesheet" href="vendors/typicons.font/font/typicons.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">

  <link rel="stylesheet" href="css/vertical-layout-light/style.css">
  <link rel="stylesheet" href="css/map/vertical-layout-light/style.css.map">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />

  <link href="https://cdn.jsdelivr.net/npm/@mdi/font@7.2.96/css/materialdesignicons.min.css" rel="stylesheet">

</head>

<body>

  <div class="container-scroller">
    <!-------- navbar ---------->
    <?php
    include 'components/navBar.php';
    ?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">

      <!-- partial -->
      <?php
      include 'components/changeTheme.php';
      ?>
      <!---------- sidebar --------->
      <?php
      include 'components/sideBar.php';
      ?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">

          <div class="row  mt-3">
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                        Total Products</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                        0
                      </div>
                    </div>
                    <div class="col-auto">
                      <!-- <i class="mdi mdi-cube  mdi-36px" style="color: #d1d5db"></i> -->
                      <i class="mdi mdi-cube mdi-36px text-green"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                        Tested Products</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                        0
                      </div>
                    </div>
                    <div class="col-auto" style="border:2.5px solid rgb(33, 194, 218); border-radius: 50%;">
                      <i class="mdi mdi-test-tube mdi-36px" style="color: rgb(33, 194, 218);"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                        Pass</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                        0
                      </div>
                    </div>
                    <div style="background-color: #22c55e; border-radius: 50%;">
                      <i class="mdi mdi-check-circle mdi-36px text-white"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                        Fail</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                        0
                      </div>
                    </div>
                    <div class="col-auto" style="background-color: red; border-radius: 50%;">
                      <i class="mdi mdi-close-circle mdi-36px text-white"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>


        </div>
        <!------------ footer ------------>
        <?php
        include 'components/footer.php';
        ?>
      </div>
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- base:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
  <!-- plugin js for this page -->
  <script src="vendors/progressbar.js/progressbar.min.js"></script>
  <script src="vendors/chart.js/Chart.min.js"></script>
  <!-- End plugin js for this page -->
  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>
  <!-- End custom js for this page-->
</body>

</html>