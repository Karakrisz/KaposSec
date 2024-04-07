<!DOCTYPE html>
<html lang="hu">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo ' Kaposvár Biztonsági Szolgálat - ' . $title; ?></title>

    <!-- favicons Icons -->
    <link rel="icon" href="Boaz/img/logo.ico" type="image/x-icon">
    <!-- <link rel="apple-touch-icon" sizes="180x180" href="Boaz/img/logo.png">
    <link rel="icon" type="image/png" sizes="32x32" href="Boaz/img/logo.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="Boaz/img/logo.png" /> -->

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <!-- ===========  All Stylesheet ================= -->
    <!--  Bootstrap css plugins -->
    <link rel="stylesheet" href="assets/vendors/bootstrap/css/bootstrap.min.css">
    <!--  bootstrap-select css plugins -->
    <link rel="stylesheet" href="assets/vendors/bootstrap-select/bootstrap-select.min.css">
    <!--  animate css plugins -->
    <link rel="stylesheet" href="assets/vendors/animate/animate.min.css">
    <!--  fontawesome css plugins -->
    <link rel="stylesheet" href="assets/vendors/fontawesome/css/all.min.css">
    <!--  jquery-ui css plugins -->
    <link rel="stylesheet" href="assets/vendors/jquery-ui/jquery-ui.css">
    <!--  jarallax css plugins -->
    <link rel="stylesheet" href="assets/vendors/jarallax/jarallax.css">
    <!--  magnific-popup css plugins -->
    <link rel="stylesheet" href="assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css">
    <!--  nouislider css plugins -->
    <link rel="stylesheet" href="assets/vendors/nouislider/nouislider.min.css">
    <!--  nouislider css plugins -->
    <link rel="stylesheet" href="assets/vendors/nouislider/nouislider.pips.css">
    <!--  nouislider css plugins -->
    <link rel="stylesheet" href="assets/vendors/ostech-icons/style.css">
    <!--  slider css plugins -->
    <link rel="stylesheet" href="assets/vendors/owl-carousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/vendors/owl-carousel/css/owl.theme.default.min.css">

    <!-- template styles -->
    <link rel="stylesheet" href="assets/css/ostech.css">

    <!-- Boaz styles -->
    <link rel="stylesheet" href="Boaz/css/style.css">
</head>

<body class="custom-cursor">
    <!-- Custom Cursor -->
    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>

    <!-- Preloader Start-->
    <div class="preloader">
        <div class="preloader__image" style="background-image: url(assets/images/loader.png);"></div>
    </div>
    <!-- Preloader End-->
    <div class="page-wrapper">
        <?php
require_once "header.php";
require_once "$view.php";
require_once "footer.php";
?>
    </div>
</body>

</html>