 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<html>
<head>
<title>Insert title here</title>
</head>
<body>
<% if ( request.getParameter("nombre") != null && request.getParameter("nombre") !="" ){ %>
Hola <%= request.getParameter("nombre")%>
<% } else{ %>
Hola Desconocido
<% } %>
<br />
<a href="index.html">Volver</a>
</body>
</html>