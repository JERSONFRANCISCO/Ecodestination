<?php
require_once(__CTR_PATH . "ctr_tours.php");
$ctr_tours = new ctr_tours();


     //   if(!isset($_GET["Destino"])){
      //      header('Location: index.php');
    //    }

  
?>

<body id="page-top">
<header>
       <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark" id="mainNav">
             <div  class="login100-pic js-tilt" data-tilt>
            <a class="navbar-brand" rel="home" href="index.php" title="Ecodestination"> <img style="max-width:150px; margin-top: -7px; border-radius: 10px; left: 50px; position: relative;" src=<?php echo __RSC_LOGOS_HOST_PATH."eco.jpg";?>></a>
        </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse" style="    left: 100px;   position: relative;">

                <ul class="navbar-nav mr-auto">
                    
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <strong style="font-size: 20px;">Tours</strong>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown" id="OcultarEfectos">
                            <form action='tours.php' method='post'>
                            <input type='hidden' name='destino' value="1">
                            <input type='hidden' name='nombre' value="Teachers and students Tours">
                            <button type="submit" id="btnMenuSup" class="btn btn-block btn-lg btn-primary">Teachers and students Tours</button>
                            <div class="dropdown-divider"></div>
                            </form>

                            <form action='tours.php' method='post'>
                            <input type='hidden' name='destino' value="2">
                            <input type='hidden' name='nombre' value="Family Tours">
                            <button type="submit" id="btnMenuSup" class="btn btn-block btn-lg btn-primary">Family Tours</button>
                            <div class="dropdown-divider"></div>
                            </form>

                            <form action='tours.php' method='post'>
                            <input type='hidden' name='destino' value="3">
                            <input type='hidden' name='nombre' value="Birding Tours">
                            <button type="submit" id="btnMenuSup" class="btn btn-block btn-lg btn-primary">Birding Tours</button>
                            <div class="dropdown-divider"></div>
                            </form>

                            <form action='tours.php' method='post'>
                            <input type='hidden' name='destino' value="4">
                            <input type='hidden' name='nombre' value="Group Tours">
                            <button type="submit" id="btnMenuSup" class="btn btn-block btn-lg btn-primary">Group Tours</button>
                            </form>
                        </div>
                    </li>
                      
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#Destinos"><strong style="font-size: 20px;   font-family: 'Open Sans', Arial, sans-serif;">Destinations</strong></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#contact"><strong style="font-size: 20px;   font-family: 'Open Sans', Arial, sans-serif;">Contact Us</strong></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#registro"><strong style="font-size: 20px;">Get Offers</strong></a>
                    </li>
                </ul>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li class="list-inline-item">

                            <a href="#">
                                <i style="position: relative; right:-16px;" class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">
                                <i style="position: relative; right:-20px;" class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">
                                <i  style="position: relative; right:-16px;" class="fab fa-instagram"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav> 
    </header>
<style type="text/css">
    .jumbotron{
    position: relative;
    top: 51px;
    margin-bottom: 0px;
    
    background-position: 0% 25%;
    background-size: cover;
    background-repeat: no-repeat;
    color: white;
    text-shadow: black 0.3em 0.3em 0.3em;
        text-align: justify;
    }
</style>>
<div class="jumbotron" style="background-image: url(<?php echo __RSC_BANN_HOST_PATH.str_replace(" ","",$_POST['nombre']).".jpg";?>)">
      <div class="container">
        <h1 class="display-3">Hello, welcome to <?php echo $_POST['nombre']; ?>!</h1>
        <br>
        <p>This is a template for a simple marketing or iis a template for a simple marketing or informis a template for a simple marketing or informis a template for a simple marketing or informis a template for a simple marketing or informis a template for a simple marketing or informis a template for a simple marketing or informis a template for a simple marketing or informis a template for a simple marketing or informnformational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
        <br>
       <!-- <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more »</a></p> -->
       <h2>Lets us to show you more about that place with our fanatics tours!</h2>
      </div>
</div>
        <section id="destinosCss">
        <div class="container" id="Destinos">
            <h1 style="color:white;"><?php echo $_POST['nombre']; ?></h1>
          <div class="row">
            <div class="row mb-2">
         <?php
            $tours = $ctr_tours->obtener_tours($_POST["destino"]);
            foreach ($tours as $value) {
                echo( "<form action='itinerario.php' method='post'>".
                 "<div class='col-md-12'>".
                 "<div class='card flex-md-row mb-4 shadow-sm h-md-250' style='background-color: #ffffff66'>".
                 "<div class='card-body d-flex flex-column align-items-start'>".
                 "<strong class='d-inline-block mb-2 text-success'>$value[0]</strong>".
                 "<h3 class='mb-0'>".
                 "<a class='text-dark' >$value[2]</a>".
                 "</h3>".
                 "<p class='card-text mb-auto'>".substr("$value[3]",0, 89)."...</p>".
                 "<div class='btn-group' style=' border-style: solid;  border-color: white;'>".
                 "<input type='hidden' name='enviar' value='".$value[1]."'>".
                 "<input type='hidden' name='titulo' value='".$value[2]."'>".
                 "<button type='submit' class='btn btn-sm btn-outline-secondary' ><a>Continue Reading</a></button>".
                 "</div>".
                 "</div>"                 .
                 "<img class='card-img-right flex-auto d-none d-lg-block' src='".__RS_dias_HOST_PATH."$value[4]' alt='Card image cap'>".
                 "</div>".
                 "</div>".
                 "</form>");
            }


            echo"<div class='container'>";
            echo"<div class='row'>";
            foreach ($tours as $value) {
                echo("<div class='col-lg-4 mb-4'>".
                    "<div class='card h-100' style='background-color: #ffffff66;'>".
                    "<a href=''><img class='card-img-top' style='max-width: 100%; height: 200px;' src='".__RS_dias_HOST_PATH."$value[4]' alt=''></a>".
                    "<div class='card-body'>".
                    "<h4 class='card-title'>".
                    "<a style='color: black;' href=''>$value[2]</a>".
                    "</h4>".
                    "<p class='card-text' style='text-align: justify;'>$value[3]</p>".
                    "</div>".
                    "</div>".
                    "</div>");
            }
            echo"</div>";
            echo"</div>";
        ?>
          </div>
      </div>
    </section>
          


<?php
    include_once("UsoComun/footer.php");
?>