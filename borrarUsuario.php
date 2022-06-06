<?php
//Generamos la conexion y con un query borramos el usuarrio donde cuincida el nick que 
// es el id unico despues volvemos a la misma pagina
include("conexion.php");
$nick=$_GET["nick"];
$base->query("DELETE FROM USUARIO WHERE NICK='$nick'");
header("Location:administrarUsuarios.php"); ?>