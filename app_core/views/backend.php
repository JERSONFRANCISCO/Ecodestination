  <?php

  require(__CTR_PATH . "ctr_login.php");
  require(__CTR_PATH . "ctr_destino.php");
  require(__CTR_PATH . "ctr_tours.php");
    $ctr_Login= new ctr_Login();
    $ctr_destino= new ctr_destino();
    $ctr_tours= new ctr_tours();

    if (isset($_POST['btn_logout'])) {
      $ctr_Login->btn_logout_click();
    }
    
    if (isset($_POST['btn_guardarInfo'])) {
       
       $ctr_destino->div_agregarInfo();
    }
    if (isset($_POST['btn_guardarInfo2'])) {
       
       $ctr_tours->div_agregarInfo2();
    }

require_once(__CTR_PATH . "ctr_inicio.php");
$ctr_inicio = new ctr_inicio();

?>
<style>
  body {
 
  margin: 0;
 
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

.ventana{
       width: 100%;
       height: 100%;
       color: #fff;
       position: relative;
       top: -20px;
       background-color:#fff;
       left: 0;
       display: none;
      }
.ventana2{
       width: 100%;
       height: 100%;
       color: #fff;
       position: relative;
       top: -20px;
       background-color:#fff;
       left: 0;
        display: none;
      }
.ventana3{
       width: 100%;
       height: 100%;
       color: #fff;
       position: relative;
       top: -20px;
       background-color:#fff;
       left: 0;
       display: none;
      }

.itinerario{
  width: 100%;
       height: 100%;
       color: #fff;
       position: relative;
       top: -20px;
       background-color:#fff;
       left: 0;
       display: none;
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
    <section class="features-icons bg-light text-center" >
      <div class="container" id='ventana2'>
        <div class="row">

           
          <div class="col-lg-4">
            <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
              <div class="features-icons-icon d-flex" >
               <button type='button'  onclick='openVentana2(); '> <i class="icon-plane m-auto text-primary" style="position: relative; left: 115px;"></i></button>  
              </div>
              <h3>Crear Destino</h3>
              <p class="lead mb-0">Crea tu destido con itinerario!</p>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
              <div class="features-icons-icon d-flex">
                <button type='button'  onclick='openVentana(); '> <i class="icon-refresh m-auto text-primary" style="position: relative; left: 115px;"></i></button> 
                
              </div>
              <h3>Editar Destino</h3>
              <p class="lead mb-0">Puedes hacer los cambios que gustes a cualquier destido!</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="features-icons-item mx-auto mb-0 mb-lg-3">
              <div class="features-icons-icon d-flex">
                  <button type='button'  onclick='openVentana3() '> <i class="icon-fire m-auto text-primary" style="position: relative; left: 115px;"></i></button> 
                
              </div>
              <h3>Borrar Destino</h3>
              <p class="lead mb-0">Puedes hacer uso del borrador de destinos para de esta manera no se vean reflejados en la pagina principal!</p>
            </div>
          </div>
        </div>
      </div>
    </section>



        <!-- Image Showcases -->
          <section class="showcase"  >
            <div class="container-fluid p-0"  >
              
              <div class="ventana2" id="ventana2">
                <div class="form">
                  <form method='post'>
                  <button type='button' class="btn btn-outline-dark" onclick='closeVentana();'><i class="fa fa-sign-out"></i> Cerrar</button> </form>

               <section id="services">
               
              <div class="row no-gutters">

                <div class="col-lg-12 order-lg-2 text-white showcase-img" style="background-image: url('');" >
                   
                    <div class="container" id="div_agregarInfo" >

                      <h1 style="color:black;">MODULO DE CREACIÓN</h1>
                      <div class="row" style="text-align: center;  float: left;">

                        <form style="color: black;" enctype="multipart/form-data" method="post">
                          <h2 style="color:black;">Nuevo Destino</h2>
                          <img id="img" style="height: 200px; width: 300px;"><br>
                          <br>
                          <input type="file" name="fotografia" id="fotografia" required tabindex="2"onchange="mostrar3()"/><br>
                          Nombre Destino:<br>
                          <input type="text" name="txt_destino" id="txt_destino" class="btn btn-outline-dark" style=" width: 300px;" required><br>
                          Detalle:<br>
                          <textarea rows="4" cols="22" name="txt_descripcion" id="txt_descripcion" class="btn btn-outline-dark" style=" width: 300px;" required> 
                          </textarea><br><br> Logo:<br>
                          <img id="log" style="height: 50px; width: 50px;"><br>
                          <input type="file" name="logo" id="logo" required tabindex="2"
                          onchange="mostrar()"/>
                          <br>
                          <input type='submit' id="btn_guardarInfo" value="Guardar Info" name="btn_guardarInfo" class="btn btn-outline-dark"><i class="fa fa-sign-out"></i> 
                        </form>
                      </div>
                  </div>

                     <div class="row" style="text-align: center; float: right;">
                        <form style="color: black;" enctype="multipart/form-data" method="post">
                          <h2 style="color:black;">Nuevo Tour</h2>
                          
                            <img id="img2" style="height: 200px; width: 300px;"/><br>
                          <br>
                           <input type="file" id="file2" name="file2" accept="image/*"  required onchange="mostrar2()"  /><br>
                          Nombre Tour:<br>
                          <input type='text' name='txt_tour' id="txt_tour" required  class='btn btn-outline-dark' style=' width: 300px; '><br>
                          Detalle:<br>
                          <textarea rows='4' cols='22' name='txt_des' id="txt_des" required class='btn btn-outline-dark' style=' width: 300px;'>
                          </textarea><br>
                           <?php  $tours = $ctr_inicio->obtener_destinos();
                          /*echo "<SELECT name='destino' id='destino'  onchange='cargarDestinoAjax();' >";

                          foreach ($tours as $value) {
                            echo "
                          <option value=$value[4]> $value[0]</OPTION>
                           ";
                    
                            }
                            echo "</SELECT>";
                               */
                            echo "
                                  
                                   <legend>Elige destino</legend>";
                                    foreach ($tours as $value) {
                                   echo "
                                   <label><input type='checkbox' id= 'checkdestino' name='checkdestino[]' value=$value[4]>$value[0]</label>";
                                     }
                               echo "<br>
                               ";
                                ?> 

                          <button type='button' class='btn btn-outline-dark' onclick='openIti();'><i class='fa fa-sign-out'></i> Agregar Itinerario</button>

                          <br>
                          
                          <div class="itinerario" id="itinerario" >

                                <div class="container" id="Destinos" >
                                  
                                  <h1 style="color:black;">Crear Itinerario al tour </h1>
                                     
                                       <select id="iti" required onchange="cargarItinerarioAjax2();" > 
                                        <option value=""> Seleccione los días del tour </option>
                                        <option value="1">1 Día</option>
                                        <option value="2">2 Días</option>
                                        <option value="3">3 Días</option>
                                        <option value="4">4 Días</option> 
                                        <option value="5">5 Días</option> 
                                        <option value="6">6 Días</option> 
                                         <option value="12">12 Días</option> 
                                        </select> 
                                       
                                        <div id= miconte2 class="row" >
                                          
                                        </div>
                                       
                                         <input type='submit' id="btn_guardarInfo2" value="Guardar Info2" name="btn_guardarInfo2" class="btn btn-outline-dark"><i class="fa fa-sign-out"></i> 
                                        <!--
                                        <img id="img2" style="height: 200px; width: 300px;"><br>
                                        <br>
                                        <input type="file" id="file2" accept="image/*" onchange="mostrar2()" style="position: relative; " /><br>
                                        Titulo:<br>
                                        <input type="text" name="firstname" class="btn btn-outline-dark" style=" width: 300px;"><br>
                                        Descripción:<br>
                                        <textarea rows="4" cols="22" class="btn btn-outline-dark" style=" width: 300px;">
                                        </textarea><br><br>
                                        <button type='button' class="btn btn-outline-dark" onclick='openTours();'><i class="fa fa-sign-out"></i> Guardar</button> 
                                          -->                           
                                    </div>
                          </div>
                        </form>
                      </div>
                 </div>
                </div>
               </section>
              </div>
             </div>
            </div>
            </section>
            
            
            <!-- Image Showcases -->
            <section class="showcase"  >
              <div class="container-fluid p-0"  >
                
                <div class="ventana" id="ventana">
                  <div class="form">
                    <form method='post'>
                    <button type='button' class="btn btn-outline-dark" onclick='closeVentana();'><i class="fa fa-sign-out"></i> Cerrar</button> </form>

         
                 
                <div class="row no-gutters">

                  <div class="col-lg-12 order-lg-2 text-white showcase-img" style="background-image: url('');" >
                     
                      <div class="container" id="Destinos" >

                          <h1 style="color:black;">MODULO DE EDICIÓN</h1>
                         
                            <SELECT name='destino' id='destino'  onchange='cargarDestinoAjax(); cargarTourComboBox();' >
                                <option value=0> Seleccione un Destino</OPTION>";
                            <?php  $tours = $ctr_inicio->obtener_destinos();
                                  foreach ($tours as $value) {
                                    echo "
                                  <option value=$value[4]> $value[0]</OPTION>
                                   ";
                            
                                    }
                                ?>
                            </SELECT><br> ;
                          

                        <div id=miconte style="float: left; color:black; ">
                         
                         </div>
                         </div>
                         <div class="container" id="Destinos" >
                         <div id=miconte3 style="float: left; color:black; ">
                          
                         </div>
                         <br>
                         <div id=miconte4 style="float: left; color:black; ">
                         
                         </div>
                         <br>
                         <div id=miconte5 style="float: left; color:black; ">
                         
                         </div>
                         <div id=miconte6 style="float: left; color:black; ">
                         
                         </div>
                         </div>
                  </div>
                 </div>
                  
                 </div>
                </div>
               </div>
              </section>

 
 <!-- Image Showcases -->
 <section class="showcase">
   <div class="container-fluid p-0"  >
     
     <div class="ventana3" id="ventana3">
       <div class="form">
         <form method='post'>
         <button type='button' class="btn btn-outline-dark" onclick='closeVentana();'><i class="fa fa-sign-out"></i> Cerrar</button> </form>

      <section id="services">
      
     <div class="row no-gutters">

       <div class="col-lg-12 order-lg-2 text-white showcase-img" style="background-image: url('');" >
          
           <div class="container" id="Destinos" >

               <h1 style="color:black;">Ocultar Destino</h1>
             <div class="row">

           <?php
               $tours = $ctr_inicio->obtener_destinos();
               foreach ($tours as $value) {
                 echo "<div class='col-md-4'>";
                 echo "<div id='zoom' class='card mb-4 shadow-sm'>";
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
      </div>
         </section>
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
      function cargarItinerarioAjax2(){
         $.ajax({
              type: 'POST', //tipo de paso de parametros
              url: 'mantenimientoAJAX.php', //Script PHP donde estan las peticiones
              //parametros POST y una key que usamos solo para saber que se hizo click examinandolo en el PHP

              data: { key: 'buscar2', des2: document.getElementById('iti').value }

              }).done(function( datos ) {
                  //Invocamos a cargarFuncionarios para refrescar la tabla HTML
                    $("#miconte2").html(datos);

              }).fail(function (jqXHR, textStatus, errorThrow){
                  //En caso de error de carga nos notifica
                  alert("Error al ingresar");
              });    
      }

      function openIti(){

          $('.itinerario').slideDown('slow');
      }
      
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
