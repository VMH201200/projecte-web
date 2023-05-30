<?php 
include ("php/Conexion.php"); 
$sql_detalles = $conexion->query("SELECT * FROM detalles");
if (isset($_GET['id_detalles'])) {
  $id_detalles = $_GET['id_detalles'];

  $sql_detalles = $conexion->query("SELECT * FROM detalles WHERE id_categoria=$id_detalles");
} else {
  $sql_detalles = $conexion->query("SELECT * FROM detalles");

}
$query = $conexion->query("SELECT * FROM articles ORDER BY fecha_publicacion DESC LIMIT 3");


?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <title>Proyecto 1DAW - SOLVAM</title>

  <!-- CSS ================================================== -->
  <link rel="stylesheet" href="css/reset.css">

  <!-- Favicons ================================================== -->
  <link rel="shortcut icon" href="img/favicon.ico">

  <!-- JS ================================================== -->

  <style>
    @import url('https://fonts.googleapis.com/css2?family=Oswald&display=swap');
  * {margin:0px;padding: 0px;}
   
  .footer {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 100px;
      background-color: #333333;
      color: #FFFFFF;
    }
    .footer h3 {
      margin: 0;
      padding: 0;
    }

    .footer ul {
      list-style: none;
      margin: 0;
      padding: 0;
    }
    .footer li {
      display: inline-block;
      margin: 0 10px;
    }

    .ultimas-entradas{
      width:70px;
    }

    .maps{
      width: 270px;
      margin-left:20px;
      transition: all 0.3s ease-in-out;
      border: 1px solid red;
      float:right;

    }
    

    .media {
      width: 360px;
      height: 260px;
      transition: all 0.3s ease-in-out;
      border: 1px solid red;


    }
    .social-media ul li {
      width: 47px;height:47px;float: left;
      background-image: url("img/social-icons.png");
      border: 1px solid green;
    }
    .social-media ul li:nth-child(1):hover {
      background-position: 0px -47px;
    }
    .social-media ul li:nth-child(1){
      background-position: 0px 0px;
    }
    .social-media ul li:nth-child(2){
      background-position: -51px 0px;
    }
    .social-media ul li:nth-child(2):hover{
      background-position: -51px 140px;
    }
    .social-media ul li:nth-child(3){
      background-position: -103px 0px;
    }
    .social-media ul li:nth-child(3):hover{
      background-position: -103px 140px;
    }
    .social-media ul li:nth-child(4){
      background-position: -156px 0px;
    } 
    .social-media ul li:nth-child(4):hover{
      background-position: -156px 140px;
    } 

    body {
      background-image: url('img/page-bg-1.jpg');
      background-size: cover;
      background-repeat: no-repeat;
    }

    .gallery {
      list-style: none;
      bottom: 150px;
      border: 1px solid red;

    }

    .gallery li {
      display: inline-block;
      top: 100px;
      width: 270px;
      height: 280px;
      margin: 5px;
      text-align: center;
      box-shadow: 0px 5px 5px rgba(0, 0, 0, 0.2);
    }

    .gallery img {
      width: 270px;
      height: 220px;
      transition: all 0.3s ease-in-out;
    }

    .gallery img:hover {
      filter: brightness(50%);
    }

    .gallery h3 {
      margin: 0;
      padding: 5px;
    }

    .gallery .buttons {
      background-size: cover;
      background-color: aquamarine;
      background-repeat: no-repeat;
    }

    .gallery p {
      margin: 0;
      padding: 5px;
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
    }

    .gallery button {
      margin: 10px;
      padding: 10px;
      border: none;
      background-image: url('img/gallery-item-icons.png');
      width: 42px;
      height: 42px;
      border: 1px solid red;
      cursor: pointer;
      transition: all 0.3s ease-in-out;
    }

    .gallery button.detalles {
      background-position: -42px 0px;
    }

    .gallery button:hover {
      background-color: #FF0000;
    }

    .container {
      max-width: 1170px;
      margin: 0 auto;
    }

    .logo-area {
      width: 470px;
      height: 55px;
      float: left;
    }

    nav {
      float: right;
    }

    .logo {
      width: 180px;
      height: 55px;
      border: 1px solid red;
    }


    nav ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
    }

    nav>ul>li {
      display: inline-block;
    }

    nav ul li a {
      display: block;
      padding: 10px;
      background-color: blue;
      color: white;
      text-decoration: none;
    }

    nav ul li a:hover {
      background-color: aquamarine;
    }

    nav ul li ul li a {
      background-color: rgb(56, 56, 56);
      color: white;
      background-color: blue;
    }

    nav ul li ul li a:hover {
      background-color: aquamarine;
    }

    nav ul li:hover>ul {
      display: block;
    }

    nav ul li ul {
      display: none;
      position: absolute;
    }

    .gallery-content {
      left: 100px;
      bottom: 100px;
      padding-top: 50px;
      text-align: right;
      border: 1px solid red;
    }


    div#contenedor-galeria {
      width: 400px;
      height: 300px;
      margin: 0px;
      perspective: 1000px;
      transform-style: preserve-3d;
      border: 1px solid red;
    }


    div#galeria {
      float: left;
      width: 100px;
      height: 400px;
      transform-style: preserve-3d;
      transition: all 4s linear 0s;
      border: 1px solid red;

    }

    div#galeria:hover {
      transform: rotateX(360deg);
      transition: all 4s linear 0s;
    }

    div#galeria div {
      top: 80px;
      left: 100px;
      position: absolute;
      border: 1px solid red;
    }

    div#galeria div:nth-child(1) {
      transform: rotateX(90deg) translateZ(100px);
    }

    div#galeria div:nth-child(2) {
      transform: rotateX(-90deg) translateZ(100px);
    }

    div#galeria div:nth-child(3) {
      transform: rotateX(180deg) translateZ(100px);
    }

    div#galeria div:nth-child(4) {
      transform: translateZ(100px);
    }

    .gallery-content h1 {
      font-family: 'Oswald', sans-serif;
      text-shadow: 2px 2px #525252;
      font-size: 24px;
      font-weight: bold;
      text-transform: uppercase;
      line-height: 1.5;
      text-align: right;
    }

    .gallery-content h2 {
      font-family: Georgia, serif;
      font-size: 18px;
      font-weight: normal;
      color: #FF0000;
      text-decoration: none;
      text-align: right;
    }

    .gallery-content h3 {
      font-family: Courier New, monospace;
      font-size: 14px;
      font-weight: normal;
      color: #008000;
      text-align: right;
    }

    div#contenedor {
      width: 1170px;
      margin: 0px auto;
    }

    div#pie1 {
      border: 2px solid red;
      width: 280px; height: 280px;
      float: left;
      border:1px solid red;
    }
    div#pie1 div.about-us {
      border: 2px solid pink;
      padding-right:250px;
    }
    div#pie1 div.social-media {
      border:2px solid green;
      margin-right: -50px;
    }

    p.limpiar {
      clear: both;
    }
  </style>
</head>

<body>
  <div id="contenedor">
    <div class="logo-area">
      <img src="img/logo.png" alt="Logo" class="logo">
    </div>
    <nav>
      <ul>
        <li><a href="https://www.vicentemagraner.com.es/proyecto_solvam/index.php">Home</a></li>
        <li><a href="https://www.vicentemagraner.com.es/proyecto_solvam/detalles.php">Detalles</a></li>
        <li><a href="https://www.vicentemagraner.com.es/proyecto_solvam/blog.php">Artículos</a>
          <ul>
            <li><a href="https://www.vicentemagraner.com.es/proyecto_solvam/blog.php?id_categoria=1">General</a></li>
            <li><a href="https://www.vicentemagraner.com.es/proyecto_solvam/blog.php?id_categoria=2">Terapias</a></li>
            <li><a href="https://www.vicentemagraner.com.es/proyecto_solvam/blog.php?id_categoria=3">Técnicas</a></li>
          </ul>
        </li>
        <li><a href="https://www.vicentemagraner.com.es/proyecto_solvam/contacto.php">Contacto</a></li>
        <li><a href="#">Acceso privado</a></li>
      </ul>
    </nav>
    <p class="limpiar"></p>
    <div id="contenedor-galeria">
      <div id="galeria">
        <div><img src="https://picsum.photos/400/200?random=1" /></div>
        <div><img src="https://picsum.photos/400/200?random=2" /></div>
        <div><img src="https://picsum.photos/400/200?random=3" /></div>
        <div><img src="https://picsum.photos/400/200?random=4" /></div>
      </div>
    </div>
    <div class="gallery-content">
      <h1>Web de prueba</h1>
      <h2>Aquí se insertara el texto de la noticia</h2>
      <h3>Y el subtitulo</h3>
    </div>


    <ul class="gallery">
    <?php
     while($fila=$sql_detalles->fetch_array()){
        $id_detalles=$fila[0];
     $titulo=$fila[1];
     $imagen=$fila[5];
        ?>
      <li>
        <img src="img/detalles/<?php echo $imagen;?>" alt="Gray">
        <div class="buttons">
        <button onclick="location.href='detalles.php?id_detalles=<?php echo $id_detalles; ?>'"></button>
          <button class="detalles"></button>
        </div>
        <h3><?php echo $titulo;?></h3>
      </li>
      <?php
     }
     ?>
    
    </ul>
    <p class="limpiar"></p>
    <div class="footer">
      <div id="pie1">
        <div class="about-us">
          <h3>Sobre Nosotros</h3>
          <img src="img/logo.png" alt="Logo" class="logo">
        </div>

        <div class="social-media">
          <ul>
            <li></li>
            <li></li>
            <li></li>
            <li></li>

          </ul>
        </div>
      </div>

      <div class="media">
        <h2>Galería de fotos</h2>
        <iframe width="360" height="230" src="https://www.youtube.com/embed/_hXkqxVMh3U" frameborder="0"
          allowfullscreen></iframe>
      </div>
      <div class="maps">
        <h2>Donde estamos</h2>
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.054704660767!2d-73.9850996845932!3d40.74844097932847!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c259a6e5e9a6d7%3A0x5b8a5b5c8c4b8f9e!2sEmpire%20State%20Building!5e0!3m2!1sen!2sus!4v1653270346669!5m2!1sen!2sus"
          width="270" height="230" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <div class="ultimas-entradas">
        <?php      
      while($fila=$query->fetch_array()){
        $titulo=$fila[1];
        ?>
          <h3>Ultimas Entradas</h3>
          <ul>
            <li><?php echo $titulo;?></li>
            <li><?php echo $titulo;?></li>
            <li><?php echo $titulo;?></li>

          </ul>
          <?php
      }
      ?>
        </div>
      </div>
    </div>

</body>

</html>