 
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<html>
<head>
<link href="css/estilos.css" rel="stylesheet" type="text/css"/>
<title>Login</title>
</head>
<body>
<div class="container">
<div class="row">
<div class="col-sm">

<form>
<div class = "nombre">
<label >Usuario</label>
<input type="text" class="nombre" name="nombre" placeholder="nombre" value= "<%%>" >
</div>
<div class="contrasena">
<label>Contrasena </label>
<input type="password" class="contrasena" name="contrasena" placeholder="contrasena" value= "<%%>" >
</div>
<button type="submit" name="insertar" class="btn btn-primary">Guardar</button>
</form>
</div>
</div>
</div>
<a href="index.html">Volver</a>
</body>
<%
    String nombre1 = "vicente";
    String pass = "1234";
    String nombre = request.getParameter("nombre");
    String contrasena = request.getParameter("contrasena");
    if (request.getParameter("insertar") != null) {
        if (nombre1.equals(nombre) && pass.equals(contrasena)) {
            response.sendRedirect("index.jsp");
        } else {
            out.println("Los datos son incorrectos");
        }
    }
%>
</body>
</html>