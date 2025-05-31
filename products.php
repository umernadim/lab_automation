<?php
include 'config.php';
if (isset($_POST['addProduct'])) {
  $prodName = mysqli_real_escape_string($connect, $_POST['prodName']);
  $prodTypeid = mysqli_real_escape_string($connect, $_POST['prodTypeid']);
  $revsionCode = mysqli_real_escape_string($connect, $_POST['revsionCode']);
  $mfgNumber = mysqli_real_escape_string($connect, $_POST['mfgNumber']);
  $mfgDate = mysqli_real_escape_string($connect, $_POST['mfgDate']);
  $uploadedBy = mysqli_real_escape_string($connect, $_POST['uploadedBy']);

  $sql = "SELECT product_name FROM products WHERE product_name = '{$prodName}'";
  $result = mysqli_query($connect, $sql);

  if (mysqli_num_rows($result) > 0) {
    $sql2 = "INSERT INTO products(product_name, product_type_id, revision_code, manufacturing_number, manufactured_date, Uploaded_by) VALUES ('{$prodName}','{$prodTypeid}','{$revsionCode}','{$mfgNumber}','{$mfgDate}','{$uploadedBy}'";
    if (mysqli_query($connect, $sql2)) {
      header("Location: test-products.php");
      exit();
    } else {
      echo "<p style='color:red;text-align:center;margin: 10px 0;'>Can't Insert Product for testing.</p>";
    }
  }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Lab Automation | Register</title>
  <!-- base:css -->
  <link rel="stylesheet" href="vendors/typicons.font/font/typicons.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-5 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <h1 class="text-center text-primary mb-4">Add Product TO Test</h1>

              <?php
              include 'config.php';
             
              $id = $_GET['prodid'];

              $sql1 = "SELECT * FROM product_types WHERE id = {$id}";
              $result1 = mysqli_query($connect, $sql1);
              if ($row1 = mysqli_fetch_assoc($result1)) {
                
                ?>

                <form class="user" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                  <div class="form-group">
                    <input type="hidden" name="id" value="<?php echo $row1['id']; ?>">
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                      <input type="text" class="form-control form-control-user" value="<?php echo $row1['type_name']; ?>"
                        name="prodName" placeholder="Product Name" id="exampleProdName" Required>
                    </div>
                    <div class="col-sm-6">
                      <input type="text" class="form-control form-control-user" value="<?php echo $row1['id']; ?>"
                        name="prodTypeid" id="exampleProdName" placeholder="Product Type id" Required>
                    </div>
                  </div>

                  <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                      <input type="text" class="form-control form-control-user" id="exampleInputRevisionCode"
                        name="revsionCode" placeholder="Revision Code" maxlength="2" Required>
                    </div>
                    <div class="col-sm-6">
                      <input type="text" class="form-control form-control-user" id="exampleInputMfgNumber"
                        name="mfgNumber" maxlength="2" placeholder="Manufactured Number" Required>
                    </div>
                  </div>

                  <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                      <input type="date" class="form-control form-control-user" id="exampleInputMfgDate" name="mfgDate"
                        placeholder="Manufactured Date" Required>
                    </div>
                    <div class="col-sm-6">
                      <input type="text" class="form-control form-control-user" id="exampleInputUpoadedBy"
                        name="uploadedBy" placeholder="Uploaded By" Required>
                    </div>
                  </div>

                  <div class="form-group">
                    <select class="form-control form-control-lg" name="testingType" id="exampleFormControlTestingType"
                      Required>
                      <option disabled selected>Select testing type</option>
                      <option value="Admin">Voltage test</option>
                      <option value="Normal User">Capacity test</option>
                      <option value="Normal User">Insulation test</option>
                    </select>
                  </div>

                  <input type="submit" value="Add to Test" class="btn btn-primary btn-user btn-block" name="addProduct">
                </form>
              <?php } ?>

            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- base:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
</body>

</html>