<?php 
  require_once("global.php");//ARCHIVOS BASICOS GLOBAL DE CONFIGURACION

?>
<!DOCTYPE html>
<html lang="en">
    
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
     <title>ECODESTINATION BACKEND</title>

    <!-- Bootstrap core CSS -->
    <link href="app_core/views/backend/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="app_core/views/backend/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="app_core/views/backend/vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="app_core/views/backend/css/landing-page.min.css" rel="stylesheet">
    <?php

  echo "<link rel='stylesheet' type='text/css' href='csslogin/css/main.css'>";

    require_once("global.php");
    echo "<link rel='icon' type='image/png' href='".__RSC_HOST_PATH."cr.png'/>";
  
    echo "<link href='".__google_fonts."?family=Montserrat:400,700' rel='stylesheet' type='text/css'>";
    echo "<link href='".__google_fonts."?family=Kaushan+Script' rel='stylesheet' type='text/css'>";
    echo "<link href='".__google_fonts."?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>";
    echo "<link href='".__google_fonts."?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/
    css'>";
    echo "<link href='".__CSS_PATH."main.css' rel='stylesheet'>";
    ?>
  </head>


    <?php include_once(__VWS_PATH."backend.php");
        // <!-- Bootstrap core JavaScript -->
    echo "<script src='".__APP_DSG."vendor/jquery/jquery.min.js'></script>";
     echo "<script src='".__APP_DSG."js/slider.js'></script>";
    echo "<script src='".__APP_DSG."vendor/bootstrap/js/bootstrap.bundle.min.js'></script>";
    //<!-- Plugin JavaScript -->
    echo "<script src='".__APP_DSG."vendor/jquery-easing/jquery.easing.min.js'></script>";
    //<!-- Contact form JavaScript -->

  
      // EFECTO
    echo "<script src='".__APP_DSG."vendor/jquery/jquery-3.2.1.min.js'></script>";

    echo "<script src='".__APP_DSG."vendor/tilt/tilt.jquery.min.js'></script>";
    echo "<script >
        $('.js-tilt').tilt({
            scale: 1.2
        })
    </script>
    ";
    ?>


</html>
