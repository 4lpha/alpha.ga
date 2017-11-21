<?php
/**
 * Created by PhpStorm.
 * User: stark
 * Date: 5/11/17
 * Time: 03:43 AM
 */

session_start();
$varsesion = $_SESSION["user"];

$pregunta = $_POST["pregunta"];

$conexion = mysqli_connect("localhost", "id3562799_alpha", "12345678", "id3562799_alpha");

$consulta = "SELECT * FROM UsuariosPass WHERE Usuarios='$varsesion'";
$resultado = mysqli_query($conexion, $consulta);


$r = mysqli_fetch_row($resultado);
$numero = (int) $r[3];


$consultaPregunta = "SELECT * FROM Preguntas WHERE numero='$numero'";
$resultadoPregunta = mysqli_query($conexion, $consultaPregunta);

$r2 = mysqli_fetch_row($resultadoPregunta);
echo $r2[1] . " ";

?>

<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet"
          href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css"
          integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link href="./Style.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="./index.js"></script>
    <title>Pagina4</title>
</head>
</html>
