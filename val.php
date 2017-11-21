<?php
/**
 * Created by PhpStorm.
 * User: stark
 * Date: 14/11/17
 * Time: 02:49 AM
 */

session_start();

$usuario = $_POST["usuario"];
$clave = $_POST["clave"];

$_SESSION["user"] = $usuario;

$conexion = mysqli_connect("localhost", "id3562799_alpha", "12345678", "id3562799_alpha");

if ($_POST["estudiante"]=="on"){
    $consulta = "SELECT * FROM Estudiantes WHERE Usuario='$usuario' AND Password='$clave'";
    $resultado = mysqli_query($conexion, $consulta);
}elseif ($_POST["profesor"]=="on"){
    $consulta = "SELECT * FROM Profesores WHERE Usuario='$usuario' AND Password='$clave'";
    $resultado = mysqli_query($conexion, $consulta);
}


$filas = mysqli_num_rows($resultado);

if ($filas > 0){
    if ($_POST["estudiante"] == "on"){
        echo"<script language='javascript'>window.location='Estudiantes.html'</script>;";
        exit;
    }elseif ($_POST["profesor"] == "on"){
        echo"<script language='javascript'>window.location='Profesores.php'</script>;";
        exit;
    }

}else{
    echo "<script language='JavaScript'>alert('Datos incorrectos');</script>";
    echo"<script language='javascript'>window.location='login.html'</script>;";
}

mysqli_free_result($resultado);
mysqli_close($conexion);