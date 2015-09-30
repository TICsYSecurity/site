<!--                 
http://www.ticsysecurituy.com.co
 -->
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Instalar Debian Jessie en Raspberry Pi 2</title>
  <!-- Bootstrap -->
  <link href="../../../css/bootstrap.css" rel='stylesheet' type='text/css'/>
  <!-- Font Awesome  -->
  <link href="../../../css/font-awesome.min.css" rel="stylesheet">
  <!-- Web Font  -->
  <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>
  <!-- Custom CSS -->
  <link href="../../../css/style.css" rel="stylesheet" type="text/css" media="all"/>
  <script src="../../../js/jquery.min.js"></script>
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
  <!-- Header -->
  <?php include_once('../../../include/barra-nav'); ?>
  <!-- Seccion Bienvenida -->
  <div id="welcome">
    <div class="container">
    <?php include_once('../../../include/user-pro-poster/user-jonathan-posada'); ?>
      <div class="col-md-9">
        <h3>Instalando Debian Jessie en Raspberry Pi 2</h3>
        <hr>
        <p>Como instalar Raspibian Jessie la ultima versión estable de debian, toda esta instalación se realiza Desde debian Jessie x86_64 ;), no apto para windoleros.</p>
        <center><img src="http://www.intorobotics.com/wp-content/uploads/2015/03/A-sweet-selection-of-the-Ra.jpg" width="50%" height="40%"></center>
        <p>Primero que todo descargar la imagen desde el sitio oficial de <a href="https://www.raspberrypi.org/downloads/" target="_blank">Raspberry org</a> o si  lo prefieres con el siguiente Comando</p>
        <pre><code>$wget http://212.187.212.153/bt/dffe8144ecd9af3961fdf142e39794e038f1cfc5/data/2015-09-24-raspbian-jessie.zip</code></pre>
        <p>Despues de haber descargado el archivo zip descomprimimos</p>
        <pre><code>$unzip 2015-09-24-raspbian-jessie.zip</code></pre>
        <p>Alista tu micro Sd para cargar la imagen "boot" ? </p>
        <center><img src="img/microsd.jpg" width="100%"></center>
        <p>Para partisionar la micro SD yo utilizo Gparted</p>
        <pre><code>#apt-get install gparted</code></pre>
        <p>con esto ya tendremos instalado el gparted y lo ejecutamos en una terminal como super usuario</p>
        <pre><code>#gparted</code></pre>
        <center><img src="img/gparted.png" width="100%"></center>
        <p>Seleccinamos el dispositivo lo desmontamos y lo dejamos de cero, recuerda salvar la información (Si lo necesitas), en mi caso la formatee y la deje en sistema de ficheros ext4.</p>
        <p>Abrimos una terminal como super usuario y digitamos el siguiente comando df -f</p>
        <pre><code>#df -h</code></pre>
        <p>les mostrara los discos de almacenamiento incluyendo la memoria y su punto de montaje</p>
        <center><img src="img/list-disk.png" width="100%"></center>
        <p>en este caso es el punto de montaje <b>/dev/sdb1</b> de mi micro sd.</p>
        <p>nos dirijamos al directorio en donde se encuentra la imagen descargada del Raspibian Jessie, desmontamos la micro con el siguiente comando</p>
        <p><b>Nota:</b> Tener en cuenta el punto de montaje de la Micro SD</p>
        <pre><code>#umount /dev/sdb1</code></pre>
        <p>despues de realizar el desmonte podemos realizar la instalacion del Raspibian Jessie de la siguiente manera</p>
        <pre><code>#dd bs=4M if=2015-09-24-raspbian-jessie.img of=/dev/sdb1</code></pre>
        <p>en este paso esperamos unos buenos minutos (Yo voy a salir a fumarme un porro jeje).</p>
        <center><img src="img/raspberrypi.jpg" width="100%"></center>
        <p>todo listo despues de un rato el sistema arranca sin problema</p>
        <img src="img/raspi-config.png" width="100%">
        <br />        <br />
        <p>Fin todo listo este post ojala algún día lo leas fernanda beltran te quiero mucho.</p>
    </div>
  </div>
  </div>
  <!-- Servicios Actuales Vigentes jejejej -->
  
  <!-- Footer -->
  <?php include_once('../../../include/barra-foot'); ?>
  <!-- Bootstrap core JavaScript --> 
  <script type="text/javascript" src="../../../js/bootstrap.min.js"></script>
</body>
</html>