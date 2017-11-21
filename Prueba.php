<?php
    session_start();

    if($_SESSION["user"] == null || $_SESSION["user"] == ""){
        echo "no";
        die();
    }

    $varsesion = $_SESSION["user"];

    $pregunta = $_POST["pregunta"];

    $conexion = mysqli_connect("localhost", "id3562799_alpha", "12345678", "id3562799_alpha");

    $consulta = "SELECT * FROM Estudiantes WHERE Usuario='$varsesion'";
    $resultado = mysqli_query($conexion, $consulta);


    $r = mysqli_fetch_row($resultado);
    $numero = (int) $r[3];


    $consultaPregunta = "SELECT * FROM Preguntas WHERE numero='$numero'";
    $resultadoPregunta = mysqli_query($conexion, $consultaPregunta);

    $r2 = mysqli_fetch_row($resultadoPregunta);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Prueba</title>
    <style>
        #cabecera {
            background-color: teal; /* Green */
            color: black;
        }
        #alpha {
            color: #ffffff;
            font-size: 1.5em;
        }
        body{
            background-color: #b2dfdb;
        }
        #box{
            background-color: teal;
            padding: 7%;
            margin-bottom: -13%;
        }
        #box2{
            background-color: teal;
            padding: 7%;
            padding-top: 0px;
        }
        #boton{
            margin-left: 76%;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
</head>
<body>

    <div class="container-fluid">

        <div class="row" id="cabecera">
            <div class="col s12">
                <h1 class="center-align"><strong id="alpha">&#120514;</strong><strong>lpha</strong></h1>
            </div>
        </div>

        <div class="row">
            <div class="col s4"></div>
            <div class="col s4">
                <form id="box">
                    <h4>Pregunta <?php echo $numero ?> </h4>
                    <h4> <?php echo $r2[1] ?> </h4>
                    <h5>A- <?php echo $r2[2] ?> </h5>
                    <h5>B- <?php echo $r2[3] ?> </h5>
                    <h5>C- <?php echo $r2[4] ?> </h5>
                    <h5>D- <?php echo $r2[5] ?> </h5>

                </form>
            </div>
        </div>

        <div class="row">
            <div class="col s4"></div>
            <div class="col s4">
                <form action="Respuesta.php" method="post" id="box2">
                    <input type="text" name="res" placeholder="Respuesta">
                    <input id="boton" type="submit" value="Enviar">
                </form>
            </div>
        </div>

    </div>

</body>
</html>