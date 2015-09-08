<!--                 
http://www.ticsysecurituy.com.co
 -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Inicio TyS</title>
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
                <a href="services.html" class="btn">Mas Información</a> </div>
            </li>
            <li> <img src="images/bnr2.jpg" alt="">
              <div class="caption">
                <h1>Soluciones Profesionales<span>.</span></h1>
                <p>Profesionales IT expertos en  Desarrollo de Sistemas de Información, Seguridad Perimetral y CCTV, Profesionales de Internet.</p>
                <a href="services.html" class="btn">Mas Información</a> </div>
            </li>
            <li> <img src="images/bnr3.jpg" alt="">
              <div class="caption">
                <h1>Soluciones Personalizadas.<span>.</span></h1>
                <p>Estudiamos su negocio para ofrecerle la mejor solución.</p>
                <a href="services.html" class="btn">Mas Información</a> </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- Seccion Bienvenida -->
  <div id="section_header">
    <h2><span>Bienvenido nuestro sitio web!</span></h2>
  </div>
  <div id="welcome">
    <div class="container">
      <div class="col-md-6"> <img class="img-responsive" src="images/about1.jpg" align=""> </div>
      <div class="col-md-6">
        <h3>Sobre Nosotros</h3>
        <p>Somos una empresa de servicios de IT con más de 3 años de experiencia en el desarrollo e implantación de aplicaciones y soluciones tecnológicas. Aplicamos las mejores prácticas para hacer su negocio más competitivo, rentable, reduciendo costos y optimizando recursos.</p>
        <a href="about.html" class="btn">Mas Información</a> </div>
    </div>
  </div>
  </div>
  <!-- Servicios Actuales Vigentes jejejej -->
  <div id="section_header">
    <h2><span>Lo que hacemos</span></h2>
  </div>
  <div id="main-services">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 centered"> <i class="fa fa-video-camera fa-3x"></i>
          <h3>Seguridad CCTV</h3>
          <p>Montajes, instalaciones y configuraciones de Sistemas de Seguridad CCTV (DVR, NVR, Camaras Análogas e Ip, Domos PTZ), Monitoreo en tiempo real, Cloud Computing, P2P, visor de eventos y alertas.</p>
          <a href="services.html" class="btn">Mas Información.</a> </div>
        <div class="col-lg-4 centered"> <i class="fa fa-shield fa-3x"></i>
          <h3>Seguridad Perimetral</h3>
          <p>Instalación, integración de elementos y sistemas Firewall, autenticacion, detección de intrusos, protección de intrusos, administración de enlaces de red, sistemas de monitoreo para protección de su red corporativa.</p>
          <a href="services.html" class="btn">Mas Información.</a> </div>
        <div class="col-lg-4 centered"> <i class="fa fa-desktop fa-3x"></i>
          <h3>Websites y Tiendas Virtuales</h3>
          <p>Diseño de paginas web y tiendas virtuales, para su empresa (grande, mediana y pequeña). Sitios web  responsive design ajustable a cualquier resolución de pantalla ya sea Desktop o mobile (android, iphone, windows phone y blackberry).</p>
          <a href="services.html" class="btn">Mas Información.</a> </div>
        <div class="col-lg-4 centered"> <i class="fa fa-code fa-3x"></i>
          <h3>Sistemas de Información</h3>
          <p>Desarrollo de sistemas de información para su empresa, estudio de negocios, UML, casos de uso. Orientados al tratamiento y administración de datos e información.</p>
          <a href="services.html" class="btn">Mas Información.</a> </div>
        <div class="col-lg-4 centered"> <i class="fa fa-binoculars fa-3x"></i>
          <h3>SEO - Privacidad y Monitoreo</h3>
          <p>Asesoramos empresas, campañas políticas en posicionamiento web, redes sociales, blindado de celulares BlackPhone, seguridad en Internet, comunicaciones seguras y sistemas antimalware.</p>
          <a href="services.html" class="btn">Mas Información.</a> </div>
        <div class="col-lg-4 centered"> <i class="fa fa-sitemap fa-3x"></i>
          <h3>Infraestructura y Soporte</h3>
          <p>Soporte de redes WAN y LAN, configuración switch, routers, firewall, montajes y configuración de servicios en serves linux y windows,  mantenimiento preventivo y correctivo para computadores.</p>
          <a href="services.html" class="btn">Mas Información.</a> </div>
      </div>
    </div>
  </div>
  <!-- Proximos servicios "pronto pronto"-->
  <div id="proximos-servicios">
    <h2><span>Próximos Servicios</span></h2>
  </div> 
  <div id="about_section_1">
  <div class="container">
    <div class="row">
      <div class="col-lg-2"><i class="fa fa-shopping-cart fa-5x"></i></div>
      <div class="col-lg-10">
        <h3>Tienda Virtual</h3>
        <p >Suministros de material para seguridad CCTV, cámaras análogas e ip, domos PTZ, dvr y nvr. Configuración remota por nuestros técnicos, solo necesitara instalar el software teamviewer o el plugin chrome Desktop para nosotros tomar su computadora por remoto y realizar las configuraciones de las cámaras ip para la visualización desde cualquier lugar del mundo.</p>
      </div>
      <div class="col-lg-2"><i class="fa fa-plug fa-5x"></i></div>
      <div class="col-lg-10">
        <h3>Roseta Pi</h3>
        <p>Automatización y domotica para su hogar con raspberry pi, arduino, abra y cierre contactos eléctricos desde su mobil ( encender las luces de su casa, regar las plantas encender, una alarma, abrir la puerta de su casa) todo desde su ordenador o celular desde cualquier lugar del mundo con conectividad a Internet.</p>
      </div>
    </div>
  </div>
</div>
<!-- Footer -->
<div id="footerwrap">
  <div class="container">
    <div class="row">
      <div class="col-md-8"> <span class="copyright">Copyleft &copy; 2015 <a href="http://www.ticsysecurity.com." rel="nofollow">ticsysecurity.com.</a></span> </div>
      <div class="col-md-4">
        <ul class="list-inline social-buttons">
          <li><a target="_blank" href="https://www.facebook.com"><i class="fa fa-twitter"></i></a> </li>
          <li><a target="_blank" href="https://www.facebook.com/difo1992"><i class="fa fa-facebook"></i></a> </li>
          <li><a target="_blank" href="https://plus.google.com/+DiegoForero"><i class="fa fa-google-plus"></i></a> </li>
          <li><a target="_blank" href="https://www.facebook.com"><i class="fa fa-linkedin"></i></a> </li>
        </ul>
      </div>
    </div>
  </div>
</div>
<!-- Bootstrap core JavaScript --> 
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>