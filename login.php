<?php session_name("MYAPP"); session_start();


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>NOMBRE</title>
    
    <?php
    require_once("global.php");
   
    ?>
</head>
    <?php

        //INCLUIMOS LA VISTA EN NUESTRO HTML DE INICIO
        if (isset($_SESSION['MYAPP'])) {
          if ($_SESSION['MYAPP']!="YES") {
            include_once(__VWS_PATH."login.php");
          }else{
           include_once("backend.php");
         }
        }else{
         include_once(__VWS_PATH."login.php");
        }
      
    ?>
  </body>
</html>