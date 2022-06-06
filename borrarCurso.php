<?php
//Generamos la conexion y con un query borramos el usuarrio donde cuincida el id_curso que 
// es el id unico despues volvemos a la misma pagina
include("conexion.php");
$Id=$_GET["id_curso"];
$base->query("DELETE FROM CURSO WHERE ID_CURSO='$Id'");
header("Location:administrarCursos.php");
?>