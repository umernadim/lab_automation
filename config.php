<?php
$connect = mysqli_connect("localhost", "root", "", "eproject");

if (!$connect) {
  die("Connection failed: " . mysqli_connect_error());
}
?>