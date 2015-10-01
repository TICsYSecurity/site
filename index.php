<!--                 
http://www.ticsysecurituy.com.co
 -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ticsysecurity - Inicio</title>
  <!-- Bootstrap -->
  <link href="css/bootstrap.css" rel='stylesheet' type='text/css'/>
  <!-- Font Awesome  -->
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <!-- Web Font  -->
  <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>
  <!-- Custom CSS -->
  <link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
  <script src="js/jquery.min.js"></script>
  <!-- Google Analitycs -->
  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-66365087-1', 'auto');
  ga('send', 'pageview');
  </script>
</head>
<body>
  <?php include_once("include/barra-nav"); ?>
  <!-- Slider -->
  <div class="header-banner"> 
    <script src="js/responsiveslides.min.js"></script> 
    <script>
  			 $(function () {
  			  $("#slider").responsiveSlides({
  				auto: true,
  				nav: true,
  				speed: 500,
  				namespace: "callbacks",
  				pager: true,
  			  });
  			 });
  			 </script>
    <div class="container">
      <div class="slider">
        <div class="callbacks_container">
          <ul class="rslides" id="slider">
            <li> <img src="images/bnr1.jpg" alt="">
              <div class="caption">
                <h1>Soluciones Creativas<span>.</span></h1>
                <p>Las mejores soluciones para su empresa aplicando las ultimas tendencias en tecnológica IT. </p>
              </div>
            </li>
            <li> <img src="images/bnr2.jpg" alt="">
              <div class="caption">
                <h1>Soluciones Profesionales<span>.</span></h1>
                <p>Profesionales IT expertos en  Desarrollo de Sistemas de Información, Seguridad Perimetral y CCTV, Profesionales de Internet.</p>
              </div>
            </li>
            <li> <img src="images/bnr3.jpg" alt="">
              <div class="caption">
                <h1>Soluciones Personalizadas.<span>.</span></h1>
                <p>Estudiamos su negocio para ofrecerle la mejor solución.</p>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <hr>
  <!-- catalogos ccctv -->
  <div id="titulo-encabezado-servicio">
     <h2><b>Seguridad CCTV </b></h2>
  </div>
  <div class="divisor">
    <br>
  </div>
  <br>
  <div id="catalogos">
      <div class="container">
        <div class="row">
          <hr>
          <h5><i class="fa fa-angle-down"></i> Descarga de Catalogos</h5>
          <div class="alert alert-success" role="alert">Para descargar los catalogos de click sobre la imagenes<n/div>
        </div>
        <div class="row">
          <div class="col-xs-6 ">
            <a href="docs/catalogos/2015/hikvision-catalogo-2015.pdf" target="_blank" class="thumbnail">
              <img src="images/catalogos/hikvision.png" alt="Descarga Catalogo Hikvision">
            </a>
          </div>

          <div class="col-xs-6 ">
            <a href="docs/catalogos/2015/digiplex-catalogo-2015.pdf" target="_blank" class="thumbnail">
              <img src="images/catalogos/digiplex.png" alt="Descarga Catalogo Digiplex">
            </a>
          </div>
        </div>
      </div>
  </div>
  <hr>
  <div id="titulo-encabezado-servicio">
    <h2><b>Lo que hacemos</b></h2>
  </div>
  <div class="divisor">
    <br>
  </div>
  <?php include_once("include/portafolio-servicios"); ?>
  <!-- Proximos servicios "pronto pronto"-->
  <div id="titulo-encabezado-servicio">
    <h2><b>Próximos Servicios</b></h2>
  </div>
  <div class="divisor">
    <br>
  </div>
  <div id="main-services">
    <div class="container">
      <div class="row">
         <div class="col-lg-6 centered"> <i class="fa fa-shopping-cart fa-5x"></i>
          <h3>Tienda Virtual</h3>
          <p>Suministros de material para seguridad CCTV, cámaras análogas e ip, domos PTZ, dvr y nvr. Configuración remota por nuestros técnicos, solo necesitara instalar el software teamviewer o el plugin chrome Desktop para nosotros tomar su computadora por remoto y realizar las configuraciones de las cámaras ip para la visualización desde cualquier lugar del mundo.</p>
        </div>
         <div class="col-lg-6 centered"> <i class="fa fa-shopping-cart fa-5x"></i>
          <h3>Roseta Pi</h3>
          <p>Automatización y domotica para su hogar con raspberry pi, arduino, abra y cierre contactos eléctricos desde su mobil ( encender las luces de su casa, regar las plantas encender, una alarma, abrir la puerta de su casa) todo desde su ordenador o celular desde cualquier lugar del mundo con conectividad a Internet.</p>
        </div>
      </div>
    </div>
  </div>
  <div id="titulo-encabezado-servicio">
    <br>
  </div>
<!-- Footer -->
<div class="divisor">
    <br>
</div>
<?php include_once("include/barra-foot"); ?>
<!-- Bootstrap core JavaScript --> 
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>