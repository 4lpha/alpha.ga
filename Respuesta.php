<?php
/**
 * Created by PhpStorm.
 * User: stark
 * Date: 5/11/17
 * Time: 08:50 AM
 */

session_start();

$varsesion = $_SESSION["user"];
$res = $_POST["res"];
//echo "user: " . $_SESSION["user"] . "<br>";
//echo "Respuesta: " . $_POST["res"] . "<br>";

$conexion = mysqli_connect("localhost", "id3562799_alpha", "12345678", "id3562799_alpha");

$consulta = "SELECT * FROM Estudiantes WHERE Usuario='$varsesion'";
$resultado = mysqli_query($conexion, $consulta);


$r = mysqli_fetch_row($resultado);
$numero = $r[3];

//echo "numero usuario: " . $numero . "<br>";

$consultaNPregunta = "SELECT * FROM Preguntas WHERE numero='$numero'";
$resultadoPregunta = mysqli_query($conexion, $consultaNPregunta);

$r2 = mysqli_fetch_row($resultadoPregunta);
//echo $r2[0] . "<br>";

$consultaRespuesta = "SELECT * FROM Preguntas WHERE numero='$r2[0]'";
$resultadoRespuesta = mysqli_query($conexion, $consultaRespuesta);
$r3 = mysqli_fetch_row($resultadoRespuesta);
//echo $r3[6] . "<br>";

//echo $res . " hh " . $r3[6] . " ff <br>";


if ($r3[6] == $res){

    $numero++;
    //echo "   " . $numero . "   ";
    $actualizar = "Update Estudiantes set Pregunta='$numero' WHERE Usuario='$varsesion'";
    $a = mysqli_query($conexion, $actualizar);
    echo"<script language='javascript'>window.location='Prueba.php'</script>;";

}else{
    echo "<script language='JavaScript'>alert('Respuesta incorrecta');</script>";
    echo"<script language='javascript'>window.location='Prueba.php'</script>;";
}

