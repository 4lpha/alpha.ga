<?php
/**
 * Created by PhpStorm.
 * User: stark
 * Date: 5/11/17
 * Time: 02:59 AM
 */

$conexion = mysqli_connect("localhost", "id3562799_alpha", "12345678", "id3562799_alpha");

$usuario = $_POST["username"];
$clave = $_POST["password"];

$insertar = "insert into UsuariosPass (Usuarios, Pasword) VALUES ('$usuario', '$clave')";

$verificar = mysqli_query($conexion, "select * from UsuariosPass WHERE Usuarios  = '$usuario'");

if (mysqli_num_rows($verificar) > 0){
    echo "<script>
            alert('Usuario no disponible, por favor seleccione otro.');
            window.history.go(-1);
        </script>";
    exit;
}

$resultado = mysqli_query($conexion, $insertar);

if (!$resultado){
    echo "ERROR AL REGISTRARSE";
}else{
    header("location:Login.html");
}

mysqli_close($conexion);