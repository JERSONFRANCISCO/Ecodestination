  <?php

  require(__CTR_PATH . "ctr_login.php");

    $ctr_Login= new ctr_Login();

    if (isset($_POST['btn_logout'])) {
      $ctr_Login->btn_logout_click();
    }
    
require_once(__CTR_PATH . "ctr_inicio.php");
$ctr_inicio = new ctr_inicio();

?>
<style>
  body {
 
  margin: 0;
  font-family: 'Open Sans', Arial, sans-serif;
}

h1 {
  text-align: center;
  margin: 80px 0;
}

.mynav ul {
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
  list-style-type: none;
  padding: 0;
}

.mynav li:not(:last-child) {
  margin-right: 20px;
}

.mynav a {
  display: block;
  font-size: 20px;
  color: black;
  text-decoration: none;
  padding: 7px 15px;
}

.target {
  position: absolute;
  border-bottom: 4px solid transparent;
  z-index: -1;
  transform: translateX(-60px);
}

.mynav a,
.target {
  transition: all .35s ease-in-out;
}
</style>
  <body>
    <!-- Navigation
    <nav class="navbar navbar-light bg-light static-top">
      <div class="container">
        <a class="navbar-brand" href="#">Back End</a>
        <form name="frm_app" method="post">
        <button class="btn btn-primary" type="submit" name="btn_logout" id="btn_logout" >Sing Out</button>
        </form>
      </div>
    </nav>
 -->
<nav class="mynav">
 
     <div class="container">
       <ul>
        <li><a class="navbar-brand" href="#">Back End</a></li>
    <li><a href="">Home</a></li>
    <li><a href="">About</a></li>
    <li><a href="">Company</a></li>
    <li><a href="">Work</a></li>
    <li><a href="">Clients</a></li>
    <li><a href="">Contact</a></li>
    
    <form name="frm_app" method="post">
        <button class="btn btn-primary" type="submit" name="btn_logout" id="btn_logout" >Sing Out</button>
        </form>
        </ul>
    </div>

  
</nav>


<span class="target"></span>
    <!-- Masthead -->
    <header class="masthead text-white text-center">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <h1 class="mb-5">Welcome Admin!!</h1>
            <h1 class="mb-5">From this website you can make changes in the main page of tours.</h1>
          </div>
          <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
            <form>
              <div class="form-row">
                <div class="col-12 col-md-3">
                   <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services" style="position: relative;left: 60px;">Servicios</a>
                </div>
                <div class="col-12 col-md-3">
                   <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#tours" style="position: relative;left: 60px;">Tours</a>
                </div>
                 <div class="col-12 col-md-3">
                   <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#contacto" style="position: relative;left: 60px;">Tell Me More</a>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </header>

    <!-- Icons Grid -->
    <section class="features-icons bg-light text-center">
      <div class="container">
        <div class="row">

           
          <div class="col-lg-4">
            <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
              <div class="features-icons-icon d-flex">
                <i class="icon-screen-desktop m-auto text-primary"></i>
              </div>
              <h3>Fully Responsive</h3>
              <p class="lead mb-0">This theme will look great on any device, no matter the size!</p>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
              <div class="features-icons-icon d-flex">
                <i class="icon-layers m-auto text-primary"></i>
              </div>
              <h3>Bootstrap 4 Ready</h3>
              <p class="lead mb-0">Featuring the latest build of the new Bootstrap 4 framework!</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="features-icons-item mx-auto mb-0 mb-lg-3">
              <div class="features-icons-icon d-flex">
                <i class="icon-check m-auto text-primary"></i>
              </div>
              <h3>Easy to Use</h3>
              <p class="lead mb-0">Ready to use with your own content, or customize the source files!</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Image Showcases -->
    <section class="showcase">
      <div class="container-fluid p-0">
         <section id="services">
         
        <div class="row no-gutters">

          <div class="col-lg-6 order-lg-2 text-white showcase-img" >
              
              <div class="container" id="Destinos" style="border-style: solid;                        border-color: black; ">
                  <h1 style="color:white;">Destinations</h1>
                <div class="row">

              <?php
                  $tours = $ctr_inicio->obtener_destinos();
                  foreach ($tours as $value) {
                    echo "<div class='col-md-4'>";
                    echo "<div id= 'zoom' class='card mb-4 shadow-sm'  style='background-color: rgb(0,0,128); border-style: solid;
                          border-color: white;'>";
                    echo "
                    <img class='card-img-top' style='height: 200px;' src='".__RSC_DESTIOS_HOST_PATH."$value[2]' alt='Card image cap'>";
                    echo "<div class='card-body'>";
                    echo "<h2><strong><a href='tours.php?Destino=$value[0]'>$value[0]</a></strong></h2>";
                    echo "<p class='card-text'>$value[1]</p>";
                    echo "<div class='d-flex justify-content-between align-items-center'>";
                    echo "<div class='btn-group' style=' border-style: solid;  border-color: white;'>";
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

          </div>


          <div class="col-lg-6 order-lg-1 my-auto showcase-text">
              <h2>SERVICIOS</h2>
                <div class='col-md-4'>    
                <span class='fa-stack fa-4x'>   
                <i class='fas fa-circle fa-stack-2x text-primary'></i>  
                <i class='fas fa-home fa-stack-1x fa-inverse'></i>
                </span>
                </div>
                 <br> 
               <select style="position:relative; width: 268px; height: 30px;">
                 <option value="0">Select Place:</option>
                 <option value="1">Costa Rica</option>
                 <option value="2">Nicaragua</option>
                 <option value="3">Ecuador</option>
                 <option value="4">Galapagos Island</option>
                 <option value="5">Perú</option>
                 <option value="6">Panama</option>
              </select>

           <br><br>
            
             <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Servicio Ej: Hospedaje" required> <br>
             <textarea type="text" class="form-control" placeholder="Descripción" rows="10" cols="">
             </textarea>
             
          </div>
        </div>
         </section>
        <section id="tours">
        <div class="row no-gutters">
          <div class="col-lg-6 text-white showcase-img" style="background-image: url('app_core/views/backend/img/bg-showcase-2.jpg');"></div>
          <div class="col-lg-6 my-auto showcase-text">
            <h2>Updated For Bootstrap 4</h2>
            <p class="lead mb-0">Newly improved, and full of great utility classes, Bootstrap 4 is leading the way in mobile responsive web development! All of the themes on Start Bootstrap are now using Bootstrap 4!</p>
          </div>
        </div>
         </section>
          <section id="contacto">
        <div class="row no-gutters">
          <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('app_core/views/backend/img/bg-showcase-3.jpg');"></div>
          <div class="col-lg-6 order-lg-1 my-auto showcase-text">
            <h2>Easy to Use &amp; Customize</h2>
            <p class="lead mb-0">Landing Page is just HTML and CSS with a splash of SCSS for users who demand some deeper customization options. Out of the box, just add your content and images, and your new landing page will be ready to go!</p>
          </div>
        </div>
        </section>
      </div>
    </section>

    <!-- Testimonials -->
    <section class="testimonials text-center bg-light">
      <div class="container">
        <h2 class="mb-5">What people are saying...</h2>
        <div class="row">
          <div class="col-lg-4">
            <div class="testimonial-item mx-auto mb-5 mb-lg-0">
              <img class="img-fluid rounded-circle mb-3" src="app_core/views/backend/img/testimonials-1.jpg" alt="">
              <h5>Margaret E.</h5>
              <p class="font-weight-light mb-0">"This is fantastic! Thanks so much guys!"</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="testimonial-item mx-auto mb-5 mb-lg-0">
              <img class="img-fluid rounded-circle mb-3" src="app_core/views/backend/img/testimonials-2.jpg" alt="">
              <h5>Fred S.</h5>
              <p class="font-weight-light mb-0">"Bootstrap is amazing. I've been using it to create lots of super nice landing pages."</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="testimonial-item mx-auto mb-5 mb-lg-0">
              <img class="img-fluid rounded-circle mb-3" src="app_core/views/backend/img/testimonials-3.jpg" alt="">
              <h5>Sarah	W.</h5>
              <p class="font-weight-light mb-0">"Thanks so much for making these free resources available to us!"</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Call to Action -->
    <section class="call-to-action text-white text-center">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <h2 class="mb-4">Ready to get started? Sign up now!</h2>
          </div>
          <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
            <form>
              <div class="form-row">
                <div class="col-12 col-md-9 mb-2 mb-md-0">
                  <input type="email" class="form-control form-control-lg" placeholder="Enter your email...">
                </div>
                <div class="col-12 col-md-3">
                  <button type="submit" class="btn btn-block btn-lg btn-primary">Sign up!</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer class="footer bg-light">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
            <ul class="list-inline mb-2">
              <li class="list-inline-item">
                <a href="#">About</a>
              </li>
              <li class="list-inline-item">&sdot;</li>
              <li class="list-inline-item">
                <a href="#">Contact</a>
              </li>
              <li class="list-inline-item">&sdot;</li>
              <li class="list-inline-item">
                <a href="#">Terms of Use</a>
              </li>
              <li class="list-inline-item">&sdot;</li>
              <li class="list-inline-item">
                <a href="#">Privacy Policy</a>
              </li>
            </ul>
            <p class="text-muted small mb-4 mb-lg-0">&copy; Your Website 2018. All Rights Reserved.</p>
          </div>
          <div class="col-lg-6 h-100 text-center text-lg-right my-auto">
            <ul class="list-inline mb-0">
              <li class="list-inline-item mr-3">
                <a href="#">
                  <i class="fab fa-facebook fa-2x fa-fw"></i>
                </a>
              </li>
              <li class="list-inline-item mr-3">
                <a href="#">
                  <i class="fab fa-twitter-square fa-2x fa-fw"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-instagram fa-2x fa-fw"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script>
      (function () {

  var target = document.querySelector(".target");
  var links = document.querySelectorAll(".mynav a");
  var colors = ["deepskyblue", "orange", "firebrick", "gold", "magenta", "black", "darkblue"];

  function mouseenterFunc() {
    if (!this.parentNode.classList.contains("active")) {
      for (var i = 0; i < links.length; i++) {
        if (links[i].parentNode.classList.contains("active")) {
          links[i].parentNode.classList.remove("active");
        }
        links[i].style.opacity = "0.25";
      }

      this.parentNode.classList.add("active");
      this.style.opacity = "1";

      var width = this.getBoundingClientRect().width;
      var height = this.getBoundingClientRect().height;
      var left = this.getBoundingClientRect().left + window.pageXOffset;
      var top = this.getBoundingClientRect().top + window.pageYOffset;
      var color = colors[Math.floor(Math.random() * colors.length)];

      target.style.width = width + "px";
      target.style.height = height + "px";
      target.style.left = left + "px";
      target.style.top = top + "px";
      target.style.borderColor = color;
      target.style.transform = "none";
    }
  }

  for (var i = 0; i < links.length; i++) {
    links[i].addEventListener("click", function (e) {return e.preventDefault();});
    links[i].addEventListener("mouseenter", mouseenterFunc);
  }

  function resizeFunc() {
    var active = document.querySelector(".mynav li.active");

    if (active) {
      var left = active.getBoundingClientRect().left + window.pageXOffset;
      var top = active.getBoundingClientRect().top + window.pageYOffset;

      target.style.left = left + "px";
      target.style.top = top + "px";
    }
  }

  window.addEventListener("resize", resizeFunc);

})();
    </script>
  </body>