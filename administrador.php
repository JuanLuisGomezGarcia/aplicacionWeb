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
    <script>
    //Array con las imagenes que mostraremos en la parte central de la pantalla
    var imagenes=new Array(
    'https://cdn.glitch.global/c031a154-e67b-41f9-a8ba-5df27404e59a/fondo-de-emergencia-mujer-hace-cuentas-12.jpg?v=1652052304961',
    'https://cdn.glitch.global/c031a154-e67b-41f9-a8ba-5df27404e59a/universidad.jpg?v=1652052310882',
    'https://cdn.glitch.global/c031a154-e67b-41f9-a8ba-5df27404e59a/D.jpg?v=1650886290914',
    'https://cdn.glitch.global/c031a154-e67b-41f9-a8ba-5df27404e59a/R.jpg?v=1650886296231',);
    function rotarImagenes(){
    // obtenemos un numero aleatorio entre 0 y la cantidad de imagenes que hay
    var index=Math.floor((Math.random()*imagenes.length));
    // cambiamos la imagen
    document.getElementById("imagen").src=imagenes[index];}
    //Función que se ejecuta una vez cargada la página
    onload=function(){
    // Cargamos una imagen aleatoria
    rotarImagenes();
    // Indicamos que cada 5 segundos cambie la imagen
    setInterval(rotarImagenes,5000);}
</script>
  </head>
  <body>
  <?php  session_start(); ?>
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
 
   <!--<?php if(!isset($_SESSION["usuario"])){}else{echo "<p align='right'>Bienvenido: " . $_SESSION["usuario"] . "</p>";} ?>   -->   
        <img id="imagen">
      </article>
      <!--Pie de la pagina se colocan los derechos de autor -->
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

