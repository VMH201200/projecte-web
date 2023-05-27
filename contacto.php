<!DOCTYPE html>
<html>
<head>
  <title>Página de contacto</title>
  <style>
   @import url('https://fonts.googleapis.com/css2?family=Oswald&display=swap');

.footer {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 20px;
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

  .social-media a.facebook:hover {
    background-image: url('facebook-hover.png');
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
  .logo-area {
		  width: 470px;
		  height: 55px;
		  position: absolute;
		  top: 0;
		  left: 0;
		}
		.logo {
		  width: 180px;
		  height: 55px;
		}
	nav {
  position: absolute;
  top: 0;
  right: 0;
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
    #container {
      display: flex;
      flex-wrap: wrap;
      border:1px solid red;
    }
    p {
        font-family: 'Oswald', sans-serif;
    }
    h2 {

        font-family: 'Oswald', sans-serif;
    }

    h3 {
        font-family: 'Oswald', sans-serif;
    }

    li {
      
        font-family: 'Oswald', sans-serif;
    

    }

    .contact-form {
      flex: 1;
      margin-right:30px;
      margin-top:120px;
      margin-bottom:100px;
      width: 300px;
      height: 300px;
      border:1px solid red;
    }

    .contact-form form{
     margin-left:77px;
    }
 
 

    #contact-info {
      flex: 1;
      border:1px solid red;
      margin-top:-450px;
      margin-left:1300px;
    }

    #map {
        margin-left: 1300px;
      width: 300px;
      height: 300px;
      margin-top: 20px;     border:1px solid red;
    }

  </style>
</head>
<body>
  <div id="container">
</div>
    <div class="contact-form">
      <h2>Contacta con nosotros</h2>
      <p>Aqui puede rellenar sus datos</p>
      <form>
        <label for="name">Nombre:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Correo electronico:</label>
        <input type="email" id="email" name="email" required>

        <label for="Web">Pagina web:</label>
        <input type="text" id="Web" name="Web" required>

        <label for="message">Mensaje:</label>
        <textarea id="message" name="message" required></textarea>

        <input type="submit" value="Enviar">
      </form>
    </div>


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
      </div>
      <div id="contact-info">
        <h2>Datos de contacto</h2>
        <p>Telefono: 123-456-789</p>
        <p>Correo electronico: info@example.com</p>
        <p>Direccion: Calle Principal, Ciudad</p>
      </div>
      
      <div id="map">
        <h2>Donde encontrarnos</h2>
        <div id="wrapper-9cd199b9cc5410cd3b1ad21cab2e54d3">
            <div id="map-9cd199b9cc5410cd3b1ad21cab2e54d3"></div><script>(function () {
            var setting = {"height":220,"width":900,"zoom":16,"queryString":"Calle de Cervantes, Quart de Poblet, España","place_id":"EixDYWxsZSBkZSBDZXJ2YW50ZXMsIFF1YXJ0IGRlIFBvYmxldCwgRXNwYcOxYSIuKiwKFAoSCWeUSYL3T2ANETnTDhKU48SHEhQKEgnN0LEl-U9gDRH7b4_0vIc4jA","satellite":false,"centerCoord":[39.48271091308271,-0.4404469000000111],"cid":"0x87c4e394120ed339","lang":"es","cityUrl":"/spain/valencia","cityAnchorText":"Mapa de Valencia, Comunidad Valenciana, España","id":"map-9cd199b9cc5410cd3b1ad21cab2e54d3","embed_id":"929433"};
            var d = document;
            var s = d.createElement('script');
            s.src = 'https://1map.com/js/script-for-user.js?embed_id=929433';
            s.async = true;
            s.onload = function (e) {
              window.OneMap.initMap(setting)
            };
            var to = d.getElementsByTagName('script')[0];
            to.parentNode.insertBefore(s, to);
          })();</script><a href="https://1map.com/es/map-embed">1 Map</a></div>
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