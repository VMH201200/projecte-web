<%@ page language="java" contentType="text/html; charset=UTF-8"%>
 <%@ page import="java.io.*,java.net.*,java.sql.*,com.mysql.jdbc.*,java.sql.Connection, java.sql.PreparedStatement" %>

    pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
<head>
<link href="css/estilos.css" rel="stylesheet" type="text/css"/>
<meta charset="UTF-8">
<title>Blog</title>
</head>
<body>
<header>
<div>
<h1>Base de datos del blog</h1>
<h2>Autores</h2>
<form action="" method="post">
ID:
<input type="text" name="txtID"/>
Nombre:
<input type="text" name="txtNom"/>
Apellido:
<input type="text" name="txtAp"/>
<input type="submit" value="Alta"/>
</form>
</div>
</header>
<nav>
 <ul>
 <li><a href="index.jsp">Home |</a></li>
 <li><a href="autoresalta.jsp">Autores Alta|</a></li>
 <li><a href="autoreslistar.jsp">Autores Listar |</a></li>
 </ul>
 </nav>
  <div id="contenedor">
 <center><h1> Lista De Autores </h1></center>
 <form>
<%
Connection con;
String Driver="com.mysql.jdbc.Driver";
String url="jdbc:mysql://91.121.65.149:3306/psicologia_vmh";
String user="vicentemagraner";
String contra="n0n4ryg4m3";
Class.forName(Driver);
con=DriverManager.getConnection(url,user,contra);
PreparedStatement ps;
String ID, Nombre, Apellido;
ID=request.getParameter("txtID");
Nombre=request.getParameter("txtNom");
Apellido=request.getParameter("txtAp");
if(ID!=null && Nombre!=null && Apellido!=null){
ps=con.prepareStatement("insert into authors(ID, Nombre, Apellido)values ('"+ID+"','"+Nombre+"','"+Apellido+"')");
ps.executeUpdate();
out.print("Insertado perfectamente");
}
%>


</body>
</html>