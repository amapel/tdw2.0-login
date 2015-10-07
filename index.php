<?php  /*comentarios  como en javascrupt///// inicia un bloque en php*/
    
    $user= $_GET["usuario"];         //$ = variable y guarda el valor de la variable
     $pass= $_GET["contraseña"];   /*echo nos permite imprimir resultados similar a document.write en js*/


     //si el usuario y clave no coinciden entonces marca error
     if($user !="pamela"|| $pass!="123456" ){

        echo"no estás autorizado";
     }
     else{ //inicia bloque autorizado 


    //si pasa esto el usuario es correcto y continua
/* termina el bloque de php*/
?>

<!DOCTYPE html>
<html> 
<head>
    <title>login</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="css/main.css" />
</head>
    <body>
        <div id="contenedor"><!-- cuadro de login-->
            
        <header> <!-- encabezado 
        -->
                <aside> <span class="naranja">Mi primer login</span> </aside>
                <nav>
                    <a class="activo" href="index.php">Inicio</a>
                    |   
                    <a href=" ">Ingresar</a>
                    |
                    <a href=" ">Nuevo usuario</a>
                </nav>
        </header>
        
            <div id="login"><!--  login -->
	           
                    <h1> Hola  mono, ya entraste a la pagina! </h1>
                  
                
	           
            	
            </div>
        <footer> <!-- pie de pagina-->
            <p> Adios </p>
        </footer>
        </div>
    </body>
</html>

<?php
    } ///termina bloque autorizado 
?>

