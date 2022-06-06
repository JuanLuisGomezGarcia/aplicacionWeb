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
  $registros=$base->query("SELECT * FROM CURSO")->fetchAll(PDO::FETCH_OBJ);
  if(isset($_POST["crear"])){  
		 $nom=$_POST["nom"];
		 $des=$_POST["des"];
		 $num=$_POST["num"];
		 $pro=$_POST["pro"];
		 $fec=$_POST["fec"];
		 $est=$_POST["est"];
		 $dur=$_POST["dur"];
		 $im=$_POST["im"];
	  $sql2="INSERT INTO CURSO (nombre,descripcion,numeroalumnos,profesor,fecha_inicio,estado,duracion,imagen) VALUES (:miNom,:miDes,:miNum,:miProf,:miFec,:miEst,:miDur,:miIm)";
	  $resultado=$base->prepare($sql2);
	  $resultado->execute(array(":miNom"=>$nom,":miDes"=>$des,":miNum"=>$num,":miProf"=>$pro,":miFec"=>$fec,":miEst"=>$est,":miDur"=>$dur,":miIm"=>$im));
	  header("Location:administrarCursos.php");   }  ?>
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
  
    <!-- Generamos el formulario en el que podremos modificar los datos en el mostramos los datos actuales y contiene un boton para guardar los cambios  -->
 <div style="overflow-y: auto;" id="producto"> 
    <h1 align="center">Cursos:</h1> 
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
    <table align="center" border="1" color="black">  
      <tr align="center" style="background-color: #FF1744";>
	     <td>ID</td>
         <td>NOMBRE</td>
		 <td>DESCRIPCION</td>
         <td>NUM</td>
		 <td>PROFESOR</td>
         <td>FECHA</td>
		 <td>ESTADO</td>
         <td>HORAS</td>
		 <td>ALUMNOS</td>
         <td>IMAGEN</td>
		 <td style="border: hidden"></td>
	     <td style="border: hidden"></td>
      </tr>
	  <?php	  foreach($registros as $curso):?>
      <tr align="center" style="background-color: #FF8A80;">
	  <td><?php echo $curso->id_curso ?></td>
	  <td><?php echo $curso->nombre ?></td>
	  <td><?php echo $curso->descripcion ?></td>
	  <td><?php echo $curso->numeroalumnos ?></td>	
	  <td><?php echo $curso->profesor ?></td>
	  <td><?php echo $curso->fecha_inicio ?></td>
	  <td><?php echo $curso->estado ?></td>
	  <td><?php echo $curso->duracion ?></td>
	  <td><?php echo $curso->alumnos ?></td>
	  <td><img  width='100' height='100' src="<?php echo $curso->imagen ?>"></td>	  
      <td><a href="borrarCurso.php?id_curso=<?php echo $curso->id_curso?>"><input type="button" name="borrar" value="BORRAR"></td>
	  <td><a href="editarCurso.php?id_curso=<?php echo $curso->id_curso?>"><input type="button" name="modificar" value="MODIFICAR"></td>
	  
	  </tr>
	  
	  <?php  endforeach; ?>
	  
	  <tr align="center" style="background-color: #FF8A80;">
	  <td><input type="hidden" name="id" size="1"></td>
	  <td><input type="text" name="nom" size="6"></td>
	  <td><input type="text" name="des" size="10"></td>
	  <td><input type="text" name="num" size="3"></td>	
	  <td><input type="text" name="pro" size="7"></td>
	  <td><input type="text" name="fec" size="6"></td>
	  <td><input type="text" name="est" size="6"></td>
	  <td><input type="text" name="dur" size="3"></td>
	  <td><input type="hidden" name="al" size="6"></td>	  
	  <td><input type="file" name="im" size="10"></td>	
      <td><a href="insertar_img.php"><input type="button" value="Insertar imagen"></a></td>	  
      </form>	  
      <td><input type="submit" name="crear" id="crear" value="CREAR"></td>
	  </tr>
     </table>
  </div>
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

