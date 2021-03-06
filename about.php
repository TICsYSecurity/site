<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>ticsysecurity - Quienes Somos</title>
<!-- Bootstrap -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css'/>
<!-- Font Awesome  -->
<link href="css/font-awesome.min.css" rel="stylesheet">
<!-- Web Font  -->
<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>
<!-- Custom CSS -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<script src="js/jquery.min.js"></script>
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
<div id="section_header">
  <div class="container">
    <h2>Somos Informaticos Con Calidad</h2>
  </div>
</div>
<div id="about_section_1">
  <div class="container">
    <div class="row">
      <div class="col-lg-6"> <img src="images/about1.jpg" class="img-responsive" alt=" "> </div>
      <div class="col-lg-6">
        <h3>¿Quienes somos?</h3>
        <p >Somos informáticos oriundos de la sabana de Cundinamarca, nos encanta la filosofia del Software Libre y contamos con más de cinco (05) años de experiencia en Tecnologias de la Información en el departamento de Cundinamarca.</p>
        <h3>Historia</h3>
        <p>En el año 2009 nos conocimos en la Universidad de Cundinamarca de Facatativá, de la cual algunos ya somos egresados en la profesión de Ingeniero De Sistemas y otros estamos en semestres a fines, hemos realizado trabajos tanto individuales como grupales que incluyen desde el mantemiento preventivo y correctivo de algunos Cafe Internet ubicados en las ciudades de Facatativá, Madrid, Mosquera, Funza y otras aledañas; Hasta instalación de Sistemas de Seguridad principalmente camaras, desarrollo de software con integraciones biometricas y administración de firewall, aplicativos y bases de datos.</p>
      </div>
    </div>
  </div>
</div>
<!-- Why choose us Section -->
<div id="section_header">
  <h2><span>¿Porque escogernos?</span></h2>
</div>
<div id="about_section_2">
  <div class="container">
    <div class="row">
    <!-- Acordion Inicio -->
      <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="headingOne">
            <h4 class="panel-title">
              <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                <h3><i class="fa fa-graduation-cap"></i>Somos autodidactas y siempre estamos a la vanguardia</h3>
              </a>
            </h4>
          </div>
          <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
            <div class="panel-body">
              <p>Somos personas que nos interesa estar actualizados en el campo de Tecnologias de la Información y Comunicación, investigando siempre las nuevas tendencias en Hardware y Software, lenguajes de programación y mejores practicas ya que esto avanza día a día.</p>
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="headingTwo">
            <h4 class="panel-title">
              <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                <h3><i class="fa fa-trophy "></i>Garantizamos la calidad de nuestro trabajo a los clientes siempre</h3>
              </a>
            </h4>
          </div>
          <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
            <div class="panel-body">
              Entendemos que cuando se adquiere un producto queremos que este sea el mejor del mercado y poderle sacar el mejor provecho, por lo cual garantizamos la calidad de nuestros productos siempre.            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="headingThree">
            <h4 class="panel-title">
              <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                <h3><i class="fa fa-globe"></i>Nuestros productos estan orientados a cumplir necesidades globales</h3>
              </a>
            </h4>
          </div>
          <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
            <div class="panel-body">
            Actualmente nuestros principales productos son Camaras de seguridad que puede visualizar desde cualquier lugar del mundo y desde cualquier dispositivo (Celular, Tablet y/o Computador.) y paginas web de contenido estatico.
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Our clients Section -->
<div id="section_header">
  <h2><span>Nuestros</span> clientes</h2>
</div>
<?php include_once("include/barra-clientes"); ?>
<!-- Footer -->
<?php include_once("include/barra-foot"); ?>
<!-- Bootstrap core JavaScript --> 
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>