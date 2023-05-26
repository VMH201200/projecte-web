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
nav > ul > li {
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

nav ul li:hover > ul {
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

    #contact-form {
      flex: 1;
      margin-right:30px;
      margin-top:120px;
      margin-bottom:100px;
      width: 300px;
      height: 300px;
      border:1px solid red;
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
    <div id="contact-form">
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
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Services</a>
              <ul>
                <li><a href="#">Service A</a></li>
                <li><a href="#">Service B</a></li>
                <li><a href="#">Service C</a></li>
              </ul>
            </li>
            <li><a href="#">Contact</a></li>
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
      <div class="footer">
        <div class="about-us">
          <h3>Sobre Nosotros</h3>
          <img src="img/logo.png" alt="Logo" class="logo">
            </div>
      
        <div class="social-media">
          <ul>
            <li><a href="#" class="facebook"></a></li>
            <li><a href="#" class="twitter"></a></li>
            <li><a href="#" class="instagram"></a></li>
          </ul>
        </div>
      
        <div class="ultimas-entradas">
          <h3>Ultimas Entradas</h3>
          <ul>
            <li>Entrada 1</li>
            <li>Entrada 2</li>
            <li>Entrada 3</li>
          </ul>
        </div>
    </div>
  fdf
 

  
</body>
</html>