<!DOCTYPE html>
<html lang="en">

<head>
   <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Dashboard</title>

    <!-- Fontfaces CSS-->
    <link href="/FashionStore/css/font-face.css" rel="stylesheet" media="all">
    <link href="/FashionStore/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="/FashionStore/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="/FashionStore/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="/FashionStore/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="/FashionStore/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="/FashionStore/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="/FashionStore/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="/FashionStore/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="/FashionStore/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="/FashionStore/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="/FashionStore/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="/FashionStore/css/theme.css" rel="stylesheet" media="all">
</head>

<body>
    <?php
        echo 
        '<div class="page-wrapper">';
            include 'sidebar.php';
            '<div class="page-container">';
                include 'header.php';
                include 'content.php';
            '</div>';
        echo '</div>';
    ?>
    
</body>

</html>
 <!-- Jquery JS-->
    <script src="/FashionStore/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="/FashionStore/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="/FashionStore/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="/FashionStore/vendor/slick/slick.min.js">
    </script>
    <script src="/FashionStore/vendor/wow/wow.min.js"></script>
    <script src="/FashionStore/vendor/animsition/animsition.min.js"></script>
    <script src="/FashionStore/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="/FashionStore/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="/FashionStore/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="/FashionStore/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="/FashionStore/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="/FashionStore/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="/FashionStore/vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="/FashionStore/js/main.js"></script>
