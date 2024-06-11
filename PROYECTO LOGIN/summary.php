<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="login" content="width=device-width, initial-scale=1.0">
    <link href="css/stylo_summary.css" type="text/css" rel="stylesheet">
    <title>Topics</title>
</head>
<body>
    <div class="centrar">
        <form id="container">
            <div class="container_formulario">
                <h2>Summary</h2>
                <?php
                    
                    $name = $_GET["nombre"];
                    $email = $_GET["email"];

   
                    echo "<span id='titulo_d'> Name: </span>" . $name . "<br>";
                    echo "<br>";
                    echo "<span id='titulo_d'> Email: </span>" . $email . "<br>";
                    echo "<br>";
                

                    echo "<span id='titulo_d'> Topics: </span>";
                    echo "<br>";

                    if(isset($_GET['primeraOpcion'])){
                        $primeraOpcion = $_GET['primeraOpcion'];
                        echo "<ul>" . $primeraOpcion . "</ul>";
                    }
                    
                    if(isset($_GET['segundaOpcion'])){
                        $segundaOpcion = $_GET['segundaOpcion'];
                        echo "<ul>" . $segundaOpcion . "</ul>";
                    }
                    
                    if(isset($_GET['terceraOpcion'])){
                        $terceraOpcion = $_GET['terceraOpcion'];
                        echo "<ul>" . $terceraOpcion . "</ul>";
                    }

                    
                     
                ?>



                <!--Mostrar la opción escogida anterirormente-->
                
            </div>    
        </form>
    </div>
</body>
</html>