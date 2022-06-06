<?php
//Iniciamos secion y llamamos a conexion php una vez conectado buscamos en la base de datos elç
//curso en cuestion y actualizamos el numero de usuarios tambien usamos al final un if para evitar que un usuario
//se registre en el curso varias veces
  session_start();
  include("conexion.php");
  if(isset($_SESSION["usuario"])){
   $id_curso=$_GET["id_curso"]; 
	$alumno=$_SESSION["usuario"];
	$nick=$_SESSION["usuario"];
    $sql1="SELECT * FROM CURSO WHERE id_curso= :id_curso";
    $resultado=$base->prepare($sql1);
    $resultado->execute(array(":id_curso"=>$id_curso));
	while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){
		$miNum=$registro["numeroalumnos"]+1;	
		if($registro["alumnos"]!=NULL){
		$miAl=$registro["alumnos"] . "," . $alumno;
		$als = explode(",", $registro["alumnos"]);
		$cont=0;
		foreach ($als as &$al) {  if($al==$alumno){$cont++;}}}else{	$cont=0;$miAl=$alumno;	}}
		if($cont==1){	echo "ya estas inscrito";	}else{			
			 $sql2="UPDATE CURSO SET numeroalumnos=:miNum, alumnos=:miAl WHERE id_curso=:id_curso";
			 $resultado2=$base->prepare($sql2);
             $resultado2->execute(array(":id_curso"=>$id_curso,":miAl"=>$miAl,":miNum"=>$miNum));	}		
		header("Location:producto.php"); }else{	header("Location:producto.php");   } ?>