<%@page contentType="text/html" pageEncoding="UTF-8"%> <!DOCTYPE html>

 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
 <title>AÑADIR</title>
 <meta name="author" content="Solvam"/>
 <meta name="keywords" content="wen, html, css"/>
 <meta name="decription" content="Ejemplo web de html con css"/>
 <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
 <link href="css/estilos.css" rel="stylesheet" type="text/css"/>
 </head>
 <body>
 <header>
 <h1>BASE DE DATOS DE MI PÁGINA WEB</h1>
 <h2>AUTORES</h2>
 </header>
 <nav>
 <ul>
 <li><a href="index.jsp">Home |</a></li>
 <li><a href="autors.jsp">Autores Alta|</a></li>
 <li><a href="listarautor.jsp">Autores Listar |</a></li>
  <li><a href="borrarautor.jsp">Autores Borrar |</a></li>
   <li><a href="editarautor.jsp">Autores Editar |</a></li>
  
 
 </ul>
 </nav>
 <div id="contenedor">
 <center><h1>Edicion De Autores</h1></center>


<%@ page import="java.io.*,java.util.*,java.net.*,java.sql.*,java.sql.Connection, java.sql.Statement, java.sql.PreparedStatement" %>

<%
if(request.getParameter("insertar") != null){

Connection canal = null;
ResultSet tabla= null;
Statement instruccion=null;
String strcon = "jdbc:mysql://91.121.65.149:3306/psicologia_vmh?allowPublicKeyRetrieval=True&useSSL=false&user=vicentemagraner&password=n0n4ryg4m3";
try {
Class.forName("com.mysql.jdbc.Driver").newInstance();
canal=DriverManager.getConnection(strcon);
instruccion = canal.createStatement(ResultSet.TYPE_SCROLL_SENSITIVE, ResultSet.CONCUR_UPDATABLE);
} catch(java.lang.ClassNotFoundException e){} catch(SQLException e) {};
int id = Integer.parseInt(request.getParameter("txtid"));
String nombre = request.getParameter("txtNombre");
String apellido = request.getParameter("txtApellidos");
String q="insert into authors(id,Nombre,Apellido) VALUES ("+id+", '"+nombre+"','"+apellido+"');";
try {
	// agregando (insert)
	int n=instruccion.executeUpdate(q);
	//avisando que se hizo la instruccionpr
	out.println("REGISTRO INSERTADO");
	} catch(SQLException e) {out.println(e);};
	try{
	// tabla.close();
	instruccion.close();
	canal.close();
	response.sendRedirect("index.jsp");
	} catch(SQLException e) {out.println(e);};
	}
%>

<form>

<p>Insertar autor para el blog</p>

<div class = "id">
<label >id</label>
<input type="text" class="id" name="txtid" placeholder="id" value= "<%%>" >
</div>
<div class="Nombre">
<label >Nombre</label>
<input type="text" class="Nombre" name="txtNombre" placeholder="Nombre" value= "<%%>" >
</div>
<div class="Apellidos">
<label >Apellidos</label>
<input type="text" class="Apellidos" name="txtApellidos" placeholder="Apellidos" value= "<%%>" >
</div>
<button type="submit" name="insertar" class="btn btn-primary">Guardar</button>
</form>
</div>
</div>
</div>
<a href="index.html">Volver</a>
</body>