<?php

session_start();

if($_SESSION["user"] == null || $_SESSION["user"] == ""){
    echo "no";
    die();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Principal</title>
    <style>
        #cabecera {
            background-color: teal;
            color: darkslategray;
        }
        #alpha {
            color: #ffffff;
            font-size: 1.5em;
        }
        body{
            background-color: #b2dfdb;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>

<div class="container-fluid">

    <div class="row" id="cabecera">
        <div class="col s12">
            <h1 class="center-align"><strong id="alpha">&#120514;</strong><strong>lpha</strong></h1>
        </div>
    </div>

    <div class="row">
        <div class="col s4">
            <div class="card teal lighten-1">
                <div class="card-content">
                    <span class="card-title">Estudiantes</span>
                    <p>En este apartado puede ver a traves de una tabla a los estudiantes y el numero de la pregunta en
                    la que se encuentra</p>
                </div>
                <div class="card-action">
                    <a style="color: white" href="Tabla.php">Ver tabla</a>
                </div>
            </div>
        </div>

        <div class="col s4">
            <div class="card teal lighten-1">
                <div class="card-content">
                    <span class="card-title">Agregar preguntas</span>
                    <p>Aqui puede agregar nuevas preguntas a traves de un sencillo formulario. las preguntas que agrege
                    apareceran automaticamente a los estudiantes.</p>
                </div>
                <div class="card-action">
                    <a style="color: white" href="addPregunta.html">Ver formulario</a>
                </div>
            </div>
        </div>

        <div class="col s4">
            <div class="card teal lighten-1">
                <div class="card-content">
                    <span class="card-title">Ver preguntas</span>
                    <p>En esta seccion puede ver un listado en el que se incluyen todas las preguntas
                    incluyendo sus opciones de respuesta y su respuesta correcta</p>
                </div>
                <div class="card-action">
                    <a style="color: white" href="verPregunta.php">Ver listado</a>
                </div>
            </div>
        </div>

    </div>

    <div class="row">
        <div class="col s5"></div>
        <div class="col s2">
            <a href="cerrarSesion.php" class="waves-effect waves-light btn">Cerrar sesion</a>
        </div>
    </div>
</div>

</body>
</html>