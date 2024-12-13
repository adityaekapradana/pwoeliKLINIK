<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->

<?php
session_start();
$username = $_SESSION['username'];
if ($_SESSION['akses'] == 'dokter') {
  $id_dokter = $_SESSION['id'];
} else if ($_SESSION['akses'] == 'pasien') {
  $idPasien = $_SESSION['id'];
}

if ($username == "") {
  header("location:login.php");
}
?>

<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>POLIKLINIK</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="assets/AdminLTE/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/AdminLTE/dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">

    <!-- TAMPILKAN NAVBAR -->
    <?php include("components/navbar.php"); ?>

    <!-- TAMPILKAN SIDEBAR -->
    <?php include("components/sidebar.php"); ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->

      <!-- /.content-header -->

      <!-- Main content -->
      <?php include("pages/dashboard/dashboard.php"); ?>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
      <div class="p-3">
        <h5>Title</h5>
        <p>Sidebar content</p>
      </div>
    </aside>
    <!-- /.control-sidebar -->
    <center>
    <!-- Main Footer -->
    <footer class="main-footer">
      <!-- To the right -->
      <div class="float-right d-none d-sm-inline">
        ADIT
      </div>
      <!-- Default to the left -->
      <strong>Copyright &copy; 2024/2025 <a href="https://wa.link/hvzj1q">A11.2021.13694_Aditya Eka Pradana</a>.</strong> All rights reserved.
    </footer>
    </center>
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->

  <!-- jQuery -->
  <script src="assets/AdminLTE/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="assets/AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="assets/AdminLTE/dist/js/adminlte.min.js"></script>
</body>

</html>