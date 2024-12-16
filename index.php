<?php
session_start();
require_once __DIR__ . "/db.php";
require_once __DIR__ . "/function.php";
$url = 'index';
if (isset($_SERVER['PATH_INFO']) && $_SERVER['PATH_INFO'] != '/') {
    $url = $_SERVER['PATH_INFO'];
}

$page = __DIR__ . "/pages/$url.php";
?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Rainbow Flowers</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Place favicon.png in the root directory -->
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon" />
    <!-- Font Icons css -->
    <link rel="stylesheet" href="assets/css/font-icons.css">
    <!-- plugins css -->
    <link rel="stylesheet" href="assets/css/plugins.css">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="assets/css/responsive.css">
</head>

<body>

    <!-- Body main wrapper start -->
    <div class="body-wrapper">

        <!-- HEADER AREA START (header-4) -->
        <?php include('components/header.php') ?>
        <!-- HEADER AREA END -->

        <div class="ltn__utilize-overlay"></div>

        <?php
        if (file_exists($page)) {
            include $page;
        } else {
            echo "File Tidak Ditemukan $page";
        }

        ?>

    </div>
    <!-- Body main wrapper end -->

    <!-- preloader area start -->
    <div class="preloader d-none" id="preloader">
        <div class="preloader-inner">
            <div class="spinner">
                <div class="dot1"></div>
                <div class="dot2"></div>
            </div>
        </div>
    </div>
    <!-- preloader area end -->

    <!-- All JS Plugins -->
    <script src="assets/js/plugins.js"></script>
    <!-- Main JS -->
    <script src="assets/js/main.js"></script>

</body>

</html>