<html>
 <head>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
 <title>Pagina JSP de Facturacion</title>
 </head>
 <body>
 <form method="post" >
 Digitar precio : <input type="text" name="precio"> <br>
 Digitar cantidad : <input type="text" name="cantidad"> <br>
 <input type="submit" value="Facturar"> <br>
 <textarea rows= 10 cols=20>
 <% if(request.getParameter("precio") != null && 
 request.getParameter("cantidad") != null)
 {
 String sprec = request.getParameter("precio"); 
 int prec = Integer.parseInt(sprec);
 String scant = request.getParameter("cantidad"); 
 int cant = Integer.parseInt(scant);
 int total = prec * cant;
 String linea = "El total a pagar es : "+ total;
 out.println(""+linea);
 }
 %>
 </textarea>
 </form>
 </body>
</html>
