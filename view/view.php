<!doctype html>
<html class="no-js" lang="zxx">

<!-- Mirrored from bdevs.net/tanzim/tanzim/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 May 2020 15:44:43 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Tanzim - eCommerce HTML Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="images/logo/apple-touch-icon.html">
    <!-- Place favicon.ico in the root directory -->
    
    <!-- Google fonts (font-family: 'Roboto', sans-serif;) -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700,900" rel="stylesheet">
    <!-- Bootstrap default css  -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Theme shortcodes/elements style -->
    <link rel="stylesheet" href="assets/css/core.css">
    <!-- Tanzim CSS -->
    <link rel="stylesheet" href="assets/style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- User style -->
    <link rel="stylesheet" href="assets/css/custom.css">

    <!-- Style customizer (Remove these two lines please) -->
    <link rel="stylesheet" href="assets/css/style-customizer.css">
    <link href="#" data-style="styles" rel="stylesheet">

    <!-- Modernizr JS -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>
<body >
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
        
    <!-- Body main wrapper start -->
    <div class="wrapper">



    <?php
 
$ROOT = __DIR__;
$DS = DIRECTORY_SEPARATOR;


require_once($ROOT.$DS."header.php");



$filepath = $ROOT.$DS.$controller.$DS;

$filename = "view".ucfirst($view).".php";


require_once($filepath.$filename);







require_once($ROOT.$DS."footer.php");

   ?>
    
   
    </div>
    <!-- End wrapper -->



    <!-- jQuery Latest Version -->
    <script src="assets/js/vendor/jquery-1.12.0.min.js"></script>
    <!-- Bootstrap framework JS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- All JS plugins included in this file. -->
    <script src="assets/js/plugins.js"></script>
    <!-- Main JS file that contents all jQuery Plugins activation. -->
    <script src="assets/js/main.js"></script>
</body>

<!-- Mirrored from bdevs.net/tanzim/tanzim/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 May 2020 15:47:19 GMT -->
</html>