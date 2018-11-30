<?php
require_once(__CTR_PATH . "ctr_tours.php");
$ctr_tours = new ctr_tours();


     //   if(!isset($_GET["Destino"])){
      //      header('Location: index.php');
    //    }

  
?>

<body id="page-top">
    <header>
        <nav style=" " class="navbar navbar-expand-md navbar-dark fixed-top bg-dark" id="mainNav">
            <a class="navbar-brand" rel="home" href="#" title="Ecodestination"> <img style="max-width:130px; margin-top: -7px; border-radius: 10px;"src=<?php echo __RSC_LOGOS_HOST_PATH."eco.jpg";?>></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">

                <ul class="navbar-nav mr-auto">
                    
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <strong>Tours</strong>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown" id="OcultarEfectos">
                            <a class="dropdown-item" href="tours.php">Teachers and students Tours</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Family Tours</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item " href="#">Birding Tours</a>
                            <div class="dropdown-divider"></div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#Destinos"><strong>Destinations</strong></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#contact"><strong>Contact Us</strong></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#registro"><strong>Get Offers</strong></a>
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
            <h1 style="color:white;"><?php echo $_GET["Destino"] ?></h1>
          <div class="row">
            <div class="row mb-2">
         <?php
            $tours = $ctr_tours->obtener_tours($_GET["Destino"]);
            foreach ($tours as $value) {
                echo( "<form action='itinerario.php' method='post'>".
                 "<div class='col-md-12'>".
                 "<div class='card flex-md-row mb-4 shadow-sm h-md-250' style='background-color: #ffffff66'>".
                 "<div class='card-body d-flex flex-column align-items-start'>".
                 "<strong class='d-inline-block mb-2 text-success'>$value[0]</strong>".
                 "<h3 class='mb-0'>".
                 "<a class='text-dark' href='#'>$value[2]</a>".
                 "</h3>".
                 "<div class='mb-1 text-muted'>Nov 12</div>".
                 "<p class='card-text mb-auto'>$value[3]</p>".
                 "<input type='hidden' name='enviar' value='".$value[1]."'><br>".
                 "<input type='submit' value='Continue reading' class='btn btn-info'/>".
                 "</div>".
                 "<img class='card-img-right flex-auto d-none d-lg-block' src='".__RS_dias_HOST_PATH."$value[4]' alt='Card image cap'>".
                 "</div>".
                 "</div>".
                 "</form>");
            }
        ?>
          </div>
      </div>
</section>


<?php
    include_once("UsoComun/footer.php");
?>