<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
 <head>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
 <title>BORRAR</title>
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
 < div id = "contenedor" >
 < center >< h1 > Baja De Autores </ h1 ></ center >
<%@ page import="java.io.*,java.util.*,java.net.*,java.sql.*,java.sql.Connection, java.sql.PreparedStatement" %>
<%
// objetos de enlace
Connection canal = null;
ResultSet tabla= null;
PreparedStatement instruccion=null;
String strcon = "jdbc:mysql://91.121.65.149:3306/psicologia_vmh?allowPublicKeyRetrieval=True&useSSL=false&user=vicentemagraner&password=n0n4ryg4m3";
try {
Class.forName("com.mysql.jdbc.Driver").newInstance();
canal=DriverManager.getConnection(strcon);
int id = Integer.parseInt(request.getParameter("id"));
String q="delete from authors where id="+id;
instruccion = canal.prepareStatement(q);
instruccion.executeUpdate();
//redirigimos
response.sendRedirect("listarautor.jsp");
} catch(SQLException e) {out.println(e);};
try{
// tabla.close();
instruccion.close();
canal.close();
} catch(SQLException e) {out.println(e);};
%>
 <footer>
 <h3>Todos Los Derechos Reservados Por Solvam &copy;</h3>
 </footer>
 </body>
</html>