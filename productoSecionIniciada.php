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
  </head>
<!--   -->
  <!--Parte fisica de la web la parte visible -->
  <body>
  <!--Iniciamos la sesion  -->
  <?php session_start(); include("conexion.php");$registros=$base->query("SELECT * FROM CURSO")->fetchAll(PDO::FETCH_OBJ); ?>
  <!--La parte nav representa una seccion que ofrece enlaces de navegacion tanto internos como externos -->
  <nav>
   <!--Aqui mostramos el logo como el resto depaginas -->
    <header><a href="index.php"> <img id="logo" src="https://cdn.glitch.global/c031a154-e67b-41f9-a8ba-5df27404e59a/Aprendamos%20juntos.png?v=1648226929359" alt="Error"/></a>		  
    <!--Con esta funcion cambiamos el saludo de cabecera animando al usuario a coprar -->
    <?php if(isset($_COOKIE["nombre_usuario4"])){$_SESSION["usuario"] = $_COOKIE ["nombre_usuario4"];    
    echo "<p id='saludoCabecera'>Apuntate " . $_SESSION["usuario"] . "</p>";}else { echo "<p id='saludoCabecera'>Apuntate " . $_SESSION["usuario"] . "</p>";}?>  
      </header>
    <!--La etiqueta main se usa para decirle a la maquina que aqui hay un menu principal de la pagina desde el nos iremos movimiendo -->
    <!-- Por el menu de paginas con la cuenta ya iniciada   -->
    <!--Por ejemplo al iniciar secion algunas de sus opciones desaparecer y apareceran otras -->
      <main>        
        <li class="elementosMenu" ><button class="bottomMenu" type="button" onclick="window.location.href='quienesSomosSesionIniciada.php'"> QUIENES SOMOS </button></a></li>
        <li class="elementosMenu"><button class="bottomMenu" type="button" onclick="window.location.href='productoSecionIniciada.php'">PRODUCTO</button></a></li>
        <!--Aqui usamos una funcion que oculta el boton -->
        <li class="elementosMenu"><button class="bottomMenu" type="button" <?php include('funcionOcultarBoton.php');?> onclick="window.location.href='formulario.php'">REGISTRARSE</button></a></li>
        <li class="elementosMenu"><button class="bottomMenu" type="button"  onclick="window.location.href='cierre.php'">CERRAR SESION</button></a></li>
      </main>
	  <article >


    <div style="overflow-y: auto;" id="producto">

    <?php
	  foreach($registros as $curso):?>
    <form id="apuntarmeProducto" action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="D9YBKF6PCAX6Q">
<input type="image" src="https://www.sandbox.paypal.com/es_ES/ES/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal, la forma rápida y segura de pagar en Internet.">
<img alt="" border="0" src="https://www.sandbox.paypal.com/es_ES/i/scr/pixel.gif" width="1" height="1">
</form> 
	  <div id='nombreProducto'><?php echo $curso->nombre ?></div>
    <img  id="imagenProducto" src="<?php echo $curso->imagen ?>"></img>
    
	  <div  id="descripcionProducto"><?php echo $curso->descripcion ?></div>

    <div id="datosProducto"> 
      <p id="profesorProducto">Profesor: <?php echo $curso->profesor ?></p>
         <p  id="estadoProducto">Estado: <?php echo $curso->estado ?></p >
          <p id="duracionProducto">Duracion: <?php echo $curso->duracion ?></p>
          <p  id="fechaProducto">Fecha de inicio: <?php echo $curso->fecha_inicio ?></p >
     </div>
	  <?php
	  endforeach;
	  ?>
</div>


	  
	  
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

