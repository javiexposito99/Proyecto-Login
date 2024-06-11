<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="login" content="width=device-width, initial-scale=1.0">
    <link href="css/stylo_topics.css" type="text/css" rel="stylesheet">
    
    <title>Topics</title>
</head>
<body>
    <?php
        $name = $_GET["nombre"];
        $email = $_GET["email"];
        

    ?>

    <div class="centrar">
        <form id="container" action="summary.php" method="get">
            <div class="container_formulario">
                <h2>Which topics you are interested in?</h2>
                <div class="tres_opciones">
                    <button class="btn" id="primeraOpcion" name="primeraOpcion" value="Software Development">Software Development</button>
                    <button class="btn" id="segundaOpcion" name="segundaOpcion" value="User Experience">User Experience</button>
                    <button class="btn" id="terceraOpcion" name="terceraOpcion" value="Graphic Design">Graphic Design</button>
                </div>
                <input type="hidden"  name="nombre" id="nombre" value=" <?php echo $name ?> ">
                <input type="hidden"  name="email" id="email" value=" <?php echo $email ?> ">
                
                <div id="resultado_topics"></div>

                <div class="boton">
                    <button>Continue</button>
                </div>
            </div>    
        </form>
    </div>



    <script src=""></script>
</body>
</html>