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

  <!--Parte fisica de la web la parte visible estan formada por la parte central body -->
  <body>
  <!--La parte nav representa una seccion que ofrece enlaces de navegacion tanto internos como externos -->
    <nav>
      <!-- Cabecero del body,El cabecero estara formada por una imagen y un comentario que cambiara segun el estado de registro del usuario-->
      <header>
        <!--Esta sera la imagen del logo inicial las imagenes tienes un atributo esencial que es alt y es el mensage que mostrara la -->
        <!--en caso de que no se cargue -->
        <img id="logo" src="https://cdn.glitch.global/c031a154-e67b-41f9-a8ba-5df27404e59a/Aprendamos%20juntos.png?v=1648226929359" alt="Error" />
        <!--El saludo inicial que se personaizara al iniciar secion el usuario -->
        <p id="saludoCabecera">CAMINAMOS CONTIGO</p>
      </header>
      <!--La etiqueta main se usa para decirle a la maquina que aqui hay un menu principal de la pagina desde el nos iremos movimiendo por esto a veces sus opciones se modificaran -->
      <!--Por ejemplo al iniciar secion algunas de sus opciones desaparecer y apareceran otras -->
      <main>   
        <!--La etiqueta li representa una lista aqui encontramos cuatro opciones -->
        <!--La primera nos llevara a la informacion de la empresa -->
        <li class="elementosMenu" ><button class="bottomMenu" type="button" onclick="window.location.href='quienesSomos.php'"> QUIENES SOMOS </button></a></li>
        <!--Esta nos llevara a la informacion de los cursos -->
        <li class="elementosMenu"><button class="bottomMenu" type="button" onclick="window.location.href='cursos.php'">CURSOS</button></a></li>       
        <!--Nos llevara a un formulario para registrarnos -->
        <li class="elementosMenu"><button class="bottomMenu" type="button"  onclick="window.location.href='registrarUsuario.php'">REGISTRARSE</button></a></li>
        <!--Un pequeño formulario para logeearse -->
        <li class="elementosMenu"><button class="bottomMenu" type="button"  onclick="window.location.href='loggin.php'"> LOGIN </button></li>
      </main>
      <!--El articulo es una etiqueta HTML representa una composision auto contenido dstina a destribuir y reutilizable -->
      
      <article>
        <!--Aqui llamamos a la funcion script para que coloque de fondo el conjunto de imagenes del array anteriormente creado -->
        <img id="imagen">
        <script src="script.js"></script>
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

