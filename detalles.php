<?php 
include ("php/Conexion.php"); 
$sql_detalles = $conexion->query("SELECT * FROM detalles");
?>


<!DOCTYPE html>
<html>
<head>
    <title>Detalles</title>
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

.container {
      max-width: 1170px;
      margin: 0 auto;
    }

    .logo-area {
      width: 280px;
      height: 55px;
      float: left;
      border:1px solid red;

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

    div#contenedor {
      margin: 0px auto;
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
        #contenido {
            display: flex;
            align-items: flex-start;
            justify-content: flex-start;
            margin: 1px solid red;
        
        }
        #datos-derecha {
            text-align: left;
        }
        .boton {
            display: inline-block;
            background-color: black;
            color: white;
            padding: 8px 16px;
            text-decoration: none;
        }
        .enlace {
            color: orange;
            text-decoration: none;
        }
        body {
      background-image: url('img/page-bg-1.jpg');
      background-size: cover;
      background-repeat: no-repeat;
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
    p.limpiar {clear: both;}

    </style>
</head>
<body>
    <div id="contenedor">
        <div class="logo-area">
          <img src="img/logo.png" alt="Logo" class="logo">
        </div>
        <nav>
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Detalles</a></li>
            <li><a href="#">Artículos</a>
              <ul>
                <li><a href="#">Service A</a></li>
                <li><a href="#">Service B</a></li>
                <li><a href="#">Service C</a></li>
              </ul>
            </li>
            <li><a href="#">Contacto</a></li>
          </ul>
        </nav>
    <div id="contenido">
        <div id="datos-derecha">
        <?php      
      while($fila=$sql_detalles->fetch_array()){
      $titulo=$fila[0];
      $descripcion=$fila[1];
      $texto=$fila[2];
      $inferior=$fila[3];
      $imagen=$fila[5];
      ?>
            <img src="img/detalles/<?php echo $imagen;?>" alt="Gray">
            <h1><?php echo $titulo;?></h1>
            <p><?php echo $descripcion;?></p>
            <p><?php echo $texto;?></p>
            <p><?php echo $inferior;?></p>
            <?php
     }
     ?>
    
            <span style="display: flex; justify-content: flex-start;">
                <a href="https://ejemplo.com/enlace-externo" class="boton" width="30" height="30" style="margin-right: 100px; border-radius: 10px;">Más Información</a>
                <img src="img/sprite_prev.png" alt="Descripción de la imagen" >
                <a href="index.html" class="enlace">Volver...</a>
            </span>
        </div>
    </div>
        <div class="footer">
            <div class="about-us">
              <h3>Sobre Nosotros</h3>
              <img src="img/logo.png" alt="Logo" class="logo" width="180" height="55">
            </div>
      
            <div class="social-media">
          <ul>
            <li></li>
            <li></li>
            <li></li>
            <li></li>

          </ul>
        </div>

      <div class="media">
        <h2>Galería de fotos</h2>
        <iframe width="360" height="230" src="https://www.youtube.com/embed/_hXkqxVMh3U" frameborder="0" allowfullscreen></iframe>
      </div>
      <div class="maps">
        <h2>Donde estamos</h2>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.054704660767!2d-73.9850996845932!3d40.74844097932847!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c259a6e5e9a6d7%3A0x5b8a5b5c8c4b8f9e!2sEmpire%20State%20Building!5e0!3m2!1sen!2sus!4v1653270346669!5m2!1sen!2sus" width="270" height="230" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
  </div>

  </div>
    </div>
</body>
</html>