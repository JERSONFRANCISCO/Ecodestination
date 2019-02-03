<?php

	// variables del host
	$myhost="http://localhost";
	$myproject="Ecodestination";
	$mysite=$myhost . "/" . $myproject;


	date_default_timezone_set('America/Costa_Rica');


	define('__ROOT__', $_SERVER["DOCUMENT_ROOT"]);
  define('__SITE_PATH', $mysite);

  define('__MDL_PATH', "app_core/models/");
  define('__CTR_PATH', "app_core/controllers/");
  define('__VWS_PATH', __ROOT__ . "/" . $myproject . "/app_core/views/");

  define('__VWS_PATH2', $myproject . "/app_core/views/");

  define('__VWSComun_PATH3', $myproject . "/app_core/views/UsoComun/");

  define('__VWS_HOST_PATH', $mysite . "/app_core/views/");
  define('__CTR_HOST_PATH', $mysite . "/app_core/controllers/");

  define('__RSC_PATH', __ROOT__ . "/app_core/resources/");
  define('__RSC_HOST_PATH', $mysite . "/app_core/resources/");
  define('__RSC_PHO_HOST_PATH', $mysite . "/app_core/resources/photos/");
  define('__RSC_FLE_HOST_PATH', $mysite . "/app_core/resources/files/");
  define('__RSC_TBN_HOST_PATH', $mysite . "/app_core/resources/thumbnails/");
  define('__RSC_IMG_HOST_PATH', $mysite . "/app_core/resources/images/");
  define('__RSC_BANN_HOST_PATH', $mysite . "/app_core/resources/banner/");
  define('__RSC_PORTFOLIO_HOST_PATH', $mysite . "/app_core/resources/portfolio/");
  define('__RSC_LOGOS_HOST_PATH', $mysite . "/app_core/resources/logos/");
  define('__RSC_DESTIOS_HOST_PATH', $mysite . "/app_core/resources/destinos/");
  define('__RS_dias_HOST_PATH', $mysite . "/app_core/resources/dias/");

  define('__APP_DSG', $mysite . "/app_design/");
  define('__JS_PATH', $mysite . "/app_design/js/");
  define('__CSS_PATH', $mysite . "/app_design/css/");
  define('__IMG_PATH', $mysite . "/app_design/img/"); 	


  define('__google_fonts', "https://fonts.googleapis.com/css");   

?>