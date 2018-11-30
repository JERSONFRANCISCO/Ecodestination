<?php
require_once(__CTR_PATH . "ctr_itinerario.php");
$ctr_itinerario = new ctr_itinerario();

?>

<body id="page-top">
        <header>
       <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark" id="mainNav">
             <div  class="login100-pic js-tilt" data-tilt>
            <a class="navbar-brand" rel="home" href="#" title="Ecodestination"> <img style="max-width:150px; margin-top: -7px; border-radius: 10px; left: 50px; position: relative;" src=<?php echo __RSC_LOGOS_HOST_PATH."eco.jpg";?>></a>
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
                            <a class="dropdown-item" href="tours.php" style="font-size: 20px;">Teachers and students Tours</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#" style="font-size: 20px;">Family Tours</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item " href="#" style="font-size: 20px;">Birding Tours</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item " href="#" style="font-size: 20px;">Group Tours</a>
                            <div class="dropdown-divider"></div>
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

        <section id="destinosCss">
        <div class="container" id="Destinos">
             <h1 style="color:white;"><?php echo $_POST['titulo']; ?></h1>
          <div class="row">
            <div class="row mb-2">
         <?php
            $itinerario = $ctr_itinerario->obtener_itinerario($_POST["enviar"]);
            foreach ($itinerario as $value) {
                echo "<div class='col-md-12'>";
                echo "<div class='card flex-md-row mb-4 shadow-sm h-md-250' style='background-color:white;'>";
                echo "<div class='card-body d-flex flex-column align-items-start'>";
                echo "<strong class='d-inline-block mb-2 text-success'>id $value[0]</strong>";
                echo "<h3 class='mb-0'>";
                echo "<a class='text-dark' style='color:black !important;'>$value[3]</a>";
                echo "</h3>";
                echo "<div class='mb-1 text-muted'>Nov 12</div>";
                echo "<p class='card-text mb-auto' style='color:black !important;'>$value[2]</p>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
            }
        ?>
          </div>
      </div>
</section>


<?php
    include_once("UsoComun/footer.php");
?>