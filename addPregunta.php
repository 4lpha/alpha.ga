<?php
/**
 * Created by PhpStorm.
 * User: stark
 * Date: 14/11/17
 * Time: 05:43 AM
 */

session_start();

if($_SESSION["user"] == null || $_SESSION["user"] == ""){
    echo "no";
    die();
}

$conexion = mysqli_connect("localhost", "id3562799_alpha", "12345678", "id3562799_alpha");

$enunciado = $_POST["enunciado"];
$opcion1 = $_POST["opcion1"];
$opcion2 = $_POST["opcion2"];
$opcion3 = $_POST["opcion3"];
$opcion4 = $_POST["opcion4"];
$correcta = $_POST["correcta"];

echo $enunciado . "<br>";
echo $opcion1 . "<br>";
echo $opcion2 . "<br>";
echo $opcion3 . "<br>";
echo $opcion4 . "<br>";
echo $correcta . "<br>";

$insertar = "insert into Preguntas (enunciado, r1, r2, r3, r4, rc) VALUES ('$enunciado', '$opcion1', 
              '$opcion2', '$opcion3', '$opcion4', '$correcta')";
$verificar = mysqli_query($conexion, "select * from Preguntas WHERE enunciado  = '$enunciado'");

/*if ($_POST["estudiante"]=="on"){
    echo "estudiante";
    $insertar = "insert into Estudiantes (Usuario, Password) VALUES ('$usuario', '$clave')";
    $verificar = mysqli_query($conexion, "select * from Estudiantes WHERE Usuario  = '$usuario'");
}elseif ($_POST["profesor"]=="on"){
    echo "profesor";
    $insertar = "insert into Profesores (Usuario, Password) VALUES ('$usuario', '$clave')";
    $verificar = mysqli_query($conexion, "select * from Profesores WHERE Usuario  = '$usuario'");
}*/


if (mysqli_num_rows($verificar) > 0){
    echo "<script>
            alert('Usuario no disponible, por favor seleccione otro.');
            /*window.history.go(-1);*/
        </script>";
    exit;
}

$resultado = mysqli_query($conexion, $insertar);

if (!$resultado){
    echo "ERROR AL REGISTRARSE";
}else{
    header("location:Profesores.html");
}

mysqli_close($conexion);