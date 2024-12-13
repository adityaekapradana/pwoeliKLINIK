<!DOCTYPE html>

<?php
session_start();
$username = $_SESSION['username'];
$idPasien = $_SESSION['id'];

if ($username == "") {
    header("location:login.php");
}
// else if ($username != "Admin") {
//     echo '<script>alert("Anda tidak memiliki akses");window.location.href="login.php";</script>';
// }
?>

<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
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

        <!-- Navbar -->
        <?php include('components/navbar.php') ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php include('components/sidebar.php') ?>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <?php include('pages/daftarPoli/daftarPoli.php') ?>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Main Footer -->
        <center>
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
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="assets/AdminLTE/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="assets/AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="assets/AdminLTE/dist/js/adminlte.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#poli').on('change', function() {
                var poliId = $(this).val();

                // Mengambil data jadwal berdasarkan poli yang dipilih
                $.ajax({
                    type: 'POST',
                    url: 'getJadwal.php', // Ganti dengan path file get_jadwal.php sesuai dengan struktur proyek Anda
                    data: {
                        poliId: poliId
                    },
                    success: function(data) {
                        $('#jadwal').html(data);
                    }
                });
            });
        });
    </script>
</body>

</html>