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

  <!--Iniciamos secion y recorremostodos los usuarios de la base de datos que luego mostraremos en un formulario -->
<body>
  <?php
  session_start();
  include("conexion.php");
  $registros=$base->query("SELECT * FROM USUARIO")->fetchAll(PDO::FETCH_OBJ);
  if(isset($_POST["crear2"])){
	     $nick=$_POST["nick"];
		 $nombre=$_POST["nombre"];		 
		 $apellidos=$_POST["apellidos"];
		 $cursos=$_POST["cursos"];  
	  $sql2="INSERT INTO USUARIO (nick,nombre,apellidos,cursos) VALUES (:miNick,:miNombre,:miApe,:miCur)";
	  $resultado=$base->prepare($sql2);
	  $resultado->execute(array(":miNick"=>$nick,":miNombre"=>$nombre,":miApe"=>$apellidos,":miCur"=>$cursos));
	  header("Location:administrarUsuarios.php");    } ?>
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
    <div style="overflow-y: auto;" id="producto">
    <!-- Generamos el formulario en el que podremos modificar los datos en el mostramos los datos actuales y contiene un boton para guardar los cambios  -->
    <h1 align="center">Usuarios:</h1> 
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
    <table align="center" border="1" color="black">  
      <tr align="center" style="background-color: #FF1744";>
	     <td>NICK</td>
         <td>NOMBRE</td>
		 <td>APELLIDOS</td>
		 <td>CURSOS</td>
		 <td style="border: hidden"></td>
	     <td style="border: hidden"></td>
      </tr>
	  <?php foreach($registros as $users):?>
      <tr align="center" style="background-color: #FF8A80;">
	  <td><?php echo $users->nick ?></td>
	  <td><?php echo $users->nombre ?></td>
	  <td><?php echo $users->apellidos ?></td>
	  <td><?php echo $users->cursos ?></td>	  
      <td><a href="borrarUsuario.php?nick=<?php echo $users->nick?>"><input type="button" name="borrar2" value="BORRAR"></td>
	  <td><a href="editarUsuario.php?nick=<?php echo $users->nick?>"><input type="button" name="modificar2" value="MODIFICAR"></td>
	  </tr>
	  <?php endforeach;  ?>
	  <tr align="center" style="background-color: #FF8A80;">
	  <td><input type="text" name="nick" size="6"></td>
	  <td><input type="text" name="nombre" size="6"></td>
	  <td><input type="text" name="apellidos" size="6"></td>
	  <td><input type="text" name="cursos" size="33"></td>		  
      </form>	  
      <td><input type="submit" name="crear2" id="crear2" value="CREAR"></td>
	  </tr>
     </table>
  </div>
        <!--Citas-->
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

