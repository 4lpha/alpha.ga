<?php
/**
 * Created by PhpStorm.
 * User: stark
 * Date: 14/11/17
 * Time: 03:23 AM
 */

session_start();

if($_SESSION["user"] == null || $_SESSION["user"] == ""){
    echo "no";
    die();
}

$conexion = mysqli_connect("localhost", "id3562799_alpha", "12345678", "id3562799_alpha");

$consulta = "select * from Estudiantes";
$resultado = mysqli_query($conexion, $consulta);



    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Title</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
        <style>
            .box {
                background-color: #00bfa5;
            }
            .box1{
                background-color: #00a389;
            }
            #cabecera {
                background-color: teal;
                color: darkslategray;
            }
            #alpha {
                color: #ffffff;
                font-size: 1.5em;
            }
            .tt{
                font-size: 70px;
            }
            body{
                background-color: #b2dfdb;
            }
        </style>
    </head>
    <body>

        <div class="container-fluid">
            <div class="row" id="cabecera">
                <div class="col s12">
                    <h1 class="text-center tt"><strong id="alpha">&#120514;</strong><strong>lpha</strong></h1>
                </div>
            </div>
        </div>

        <br>

        <div class="container">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-2 box1">
                    <h6 class="text-center">ID</h6>
                </div>
                <div class="col-md-2 box1">
                    <h6 class="text-center">Usuario</h6>
                </div>
                <div class="col-md-2 box1">
                    <h6 class="text-center">#Pregunta</h6>
                </div>
            </div>
        </div>
    </body>
    </html>

<?php

while ($r = mysqli_fetch_array($resultado)) {


    ?>

    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-2 box">
                <h6 class="text-center"><?php echo $r["ID"]; ?></h6>
            </div>
            <div class="col-md-2 box">
                <h6 class="text-center"><?php echo $r["Usuario"]; ?></h6>
            </div>
            <div class="col-md-2 box">
                <h6 class="text-center"><?php echo $r["Pregunta"]; ?></h6>
            </div>
        </div>
    </div>
    </body>

    <?php
}
    ?>