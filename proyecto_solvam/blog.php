<?php
include("php/Conexion.php");
$sql_Categorias = $conexion->query("SELECT * FROM Categorias");
if (isset($_GET['id_categoria'])) {
  $id_categoria = $_GET['id_categoria'];

  $sql_detalles = $conexion->query("SELECT * FROM articles WHERE id_categoria=$id_categoria");
} else {
  $sql_detalles = $conexion->query("SELECT * FROM articles");

}

$article_id = $_GET['id'];

$sql_populares = $conexion->query("SELECT * FROM articles limit 3");

$sql_visitas= $conexion->query("UPDATE articles SET Visitas = Visitas + 1 WHERE id = id");

?>


<!DOCTYPE html>
<html>

<head>
  <title>Mi blog</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Oswald&display=swap');

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


    .imagen-recortada {
      left: 270px;
      bottom: -640px;
      position: absolute;
      clip: rect(0px, 49px, 48px, 0px);
      border: 1px solid red;
    }

    .imagen-recortada:hover {
      left: 270px;
      bottom: -600px;
      position: absolute;
      clip: rect(49px, 48px, 231px, 0px);
      border: 1px solid red;
    }

    .social-media a {
      display: inline-block;
      width: 32px;
      height: 32px;
      background-size: contain;
      background-repeat: no-repeat;
      background-position: center;
    }

    .social-media a.facebook {
      background-image: url('facebook.png');
    }

    .social-media a.twitter {
      background-image: url('twitter.png');
    }

    .social-media a.twitter:hover {
      background-image: url('twitter-hover.png');
    }

    .social-media a.instagram {
      background-image: url('instagram.png');
    }

    .social-media a.instagram:hover {
      background-image: url('instagram-hover.png');

    }

    .maps{
      width: 270px;
      margin-left:20px;
      transition: all 0.3s ease-in-out;
      border: 1px solid red;
      float:right;

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

    .sidebar {
     border: 5px solid green;
     width: 803px;
float: left;
    }
     img{
      width:100;
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
      background-repeat: no-repeat;
    }

    .gallery p {
      margin: 0;
      padding: 5px;
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
    }

    .media {
      width: 360px;
      height: 260px;
      transition: all 0.3s ease-in-out;
      border: 1px solid red;


    }

    .social-media {
      margin-left: -10px;
    }

    .social-media ul li {
      width: 47px;
      height: 47px;
      float: left;
      background-image: url("img/social-icons.png");
      border: 1px solid green;
    }

    .social-media ul li:nth-child(1):hover {
      background-position: 0px -47px;
    }

    .social-media ul li:nth-child(1) {
      background-position: 0px 0px;
    }

    .social-media ul li:nth-child(2) {
      background-position: -51px 0px;
    }

    .social-media ul li:nth-child(2):hover {
      background-position: -51px 140px;
    }

    .social-media ul li:nth-child(3) {
      background-position: -103px 0px;
    }

    .social-media ul li:nth-child(3):hover {
      background-position: -103px 140px;
    }

    .social-media ul li:nth-child(4) {
      background-position: -156px 0px;
    }

    .social-media ul li:nth-child(4):hover {
      background-position: -156px 140px;
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
      margin-bottom: 695px;
    }

    .widget-video {
      margin-left: 810px;
      margin-top: 99px;
      border:1px solid red;

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
      background-color: grey;
      color: white;
      text-decoration: none;
    }

    nav ul li a:hover {
      background-color: orange;
    }

    nav ul li ul li a {
      background-color: rgb(56, 56, 56);
      color: black;
    }

    nav ul li ul li a:hover {
      background-color: darkorange;
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
      font-family: Courier New, monospace;
      font-size: 14px;
      font-weight: normal;
      width: 1170px;
      margin: 0px auto;
      border: 1px solid red;
    }

    div#articulos {
      font-family: Courier New, monospace;
      font-size: 14px;
      font-weight: normal;
      text-align: left;
      width: 600px;
      padding-right: 150px;
      padding-top: 70px;
      border: 1px solid red;

    }

    div.Categorias {
      font-family: Courier New, monospace;
      font-size: 14px;
      font-weight: normal;
      text-align: right;
      border: 5px solid red;
      width: 300px;
      height:120px;
      float: right;
    }
    div.popular {
      font-family: Courier New, monospace;
      font-size: 14px;
      font-weight: normal;
      text-align: right;
      border: 5px solid red;
      width: 300px;
      float: right;
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



    div#video {
      padding-bottom: 70px;
      border: 1px solid red;
      padding-left: 780px;
      width: 360px;
      height: 240px;
    }

    h2 {
      border: 1px solid red;
      height: 50px;

      padding-right: 45px;
    }

    h6 {
      display: inline;
      border: 1px solid red;
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
    <div class="container">
      <p class="limpiar"></p>
      <div class="sidebar">
        <h2>Artículos</h2>
        <?php
        while ($fila = $sql_detalles->fetch_array()) {
          $titulo = $fila[1];
          $contenido = $fila[2];
          $fecha_publicacion = $fila[3];
          $id_autor = $fila[4];
          $id_categoria = $fila[7];
          $Imagen = $fila[8];
          $Visitas = $fila[9];
          ?>
         <p><img src="img/blog/<?php echo $Imagen; ?>"></p>

          <p>
            <?php echo $titulo; ?>
          </p>
          <p>
            <?php echo $contenido; ?>
          </p>
          <p>Fecha:
            <?php echo $fecha_publicacion; ?>
          </p>
            <p>Categoria:
            <?php echo $id_categoria; ?>
          </p>
            <p>Vistas:
            <?php echo $Visitas; ?>
          </p>
          <?php
        }
        ?>
      </div>
      <div class="Categorias">
        <h2>Categorías</h2>
        <?php
        while ($fila = $sql_Categorias->fetch_array()) {
          $id_categoria = $fila[0];
          $Categoria = $fila[1];
          ?>
          <a href="blog.php?id_categoria=<?php echo $id_categoria; ?>"><?php echo $Categoria; ?></a>
          <?php
        }
        ?>
      </div>
      <div class="popular">
        <h2>Artículos más populares</h2>
        <?php
        while ($fila = $sql_populares->fetch_array()) {
          $titulo_1 = $fila[1];
          $Imagen_1 = $fila[8];
          ?>
          <h5>
            <?php echo $titulo_1; ?>
          </h5>
          <p><img src="img/blog/<?php echo $Imagen_1; ?>" width="100"></p>

          <?php
        }
        ?>
      </div>
    </div>
    <div class="widget-video">
      <h2>Vídeo</h2>
      <iframe width="360" height="230" src="https://www.youtube.com/embed/_hXkqxVMh3U" frameborder="0"
        allowfullscreen></iframe>
    </div>
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
        <div class="ultimas-entradas">
          <h3>Ultimas Entradas</h3>
          <ul>
            <li>Entrada 1</li>
            <li>Entrada 2</li>
            <li>Entrada 3</li>
          </ul>
        </div>
      </div>
    </div>


</body>

</html>