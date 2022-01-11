<?php

require 'config/functions.php';

if (isset($_GET['page']) || isset($_GET['kd_pelanggan']) || isset($_GET['kd_kendaraan']) || isset($_GET['no_faktur'])) {
    $page = $_GET['page'];
    $kd_pelanggan = $_GET['kd_pelanggan'];
    $kd_kendaraan = $_GET['kd_kendaraan'];
    $no_faktur = $_GET['no_faktur'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BASE URL -->
    <base href="http://localhost:8888/ujian-lab/">

    <!-- CSS Bootstrap 5 -->
    <link rel="stylesheet" href="assets/bootstrap.min.css" />

    <!-- CSS -->
    <link rel="stylesheet" href="assets/style.css">

    <title>Ujian Labor Sistem Informasi</title>
</head>

<body class="min-vh-100">
    <!-- NAVBAR MENU -->
    <?php require 'components/menu.php'; ?>
    <!-- END OF NAVBAR MENU -->


    <!-- PAGE WRAP -->
    <div class="container-fluid-0 mt-5 ">
        <!-- BREADCRUMB -->
        <div class="container">
            <?php if (!$page == '') : ?>
                <nav aria-label='breadcrumb'>
                    <ol class='breadcrumb'>
                        <li class='breadcrumb-item'><a href='./'>Home</a></li>
                        <li class='breadcrumb-item active' aria-current='page'> <span class="text-capitalize"><?= $page; ?></span></li>
                    </ol>
                </nav>
            <?php endif ?>
        </div>
        <!-- END OF BREADCRUMB -->


        <!-- PAGE CONTENT -->
        <?php require 'konten.php'; ?>
        <!-- END OF PAGE CONTENT -->


        <!-- FOOTER -->
        <?php require 'components/footer.php'; ?>
        <!-- END OF FOOTER -->
    </div>
    <!-- END OF PAGE WRAP -->


    <!-- JS Bootstrap-->
    <script src="assets/bootstrap.bundle.min.js"></script>

</body>

</html>