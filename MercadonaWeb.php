<!doctype html>

<html lang="en">

  <head>

    <!-- Required meta tags -->

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">


    <title>Mercadona</title>

  </head>

  <body>
      <div class="container">
        <div class="row">
          <div class="col">
            <img id= "imglogo" src="imagenes/logo.jpg" alt="mercadona">
          </div>
          <div class="col1">
          <button id="compra" type="button" class="btn btn-danger"><i class="fas fa-shopping-cart"></i> Compra Online</button>
          </div>
        </div>
      </div>
      
      <header>
      <nav class="navbar navbar-expand-lg ">
        <a class="navbar-brand" >Conocenos</a>
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="navbar-brand" >Supermercados </a>
            </li>
            <li class="nav-item">
              <a class="navbar-brand" >Servicios</a>
            </li>
            <li class="nav-item">
              <a class="navbar-brand" >Consejos</a>
            </li>
            <li class="nav-item dropdown">
              <a class="navbar-brand" > Actualidad </a>
            </li>
              <li class="nav-item">
              <a class="navbar-brand" >Atencion al Cliente</a>
              </li>
            </li>
          </ul>
        </div>
        </nav>
      </header>
      <!--<img id="fresones" src="imagenes/fresones.jpg" alt"Trasmediterranea" width="100%">-->
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="imagenes/coco.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="imagenes/fresones.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="imagenes/cachorros.jpg" alt="Third slide">
        </div>
      </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      <br>
      <br>
      <h1 class="title">Actualidad Mercadona</h1>
      <br>
      <br>
      <div id= "container"class="container">
          <div class="row">
            <div id= "columnas" class="col-md-4">
                <img src = "imagenes\foto3.jpg"  width="100%">
                 <span id="span">Vacantes de empleo Logística y Mantenimiento en Mercadona</span>
              <div class="date">17 de abril de 2018</div>
              <form action= "https://www.mercadona.es/es/actualidad/empleo-1/new-tag">
                <button type="button" class="btn btn-outline-secondary">Empleo</button>
              </form>
            </div>
            <div id= "columnas" class=col-md-4>
                <img src = "imagenes\foto4.jpg"  width="100%">
                  <span id="span">Mercadona dona 27.000 litros de leche Hacendado a los Bancos de Alimentos de Tarragona y Lleida</span>
                <div class="date">16 de abril de 2018</div>
                <form action= "https://www.mercadona.es/es/actualidad/rsc/new-tag">
                  <button type="button" class="btn btn-outline-secondary">Responsabilidad Social</button>
                </form>
                <form action= "https://www.mercadona.es/es/actualidad/donaciones-de-alimentos/new-tag">
                    <button type="button" class="btn btn-outline-secondary">Donaciones de alimentos</button>
                </form>
                <br>
                <br>
            </div>
            <div id= "columnas" class="col-md-4">
                <img src = "imagenes\foto5.jpg"  width="100%">
                  <span id="span">Vacantes de empleo para el Departamento de Informática en Mercadona</span>
                  <div class="date">12 de abril de 2018</div>
                <form action= "https://www.mercadona.es/es/actualidad/empleo-1/new-tag">
                  <button type="button" class="btn btn-outline-secondary">Empleo</button>
                  <br>
                </form>                      
            </div>                  
          </div>
      </div>
      <br>
      <br>
      <p id="ver">
         <a id="text" href="https://www.mercadona.es/es/actualidad" target="_blank">Ver Todos</a>
      <br>
      <br>
      <div id="supermercadosApp">
        <div class="primerBloque">
          <div style="">
            <h2 class="supermercadosTitulo">Mercadona cuenta con 1.626 supermercados.<br> Encuentra tu Mercadona más cercano y su horario</h2>
              <div class="inputBusquedaBloque">
                <div class="inputBusqueda">
                  <input placeholder="Ciudad, código postal o dirección" id="busquedaInput" class="busquedaInput" type="text">  
                  <button  type="submit" class="busquedaBoton" ><i class="fas fa-search"></i> Buscar</button>
                </div>
              </div>
          </div>
        </div>
        <br>
        <div id="ver">
          <a id="ubicacion" href="http://www.google.es/" target="_blank"><i class="fas fa-location-arrow"></i> Usar mi localización actual</a>
        </div>
      </div>
      <br>
      <br>
      <br>
      <h1 class="title">Consejos</h1>
      <br>
      <br>
      <div id= "container"class="container">
          <div class="row">
            <div id= "columnas" class="col-md-4">
                <img src = "imagenes\foto6.jpg"  width="100%">
                <br>
                <br>
                 <h3>Alimentacion</h3>
                 <br>
              <p class="consejos">Descubre todas nuestras novedades y consejos para darle sabor y alegría a tus platos, siempre con productos que garantizan la máxima calidad y frescura. ¡Dale un capricho a tu paladar!</p>
              <form action= "https://www.mercadona.es/es/consejos/alimentacion">
              </form>
            </div>
            <div id= "columnas" class=col-md-4>
                <img src = "imagenes\foto7.jpg"  width="100%">
                <br>
                <br>
                  <h3>Perfumeria</h3>
                  <br>
                <p class="consejos">Todo lo que necesitas para tu cuidado y el de los tuyos: novedades, consejos y trucos sobre nuestros productos de perfumería, puericultura, cosmética y belleza. ¡Siéntete bien!</p>
                <form action= "https://www.mercadona.es/es/consejos/perfumeria">
                </form>
            </div>
            <div id= "columnas" class="col-md-4">
                <img src = "imagenes\foto8.jpg"  width="100%">
                <br>
                <br>
                  <h3>Hogar</h3>
                  <br>
                  <p class="consejos">Aquí encontrarás todo lo necesario para el cuidado diario de tu casa: productos para la limpieza y mantenimiento del hogar y de la ropa, que cuentan con la máxima garantía de calidad y eficacia. ¡Hogar, dulce hogar!</p>
                <form action= "https://www.mercadona.es/es/consejos/hogar">
                </form>                      
            </div>                  
          </div>
      </div>
      <br>
      <br>
      <p id="ver">
         <a id="text" href="https://www.mercadona.es/es/consejos" target="_blank">Ver Todos</a>
      <br>
      <br>


    
      <div class="row">             
        <div class="col-xs-12-1 col-sm-6">
          <a href="/es/atencion-al-cliente" class="block-content">
            <div class="icon">
              <span class="icon-fmd-bullhorn" aria-hidden="true"></span>
            </div>  
                <br>
                <br>
              <h3 id="blanco"><i class="fas fa-bullhorn"></i><br><br>Atención al Cliente</h3>  
            <div>
              <br>
              <br>
            <p id="blanco">Puedes realizar cualquier comentario<br> o&nbsp;consulta&nbsp;llamándonos&nbsp;a nuestro&nbsp;
              <strong>teléfono<br> gratuito de Atención al Cliente</strong>,<br> enviando&nbsp;un&nbsp;
              <strong>Correo Electrónico</strong>&nbsp;o si lo prefieres<br> contacta&nbsp;con nosotros a través de nuestras&nbsp;
              <strong>Redes<br> Sociales</strong>.</p>
            </div>
          </a>
        </div>
        <div class="col-xs-12-2 col-sm-6">
          <a href="/es/conocenos/sala-de-prensa" class="block-content salaPrensaHome">
            <div class="icon salaPrensaHome">
              <span class="icon-fmd-notebook salaPrensaHome" aria-hidden="true"></span>
            </div>
                <br>
                <br>
              <h3 id="blanco" class="salaPrensaHome"><i class="fas fa-clipboard-list"></i><br><br>Sala de Prensa</h3>
            <div class="salaPrensaHome">
              <br>
              <br>
              <p id= "blanco">Notas de prensa, estudios, informes, memorias<br> anuales y otro material corporativo.</p>
            </div>
          </a>
        </div>
      </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <div>
      <h1 class="title">Ofertas de empleo</h1>
      <br>
      <br>
      <p id="oferta">Mercadona dispone de un Modelo de Recursos Humanos reconocido<br> por ofrecer puestos de trabajo estables y de calidad.</p>
      <br>
      <form id= "centrate" action:"https://www.mercadona.es/es/conocenos/empleo">
        <button type="button" class="btn btn-outline-secondary">Ofertas de empleo</button>
      </form>
    </div>
    <br>
    <br>
    <div id="mercadona" >
      <a href="https://www.mercadona.es/es/inicio"> 
        <img id= "logo2" src="imagenes/logo2.jpg" alt="mercadona" width="450"/>
    </div>
    <br>
    <footer class="footer">   
      <br>
      <div class="row" id="row-foot">
        <div class="col" id="col-foot">
          <nav class="footer-nav">          
                <h3 id="foot" >Lo más buscado</h3>
                    <a id="foot2" href="/es/supermercados">Localizar Supermercados</a>
                    <br>
                    <a id="foot2" href="/es/conocenos/empleo">Trabaja con nosotros</a>
                    <br>
                    <a id="foot2" href="/es/conocenos/sala-de-prensa">Sala de Prensa</a>
                    <br>
                    <a id="foot2" href="/es/conocenos">Conoce Mercadona</a>
                    <br>
                    <a id="foot2" href="/es/consejos">Consejos</a>
          </nav>
        </div>
        <div class="col" id="col-foot">
          <nav class="footer-nav">
                  <h3 id="foot" >Enlaces de interés</h3>
                      <a id="foot2" href="https://www.mercadona.es/entrada.php?nidioma=1">Compra online</a>
                      <br>
                      <a id="foot2" href="https://www.tarjetamercadona.es/local_tlaf/login_tlaf_mercadona_CAS.html" target="_blank">Tarjeta Mercadona</a>
                      <br>
                      <a id="foot2" href="https://www.portalcliente.mercadona.es/pclie/web/op.htm?operation=pclie.flow.inicio&amp;fwk.locale=es_ES" target="_blank">Factura Clientes</a>
                      <br>
                      <a id="foot2" href="http://www.portaltrabajador.mercadona.es/" target="_blank">Portal Trabajador</a>
                      <br>
                      <a id="foot2" href="https://www.facturas.mercadona.es">E-factura proveedores</a>
                      <br>
                      <a id="foot2" href="https://www.portaltrinidad.es" target="_blank">Portal Trinidad</a>
          </nav>
        </div>
        <div class="col" id="col-foot">
          <nav>
                    <h3 id="foot" >Consejos</h3>
                        <a id="foot2" href="/es/consejos/alimentacion">Consejos de Alimentación</a>
                        <br>
                        <a id="foot2" href="/es/consejos/perfumeria">Consejos de Perfumería</a>
                        <br>
                        <a id="foot2" href="/es/consejos/hogar">Consejos de Hogar</a>
                        <br>
                        <a id="foot2" href="/es/consejos/mascotas">Consejos de Mascotas</a>
          </nav>
        </div>
        <div class="col" id="col-foot">
          <nav>
                    <h3 id="foot" >Atención al cliente</h3>
                        <a id="foot2" href="/es/atencion-al-cliente">
                          <span class="footer-contact-envelope"><i class="fas fa-envelope"></i> Contacto</span>
                        </a>
                        <br>
                        <a id="foot2" href="tel:900500103">
                          <span class="footer-contact-phone"><i class="fas fa-phone"></i> 900 500 103</span>
                        </a>
                        <br>
                        <br>
                    <h3 id="foot" >Redes sociales</h3>
                        <a id="foot2" href="http://www.facebook.com/mercadona" target="_blank">
                          <span class="oculto hidden-print"><i class="fab fa-facebook"></i></span>
                        </a>
                        <a id="foot2" href="https://twitter.com/mercadona" target="_blank">
                          <span class="oculto hidden-print"><i class="fab fa-twitter"></i></span>
                        </a>
                        <a id="foot2" href="https://www.youtube.com/mercadona" target="_blank">
                          <span class="oculto hidden-print"><i class="fab fa-youtube"></i></span>
                        </a>
                        <a id="foot2" href="https://www.instagram.com/mercadona/" target="_blank">
                          <span class="oculto hidden-print"><i class="fab fa-instagram"></i></span>
                        </a>
          </nav>
        </div>
        <div class="col" id="col-foot">
          <nav>
                    <div class="corredor">
                      <a id="foot2" href="https://elcorredormediterraneo.com" target="_blank">
                        <img src="imagenes/corredor.jpg" alt="Nosotros apoyamos El Corredor Mediterráneo">
                      </a>
                    </div>
          </nav>
        </div>
      </div>
    </footer>

<!-- Optional JavaScript -->

       <!-- jQuery first, then Popper.js, then Bootstrap JS -->

       <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>




                      
<nav class="nav">
  <a class="nav-link active" href="#"><i class="far fa-check-square"></i> RESERVAR</a>
  <a class="nav-link" href="#"><i class="fas fa-search"></i> BUSCAR</a>
  <a class="nav-link" href="#"><i class="fas fa-bars"></i> MENÚ</a>
</nav>               

