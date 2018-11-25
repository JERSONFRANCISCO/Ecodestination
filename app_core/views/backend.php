  <?php

  require(__CTR_PATH . "ctr_login.php");

    $ctr_Login= new ctr_Login();

    if (isset($_POST['btn_logout'])) {
      $ctr_Login->btn_logout_click();
    }
?>
  <body>
    <!-- Navigation -->
    <nav class="navbar navbar-light bg-light static-top">
      <div class="container">
        <a class="navbar-brand" href="#">Back End</a>
        <form name="frm_app" method="post">
        <button class="btn btn-primary" type="submit" name="btn_logout" id="btn_logout" >Sing Out</button>
        </form>
      </div>
    </nav>

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
          <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('app_core/views/backend/img/servicios.jpg');"></div>


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
                 <option value="0">Select car:</option>
                 <option value="1">Audi</option>
                 <option value="2">BMW</option>
                 <option value="3">Citroen</option>
                 <option value="4">Ford</option>
                 <option value="5">Honda</option>
                 <option value="6">Jaguar</option>
                 <option value="7">Land Rover</option>
                 <option value="8">Mercedes</option>
                 <option value="9">Mini</option>
                 <option value="10">Nissan</option>
                 <option value="11">Toyota</option>
                 <option value="12">Volvo</option>
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

  </body>