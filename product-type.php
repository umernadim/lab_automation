<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Lab Automation | Product</title>
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
        <!---------- Change Theme Code --------->
        <?php
        include 'components/changeTheme.php';
        ?>
        <div class="container-fluid page-body-wrapper">

            <!-- partial -->
            <!---------- sidebar --------->
            <?php
            include 'components/sideBar.php';
            ?>
            <!-- partial -->
            <div class="main-panel">

                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">

                            <!-- Top Bar: Search Bar and Add Product Button -->
                            <div class="d-flex justify-content-between align-items-center mb-3 flex-wrap">
                                <!-- Search bar -->
                                <form class="form-inline w-50">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input type="text" name="" class="form-control"
                                                placeholder="Search product..." aria-label="">
                                            <div class="input-group-append">
                                                <button class="btn btn-outline-primary btn-sm" name="" type="button">
                                                    <i class="mdi mdi-magnify"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                                <!-- Add Product button -->
                                <a href="add-product-type.php" style="text-decoration: none;">
                                    <button type="button" class="btn btn-info btn-sm d-flex align-items-center">
                                        <i class="mdi mdi-plus-circle-outline mdi-18px mr-2"></i>
                                        Add Product Type
                                    </button>
                                </a>
                            </div>

                            <!-- Table -->
                            <div class="table-responsive">
                                <?php
                                include 'config.php';
                                $sql = "SELECT * FROM product_types ORDER BY id DESC";
                                $result = mysqli_query($connect, $sql);
                                if (mysqli_num_rows($result) > 0) {

                                    ?>
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Product_id</th>
                                                <th>Product_name</th>
                                                <th>Product_Code</th>
                                                <th>Send to Test</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            while ($row = mysqli_fetch_assoc($result)) {

                                                ?>
                                                <tr>
                                                    <td class="py-1"><?php echo $row['id']; ?></td>
                                                    <td><?php echo $row['type_name']; ?></td>
                                                    <td><?php echo $row['code']; ?></td>
                                                    <td>
                                                        <a href="products.php?prodid=<?php echo $row['id'];?>" style="cursor: pointer;color: #000;">
                                                            <i class="mdi mdi-send mdi-20px" style="color: #F2125E;"></i>
                                                            Send
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="edit-product-type.php?prodid=<?php echo $row['id'];?>" style="cursor: pointer; color: #000;">
                                                            <i class="mdi mdi-pencil mdi-20px" style="color: #F2125E;"></i>
                                                            Edit
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="delete-product-type.php?prodid=<?php echo $row['id'];?>" style="cursor: pointer; color: #000;">
                                                            <i class="mdi mdi-delete mdi-20px" style="color: #F2125E;"></i>
                                                            Delete
                                                        </a>
                                                    </td>
                                                </tr>
                                            <?php
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                <?php
                                } else {
                                    echo "<h3>No Results Found.</h3>";
                                }
                                ?>
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

    <script src="js/dashboard.js"></script>
    <!-- End custom js for this page-->
</body>

</html>