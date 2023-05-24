<?php 
include ("php/Conexion.php"); 
$sql_detalles = $conexion->query("SELECT * FROM articles");
$sql_Categorias = $conexion->query("SELECT * FROM Categorias");
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
          left:270px;
          bottom:-640px;
          position:absolute;
          clip: rect(0px, 49px, 48px, 0px);
          border: 1px solid red;
    }
    
    .imagen-recortada:hover {
          left:270px;
          bottom:-600px;
          position:absolute;
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
    
        body {
          background-image: url('img/page-bg-1.jpg');
          background-size: cover;
          background-repeat: no-repeat;
        }
    
        .gallery {
          list-style: none;
          bottom: 150px;
          border:1px solid red;
    
        }

        .sidebar{
          margin-right:500px;

        }

        .sidebar h2{
          margin-top: 200px;
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
    
        .gallery button.detalles{
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
          left:100px;
          bottom:100px;
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
          float:left;
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
          top:80px;
          left:100px;
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

        div#articulos{
        font-family: Courier New, monospace;
      font-size: 14px;
      font-weight: normal;
      text-align: left;
      width: 600px;
      padding-right:150px;
        padding-top: 70px;
        border:1px solid red;
    
        }
        div#categorias{
      font-family: Courier New, monospace;
      font-size: 14px;
      font-weight: normal;
      text-align: right;
      padding-left:700px;
      padding-right: 100px;
      padding-bottom:200px;
      border: 1px solid red;
        }

        .Categorias{
          margin-left:917px;
          margin-top:-1660px;
          position: absolute;
        }

        .popular{

        }
        
        div#video{
            padding-bottom:70px;
            border: 1px solid red;
            padding-left:780px;
            width:360px;
            height:240px;
        }
        h2{
            border:1px solid red;
            height:50px;

            padding-right: 45px;
        }

        h6 {
        display: inline;
        border:1px solid red;
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
<div class="container">
    <div class="sidebar">
        <h2>Artículos</h2>
        <?php      
        var_dump($sql_detalles);
        while($fila=$sql_detalles->fetch_array()){
        $id=$fila[0];
        $titulo=$fila[1];
        $contenido=$fila[2];
        $fecha_publicacion=$fila[3];
        $id_autor=$fila[4];
        $id_categoria=$fila[5];
        $Imagen=$fila[6];
        $Visitas=$fila[7];
        ?>
              <h1><?php echo $id;?></h1>
              <p><?php echo $titulo;?></p>
              <p><?php echo $contenido;?></p>
              <p><?php echo $fecha_publicacion;?></p>
              <p><?php echo $id_autor;?></p>
              <p><?php echo $id_categoria;?></p>
              <p><img src="img/blog/<?php echo $Imagen;?>" width="100" ></p>
              <p><?php echo $Visitas;?></p>
              <?php
       }
       ?>
    </div>
    <div class="Categorias">
      <h2>Categorías</h2>
      <?php      
        while($fila=$sql_Categorias->fetch_array()){
        $id_categoria=$fila[0];
        $Categoria=$fila[1];
        ?>
              <h1><?php echo $id_categoria;?></h1>
              <p><?php echo $Categoria;?></p>
              <?php
       }
       ?>
       </div>
       <div class="popular">
       <h2>Artículos más populares</h2>
      <?php    
      var_dump($sql_detalles);  
      while($fila=$sql_detalles->fetch_array()){
          $titulo_1=$fila[0];
          $id_categoria_1=$fila[1];
          $Imagen_1=$fila[2];
          ?>
                <h1><?php echo $titulo_1;?></h1>
                <h1><?php echo $id_categoria_1;?></h1>
                <p><img src="img/detalles/<?php echo $Imagen_1;?>" width="100" ></p>

                <?php
        }
        ?>
                </div>

    <div class="content">
        <!-- Contenido adicional del apartado principal -->
    </div>
</div>

</body>
</html>