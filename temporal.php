<?php
/**
 * Created by PhpStorm.
 * User: stark
 * Date: 14/11/17
 * Time: 02:16 AM
 */

$conexion = mysqli_connect("localhost", "id3562799_alpha", "12345678", "id3562799_alpha");

$usuario = $_POST["usuario"];
$clave = $_POST["clave"];

echo $_POST["username"] . " .. ";
echo "usuario: " . $usuario . ".<br>";
echo "clave: " . $clave . ".<br>";
echo $_POST["estudiante"];
echo $_POST["profesor"];

if ($_POST["estudiante"]=="on"){
    echo "estudiante";
    $insertar = "insert into Estudiantes (Usuario, Password) VALUES ('$usuario', '$clave')";
    $verificar = mysqli_query($conexion, "select * from Estudiantes WHERE Usuario  = '$usuario'");
}elseif ($_POST["profesor"]=="on"){
    echo "profesor";
    $insertar = "insert into Profesores (Usuario, Password) VALUES ('$usuario', '$clave')";
    $verificar = mysqli_query($conexion, "select * from Profesores WHERE Usuario  = '$usuario'");
}


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
    echo"<script language='javascript'>window.location='login.html'</script>;";
}

mysqli_close($conexion);