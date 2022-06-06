<html>
 <head>
 </head> <body> <?php
 //Abrimos la sesion de nuevo con la funcion destroy la cerramos y reubicamos la pagina
 //en el inicio
     session_start();
	 session_destroy();
	 header("location:index.php");
 ?> </body></html>