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
    <!-- link que importan el archivo java y css-->
    <link rel="stylesheet" href="style.css" />
    <script src="script.js" defer></script>
    
  </head>
  <body>
  <?php
  session_start();
  ?>
   
 
    <nav>
  <header>    
        <img id="logo" src="https://cdn.glitch.global/c031a154-e67b-41f9-a8ba-5df27404e59a/Aprendamos%20juntos.png?v=1648226929359" alt="Error"/>
        <p id="saludoCabecera">CAMINAMOS CONTIGO</p>
      </header>
      <main>        
        <li class="elementosMenu" ><button class="bottomMenu" type="button" <?php include('osculto.php');?> onclick="window.location.href='pag_admin.php'"> QUIENES SOMOS </button></a></li>
          <li class="elementosMenu"><button class="bottomMenu" type="button" <?php include('osculto.php');?> onclick="window.location.href='producto.php'">PRODUCTO</button></a></li>
          <li class="elementosMenu"><button class="bottomMenu" type="button" onclick="window.location.href='pag_admin.php'">ADMIN CURSOS</button></a></li>
          <li class="elementosMenu"><button class="bottomMenu" type="button" onclick="window.location.href='pag_admin2.php'"> ADMIN USERS </button></li>
      </main>
	  <article>
  <form action="pag_imagen.php" method="post" name="imagen" enctype="multipart/form-data"> 
  <h1 align="center">Aqui subimos la imagen al servidor:</h1>
  <table align="center">
  <tr>
  <td><input type="file" name="imagen" size="10"></td>	
  <td><input type="submit" name="subir" id="subir" value="SUBIR"></td>
  </tr>
  <tr>
  <td colspan="2" align="center"><a href="pag_admin.php"><input type="button" value="<=VOLVER"></a></td>
  
 </tr>
		 </table>
         </form>
		 <ul id="citaYredes">
          <li class="elementosArticle">
            <a href="https://www.youtube.com">
              <img
                class="enlaceRedesSociales"
                src="https://cdn.glitch.global/c031a154-e67b-41f9-a8ba-5df27404e59a/10f7de5c-2d08-45da-b862-736a685c033b.image.png?v=1646937469906"
              /></a>
            
          </li>
          <li class="elementosArticle">
            <a href="https://www.youtube.com">
              <img
                class="enlaceRedesSociales"
                src="https://cdn.glitch.global/c031a154-e67b-41f9-a8ba-5df27404e59a/76c836d6-5a34-44f8-87a5-0628bf772d43.image.png?v=1646936970247" alt="Error"
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
		 
		 