<?php

include './config.php';
session_start();
if (!isset($_SESSION['email'])) {
  header("Location: login.php");
}

?>

<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
  <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
    <!-- <a class="navbar-brand brand-logo" href="index.php"><img src="images/logo.svg" alt="logo" /></a> -->
    <!-- <a class="navbar-brand brand-logo-mini" href="index.php"><img src="images/logo-mini.svg" alt="logo" /></a> -->
     <h3 class="text-primary mt-2 ml-4">Lab Automation</h3>
    <button class="navbar-toggler navbar-toggler align-self-center d-none d-lg-flex" type="button"
      data-toggle="minimize">
      <span class="typcn typcn-th-menu"></span>
    </button>
  </div>
  <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
    <ul class="navbar-nav mr-lg-2">
      <li class="nav-item  d-none d-lg-flex">
        <a class="nav-link" href="./index.php">
          Dashboard
        </a>
      </li>
      <li class="nav-item  d-none d-lg-flex">
        <a class="nav-link active" href="./product-type.php">
          Products
        </a>
      </li>
      <li class="nav-item  d-none d-lg-flex">
        <a class="nav-link" href="./test-products.php">
          Test
        </a>
      </li>
      <li class="nav-item  d-none d-lg-flex">
        <a class="nav-link" href="./test-record.php">
          Reports
        </a>
      </li>
    </ul>
    <ul class="navbar-nav navbar-nav-right">

      <li class="nav-item nav-profile dropdown">
        <a class="nav-link dropdown-toggle  pl-0 pr-0" href="#" data-toggle="dropdown" id="profileDropdown">
          <i class="typcn typcn-user-outline mr-0"></i>

          <span class="nav-profile-name">
            <?php
            echo $_SESSION["first_name"];
            ?>
          </span>

        </a>
        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
          <a href='delete-user.php' class="dropdown-item">
            <i class="mdi mdi-delete mdi-30px" style="color: #F2125E;"></i>
            Delete
          </a>
          <a href="logout.php" class="dropdown-item">
            <i class="typcn typcn-power text-primary"></i>
            Logout
          </a>
        </div>
      </li>
    </ul>
    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
      data-toggle="offcanvas">
      <span class="typcn typcn-th-menu"></span>
    </button>
  </div>
</nav>