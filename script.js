<script>
    /**
    * Array con las imagenes que se iran mostrando en la web
    */
    var imagenes=new Array(
        'https://cdn.glitch.global/c031a154-e67b-41f9-a8ba-5df27404e59a/76c836d6-5a34-44f8-87a5-0628bf772d43.image.png?v=1646936970247',
        'https://cdn.glitch.global/c031a154-e67b-41f9-a8ba-5df27404e59a/10f7de5c-2d08-45da-b862-736a685c033b.image.png?v=1646937469906',
        'https://cdn.glitch.global/c031a154-e67b-41f9-a8ba-5df27404e59a/05af8bee-96c5-438e-8be0-1dcd3b4938dd.image.png?v=1646933912320',
        
    );
 
    /**
    * Funcion para cambiar la imagen
    */
    function rotarImagenes()
    {
        // obtenemos un numero aleatorio entre 0 y la cantidad de imagenes que hay
        var index=Math.floor((Math.random()*imagenes.length));
 
        // cambiamos la imagen
        document.getElementById("imagen").src=imagenes[index];
    }
 
    /**
    * Función que se ejecuta una vez cargada la página
    */
    onload=function()
    {
        // Cargamos una imagen aleatoria
        rotarImagenes();
 
        // Indicamos que cada 5 segundos cambie la imagen
        setInterval(rotarImagenes,5000);
    }
</script>


