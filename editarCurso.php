<!-- DOCTYPE Expecifica que estas usando html-->
<!DOCTYPE html>
<!-- html Engloba todo el documento-->
<html lang="en">
  <!--Contiene todos los metadatos (Informacion de la web que no sera visible) -->
  <head>
    <!--Contiene el texto de la pestaña que crea la web  -->
    <title>Aprendamosjuntos.com</title>
    <!--Permite conjunto de caracter utf. en español ñ, acentos, etc... -->
    <meta charset="utf-8" />
    <!--Sirve para usar la version mas moderna del navegador explore-->
    <meta http-equiv="X-UA.Compatible" content="IE-edge" />
    <!--Recalcula el escalado de la pantalla para adaptarla a moviles -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--Estos meta resetean los parametros almacenados para no tener que estar borrando el historial cada vez que actualizo el css -->
    <meta http-equiv="Expires" content="0">
    <meta http-equiv="Last-Modified" content="0">
    <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <!-- link que importan el archivo java y css-->
    <link rel="stylesheet" href="style.css" />
    <script type="text/javascript" src="script.js"></script>   
  </head>
  <body>
  <?php
  //Iniciamos secion y recopilamos todos los datos dle curso queluego se añadiran a un formulario que podremos modificar
  session_start();
    $id_curso=$_GET["id_curso"];
	 include("conexion.php");
	 if(!isset($_POST["submit"])){
    $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql="SELECT * FROM CURSO WHERE id_curso= :id_curso";
    $resultado=$base->prepare($sql);
    $resultado->execute(array(":id_curso"=>$id_curso));
    while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){	
	$nom=$registro['nombre'];
	$des=$registro['descripcion'];
	$num=$registro['numeroalumnos'];
	$prof=$registro['profesor'];
	$fec=$registro['fecha_inicio'];
	$est=$registro['estado'];
	$dur=$registro['duracion'];
  $img=$registro['imagen'];
	   }}else{
		 $id_curso1=$_POST["id_curso"];
		 $nom1=$_POST["nom"];
		 $des1=$_POST["des"];
		 $num1=$_POST["num"];
		 $prof1=$_POST["prof"];
		 $fec1=$_POST["fec"];
		 $est1=$_POST["est"];
		 $dur1=$_POST["dur"];
     $img1=$_POST['img'];
		 $sql1="UPDATE CURSO SET nombre=:miNom, descripcion=:miDes, numeroalumnos=:miNum, profesor=:miProf, fecha_inicio=:miFec, estado=:miEst, duracion=:miDur, imagen=:miImg WHERE id_curso=:miId";
		 
		 $resultado1=$base->prepare($sql1);
		 $resultado1->execute(array(":miId"=>$id_curso1,":miNom"=>$nom1,":miDes"=>$des1,":miNum"=>$num1,":miProf"=>$prof1,":miFec"=>$fec1,":miEst"=>$est1,":miDur"=>$dur1,":miImg"=>$img1));
		 header("Location:administrarCursos.php"); } ?>
  <nav>
  <header>
        <!--Esta sera la imagen del logo inicial las imagenes tienes un atributo esencial que es alt y es el mensage que mostrara la -->
        <!--en caso de que no se cargue -->
        <img id="logo" src="https://cdn.glitch.global/c031a154-e67b-41f9-a8ba-5df27404e59a/Aprendamos%20juntos.png?v=1648226929359" alt="Error" />
        <!--El saludo inicial que se personaizara al iniciar secion el usuario -->
        <p id="saludoCabecera">MODO ADMINISTRADOR</p>
      </header>
      <main>
        <li class="elementosMenu" ><button class="bottomMenu" type="button" <?php include('funcionOcultarBoton.php');?> onclick="window.location.href=''"> QUIENES SOMOS </button></a></li>
        <!--Nos llevara de nuevo al indez al cerrar secion -->
        <li class="elementosMenu"><button class="bottomMenu" type="button"  onclick="window.location.href='cierre.php'">CERRAR SESION</button></a></li>     
        <!--Nos llevara a a la pagina para crear y modificar cursos -->
        <li class="elementosMenu"><button class="bottomMenu" type="button" onclick="window.location.href='administrarCursos.php'">ADMIN CURSOS</button></a></li>
        <!--Nos llevara a ula pagina para crear y gestionar usuarios -->
        <li class="elementosMenu"><button class="bottomMenu" type="button" onclick="window.location.href='administrarUsuarios.php'">ADMIN USERS </button></li>
      </main>
	  <article>
	  

 
  <!-- Aqui generamos el formulario con los atributos del curso-->
  <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
   <table align="center" bordercolor="black" border="2" color="black" style="background-color: #FF1744";>
                <tr>
                <td>Id_curso</td>
				<td><label for="id_curso"></label><input type="hidden" name="id_curso" id="id_curso" value="<?php echo $id_curso?>"><?php echo $id_curso?></td>
				</tr>
				<tr>
                <td>Nombre</td>
				<td><label for="nom"></label><input type="text" name="nom" id="nom" value="<?php echo $nom?>"></td>
				</tr>
				<tr>
                <td>Descripcion</td>
				<td><label for="des"></label><input type="text" name="des" id="des" value="<?php echo $des?>"></td>
				</tr>
				<tr>
                <td>Numero alumnos</td>
				<td><label for="num"></label><input type="text" name="num" id="num" value="<?php echo $num?>"></td>
				</tr>
				<tr>
                <td>Profesor</td>
				<td><label for="prof"></label><input type="text" name="prof" id="prof" value="<?php echo $prof?>"></td>
				</tr>
				<tr>
                <td>Fecha inicio</td>
				<td><label for="fec"></label><input type="text" name="fec" id="fec" value="<?php echo $fec?>"></td>
				</tr>
				<tr>
                <td>Estado</td>
				<td><label for="est"></label><input type="text" name="est" id="est" value="<?php echo $est?>"></td>
				</tr>
				<tr>
                <td>Duracion</td>
				<td><label for="dur"></label><input type="text" name="dur" id="dur" value="<?php echo $dur?>"></td>
				</tr>
        <tr>
                <td>imagen</td>
				<td><label for="img"></label><input type="text" name="img" id="img" value=<?php echo $img?>></td>
				</tr>
				<tr><th COLSPAN="2"><input type="submit" name="submit" id="submit" value="Actualizar" align="center"></th></tr>
            </table>
			
        <!--A continuacion tenemos una lista de enlaces a distintas redes sociales formadas por la imagen de esta -->
        <!--y un enlace que os lleva a ellas, esta lista se encuentra en una etiqueta ul que genera una lista no ordenada -->
        <ul id="citaYredes">
          <li class="elementosArticle">
            <!--La etiqueta a hace referencia a un enlace y su principal atributo es href donde se coloca el enlace-->
            <a href="https://es-es.facebook.com/login/?msclkid=55d40d50d07f11ec88e51ad00e2388f3">
              <img class="enlaceRedesSociales" src="https://cdn.glitch.global/c031a154-e67b-41f9-a8ba-5df27404e59a/10f7de5c-2d08-45da-b862-736a685c033b.image.png?v=1646937469906" /></a> 
          </li>
          <li class="elementosArticle">
            <a href="https://www.instagram.com/?msclkid=663e5098d07f11ec864aa4134d8cb875">
              <img class="enlaceRedesSociales" src="https://cdn.glitch.global/c031a154-e67b-41f9-a8ba-5df27404e59a/instagra.jpg?v=1652200445122" alt="Error" /></a>  
          </li>
          <li class="elementosArticle">
            <a href="https://www.youtube.com">
              <img class="enlaceRedesSociales" src="https://cdn.glitch.global/c031a154-e67b-41f9-a8ba-5df27404e59a/dd733867-e9ab-48d4-a39d-c5c629b62a05.image.png?v=1646938070606" alt="Error" /></a>
            </li>
        </ul>
      </article>
      <!--La eiqueta footer representa el pie de pagina donde se suele añadir los derechos de autor y algunos datos personales de la empresa  -->
      <footer>
        <!--La etiqueta p representa un parrafo como vemos tenemos dos uno para representar los derechos y otro el telefono-->
        <p id="telefono" class="piePagina">TELEFONO: 000000000</p>
        <p id="derechos" class="piePagina">&copy; 2022</p>
        <!--El tercero es una referencia a una localizacion donde se encuentra la empresa-->
        <a class="piePagina" href="https://goo.gl/maps/DzmHXhuLsNFAiTqb6">
          <p id="ubicacion"> 
            visitanos
          </p>
        </a>
      </footer>
    </nav>
  </body> 
</html>