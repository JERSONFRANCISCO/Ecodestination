<?php
require_once(__CTR_PATH . "ctr_inicio.php");
$ctr_inicio = new ctr_inicio();
?>
<script src="<?php echo __JS_PATH?>/jquery-2.0.3.js"></script>
<!-- <body id="page-top" onload="rotar_imagen();"> -->
<script type="text/javascript">

        $(function() {
        $('.carousel').carousel({
            interval: 5000
        });
    });
        
</script>


<body id="page-top">
    <header>
       <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark" id="mainNav">
             <div  class="login100-pic js-tilt" data-tilt>
            <a class="navbar-brand" rel="home" href="#" title="Ecodestination"> <img style="max-width:150px; margin-top: -7px; border-radius: 10px; left: 50px; position: relative;"src=<?php echo __RSC_LOGOS_HOST_PATH."eco.jpg";?>></a>
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
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#Destinos"><strong style="font-size: 20px;">Destinations</strong></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#contact"><strong style="font-size: 20px;">Contact Us</strong></a>
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

    <div id="myCarousel" class="carousel slide" data-ride="carousel" >
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
            <li data-target="#myCarousel" data-slide-to="4"></li>
        </ol>
        <div class="carousel-inner">

            <div class="carousel-item">
                <img class="first-slide" src="<?php echo __RSC_PHO_HOST_PATH ?>costa-rica-sup-retreat-banner.jpg" alt="First slide">
                <div class="container">
                    <div class="carousel-caption">
                        <h2 id="sombrasTexto" >Manuel Antonio located in Quepos</h2>
                        <p id="sombrasTexto">Set high above the enchanting national park, Manuel Antonio boasts world-class views and beaches.</p>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Read more</a></p>
                    </div>
                </div>
            </div>

            <div class="carousel-item active">
                <img class="second-slide" src="<?php echo __RSC_PHO_HOST_PATH ?>/1.jpg" alt="Second slide">
                <div class="container">
                    <div class="carousel-caption">
                        <h2 id="sombrasTexto" >The whale tail at Uvita’s Marino Ballena National Park</h2>
                        <p id="sombrasTexto" >Nature works in mysterious ways. And one really interesting oddity of nature is the so called whale tail that juts into the Pacific Ocean on Costa Rica’s Southern Pacific Coast.</p>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Read more</a></p>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <img class="third-slide" src="<?php echo __RSC_PHO_HOST_PATH ?>volcan.jpg" alt="Third slide">
                <div class="container">
                    <div class="carousel-caption">
                        <h2 id="sombrasTexto" class= "jer">ARENAL VOLCANO</h2>
                        <p id="sombrasTexto">The volcano was dormant for hundreds of years and exhibited a single crater at its summit, with minor fumaroles activity, covered by dense vegetation.</p>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Read more</a></p>
                    </div>
                </div>
            </div>
                        <div class="carousel-item">
                <img class="quarter-slide" src="<?php echo __RSC_PHO_HOST_PATH ?>Monteverde.jpg" alt="Quarter slide">
                <div class="container">
                    <div class="carousel-caption">
                        <h2 id="sombrasTexto" >Monteverde cloud forest</h2>
                        <p id="sombrasTexto">Set high above the enchanting national park, Manuel Antonio boasts world-class views and beaches.</p>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Read more</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="fifth-slide" src="<?php echo __RSC_PHO_HOST_PATH ?>PuertoViejo.jpg" alt="fifth slide">
                <div class="container">
                    <div class="carousel-caption">
                        <h2 id="sombrasTexto">Puerto Viejo and the Caribean</h2>
                        <p id="sombrasTexto">Set high above the enchanting national park, Manuel Antonio boasts world-class views and beaches.</p>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Read more</a></p>
                    </div>
                </div>
            </div>

        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

        <section id="destinosCss">
        <div class="container" id="Destinos">
            <h1 style="color:white;">Destinations</h1>
          <div class="row">

        <?php
            $tours = $ctr_inicio->obtener_destinos();
            foreach ($tours as $value) {
              echo "<div class='col-md-4'>";
              echo "<div id= 'zoom' class='card mb-4 shadow-sm'  style='background-color:rgba(175,0,0,0.3);  border-style: solid;
                    border-color: black;'>";
              echo "
              <img class='card-img-top' style='height: 200px;' src='".__RSC_DESTIOS_HOST_PATH."$value[2]' alt='Card image cap'>";
              echo "<div class='card-body'>";
              echo "<h2><strong><a href='tours.php?Destino=$value[0]'>$value[0]</a></strong></h2>";
              echo "<p class='card-text'>$value[1]</p>";
              echo "<div class='d-flex justify-content-between align-items-center'>";
              echo "<div class='btn-group' style=' border-style: solid;  border-color: black;'>";
              echo "<button type='button' class='btn btn-sm btn-outline-secondary'>Read Information</button>";
              echo "</div>";
              echo "<img src='".__RSC_DESTIOS_HOST_PATH."$value[3]' style='max-width: 15%;'>";
              echo "</div>";
              echo "</div>";
              echo "</div>";
              echo "</div> ";
              }
        ?>
          </div>
      </div>
</section>


<?php
    include_once("UsoComun/footer.php");
?>