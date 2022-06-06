
<html lang="en">
	
  <head></head>
<body>
<?php
  try{
	//Esra variable nos servira para verificar que la conexion es exitosa (funcion recordar usuario cookie)
	$autenticado=false;
	//Generamos las variables necesarias entre ella el contador que nos servira como un boolean en este caso
	$contador=0;
	$login=htmlentities(addslashes($_POST["login"]));
    $password=htmlentities(addslashes($_POST["password"]));
    $base=new PDO("mysql:host=localhost; dbname=cursosps", "root", "");
    $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql="SELECT * FROM USUARIO WHERE nick= :login";
    $resultado=$base->prepare($sql);

    $resultado->execute(array(":login"=>$login));
    while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){
		echo "" . $registro['password'];
		echo $password;
		if(password_verify($password,$registro['password'])){
		$contador++;	}		}	
	if($contador>0){
	//Verificamos que se ha encontrado un login  (funcion recordar usuario cookie)
	$autenticado=true;
	if(isset($_POST["recordar"])){
	setcookie("nombre_usuario4",$_POST["login"],time()+5);}
	session_start();
	$_SESSION["usuario"]=$_POST["login"];
	if($_SESSION["usuario"]=="Admin"){
	header("location:administrador.php");
	}else{	header("location:secionIniciada.php");
	}}else{	header("location:loggin.php");
	}   }catch(Exception $e){  die("Error" . $e->getMessage());   }?>   
</body>
</html>