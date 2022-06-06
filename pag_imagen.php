

<?php
 
 
 
$nombre_imagen=$_FILES['imagen']['name'];
$tipo_imagen=$_FILES['imagen']['type'];
$tam_imagen=$_FILES['imagen']['size'];
if($tam_imagen<=10000000){
	if($tipo_imagen=="image/jpeg" || $tipo_imagen=="image/png"){
$carpeta_destino=$_SERVER['DOCUMENT_ROOT'].'/img/';
move_uploaded_file($_FILES['imagen']['tmp_name'],$carpeta_destino.$nombre_imagen);
header("Location:pag_admin.php");
}else{
	echo "Imagen no valida.";
}
}else{
	echo "Imagen demasiado grande.";
}





?>






