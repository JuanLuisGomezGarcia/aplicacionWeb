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
    $nick=$_GET["nick"];
	 include("conexion.php");
	 if(!isset($_POST["submit"])){
    $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql="SELECT * FROM USUARIO WHERE nick=:nick";
    $resultado=$base->prepare($sql);

    $resultado->execute(array(":nick"=>$nick));
    while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){
	$nick=$registro['nick'];
	$nombre=$registro['nombre'];	
	$apellidos=$registro['apellidos'];
	$cursos=$registro['cursos'];
	   } }else{
		 $nick1=$_POST["nick"];
		 $nombre1=$_POST["nombre"];
		 $apellidos1=$_POST["apellidos"];
		 $cursos1=$_POST["cursos"];
		 $sql1="UPDATE USUARIO SET nombre=:miNombre, apellidos=:miApe, cursos=:miCur WHERE nick=:miNick";
		 $resultado1=$base->prepare($sql1);
		 $resultado1->execute(array(":miNick"=>$nick1,":miNombre"=>$nombre1,":miApe"=>$apellidos1,":miCur"=>$cursos1));
		 header("Location:administrarUsuarios.php");	 } ?>
  
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
	  

  <br><br>
  <!-- Aqui generamos el formulario con los atributos del usuario-->
  <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
   <table align="center" bordercolor="black" border="2" color="black" style="background-color: #FF1744";>
                <tr>
                <td>Nick</td>
				<td><label for="nick"></label><input type="hidden" name="nick" id="nick" value="<?php echo $nick?>"><?php echo $nick?></td>
				</tr>
				<tr>
                <td>Nombre</td>
				<td><label for="nombre"></label><input type="text" name="nombre" id="nombre" value="<?php echo $nombre?>"></td>
				</tr>
				<tr>
                <td>Apellidos</td>
				<td><label for="apellidos"></label><input type="text" name="apellidos" id="apellidos" value="<?php echo $apellidos?>"></td>
				</tr>
				<tr>
                <td>Cursos</td>
				<td><label for="cursos"></label><input type="text" name="cursos" id="cursos" value="<?php echo $cursos?>"></td>
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