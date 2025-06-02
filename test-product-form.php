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
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">

            <!---------- sidebar --------->
            <?php
            include 'components/sideBar.php';
            ?>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper" style="display: flex; justify-content: center;">
                    <div class="col-md-6 grid-margin ">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">Test Product</h3>

                                <form class="user px-1 py-3" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

                                    <!-- Product ID -->
                                    <div class="form-group">
                                        <label for="exampleProductid">Product ID</label>
                                        <input type="text" class="form-control" id="exampleProductid" name="product_id"
                                            placeholder="Enter Product ID" required>
                                    </div>

                                    <!-- Test Type -->
                                    <div class="form-group">
                                        <label for="testingType">Testing Type</label>
                                        <select class="form-control" id="testingType" name="testingType" required>
                                            <option disabled selected value="">Select testing type</option>
                                            <option value="Voltage Test">Voltage Test</option>
                                            <option value="Capacity Test">Capacity Test</option>
                                            <option value="Insulation Test">Insulation Test</option>
                                        </select>
                                    </div>

                                    <!-- Test Criteria -->
                                    <div class="form-group">
                                        <label for="exampleTestCriteria">Test Criteria</label>
                                        <textarea class="form-control" id="exampleTestCriteria" name="test_criteria"
                                            rows="2" placeholder="Enter test criteria" required></textarea>
                                    </div>

                                    <!-- Observed Output -->
                                    <div class="form-group">
                                        <label for="exampleObservedOutput">Observed Output</label>
                                        <textarea class="form-control" id="exampleObservedOutput" name="observed_output"
                                            rows="2" placeholder="Enter observed output" required></textarea>
                                    </div>

                                    <!-- Tested By & Test Result (Side by Side) -->
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="exampleTestedBy">Tested By</label>
                                            <input type="text" class="form-control" id="exampleTestedBy" name="test_by"
                                                placeholder="Tested by" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="exampleTestResult">Test Result</label>
                                            <input type="text" class="form-control" id="exampleTestResult"
                                                name="test_result" placeholder="Test result" required>
                                        </div>
                                    </div>

                                    <!-- Remarks -->
                                    <div class="form-group">
                                        <label for="exampleRemarks">Remarks</label>
                                        <textarea class="form-control" id="exampleRemarks" name="remarks" rows="3"
                                            placeholder="Enter remarks" required></textarea>
                                    </div>

                                    <!-- Submit Button -->
                                    <button type="submit" name="submit" class="btn btn-primary btn-block">Submit
                                        Test</button>

                                </form>




                            </div>
                        </div>
                    </div>
                    <!------------ footer ------------>
                </div>
                <?php
                include 'components/footer.php';
                ?>
            </div>
        </div>
        <!-- page-body-wrapper ends -->
    </div>

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