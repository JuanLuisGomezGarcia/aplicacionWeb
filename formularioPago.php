<!-- DOCTYPE Expecifica que estas usando html-->
<!DOCTYPE html>
<!-- html Engloba todo el documento-->
<html lang="en">
  <!--Contiene todos los metadatos (Informacion de la web que no sera visible) -->
  <head>
    <!--Contiene el texto de la pesta�a que crea la web  -->
    <title>Aprendamosjuntos.com</title>
    <!--Permite conjunto de caracter utf. en espa�ol �, acentos, etc... -->
    <meta charset="utf-8" />
    <!--Sirve para usar la version mas moderna del navegador explore-->
    <meta http-equiv="X-UA.Compatible" content="IE-edge" />
    <!--Recalcula el escalado de la pantalla para adaptarla a moviles -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- link que importan el archivo java y css-->
    <link rel="stylesheet" href="style.css" />
    <script type="text/javascript" src="script.js"></script>
    <script>
    var imagenes=new Array(
        'https://cdn.glitch.global/c031a154-e67b-41f9-a8ba-5df27404e59a/aaa.jpg?v=1650886272671',
        'https://cdn.glitch.global/c031a154-e67b-41f9-a8ba-5df27404e59a/C.jpg?v=1650886285168',
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
  <!--Parte fisica de la web la parte visible -->
  <body>
  <?php
  session_start();
  ?>
 <nav>
  <header>  <a href="index.php">    
        <img id="logo" src="https://cdn.glitch.global/c031a154-e67b-41f9-a8ba-5df27404e59a/Aprendamos%20juntos.png?v=1648226929359" alt="Error"/></a>
        <p id="saludoCabecera">CAMINAMOS CONTIGO</p>
      </header>
      <main>        
        <li class="elementosMenu" ><button class="bottomMenu" type="button" onclick="window.location.href='index.php'"> QUIENES SOMOS </button></a></li>
          <li class="elementosMenu"><button class="bottomMenu" type="button" onclick="window.location.href='producto.php'">PRODUCTO</button></a></li>
          <li class="elementosMenu"><button class="bottomMenu" type="button" <?php include('osculto.php');?> onclick="window.location.href='formulario.php'">REGISTRARSE</button></a></li>
          <li class="elementosMenu"><button class="bottomMenu" type="button" <?php include('osculto.php');?> onclick="window.location.href='log.php'"> LOGIN </button></li>
      </main>
	  <article>

	  
    <form id="apuntarmeProducto" action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="D9YBKF6PCAX6Q">
<input type="image" src="https://www.sandbox.paypal.com/es_ES/ES/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal, la forma rápida y segura de pagar en Internet.">
<img alt="" border="0" src="https://www.sandbox.paypal.com/es_ES/i/scr/pixel.gif" width="1" height="1">
</form>
      
      
      <img id="imagen">
			<ul id="citaYredes">
      <li class="elementosArticle">
            <a href="https://es-es.facebook.com/login/?msclkid=55d40d50d07f11ec88e51ad00e2388f3">
              <img
                class="enlaceRedesSociales"
                src="https://cdn.glitch.global/c031a154-e67b-41f9-a8ba-5df27404e59a/10f7de5c-2d08-45da-b862-736a685c033b.image.png?v=1646937469906"
              /></a>
            
          </li>
          <li class="elementosArticle">
            <a href="https://www.instagram.com/?msclkid=663e5098d07f11ec864aa4134d8cb875">
              <img
                class="enlaceRedesSociales"
                src="https://cdn.glitch.global/c031a154-e67b-41f9-a8ba-5df27404e59a/instagra.jpg?v=1652200445122" alt="Error"
              /></a>
            
          </li>
          <li class="elementosArticle">
            <a href="https://www.youtube.com">
              <img
                class="enlaceRedesSociales"
                src="https://cdn.glitch.global/c031a154-e67b-41f9-a8ba-5df27404e59a/dd733867-e9ab-48d4-a39d-c5c629b62a05.image.png?v=1646938070606" alt="Error"
                   /></a>
            
          </li>
        </ul>
        <!--Citas-->
      </article>

      <!--Pie de la pagina se colocan los derechos de autor -->
      <footer>
        <p id="telefono" class="piePagina">TELEFONO</p>
        <p id="derechos" class="piePagina">&copy; 2022</p>
        <a class="piePagina" href="https://goo.gl/maps/DzmHXhuLsNFAiTqb6">
          <p id="ubicacion"> 
            visitanos
          </p>
        </a>
      </footer>
      <!--Representa un enlace url -->
    </nav>
	</body>
</html>