
<?php
require 'conexion.php';


if (isset($_POST['register'])) {
    if (strlen($_POST['nombre']) >= 1 && strlen($_POST['email']) >=1 ) {
    $nombre = trim($_POST['nombre']);
    $usuario = trim($_POST['email']);
    $password = trim($_POST['password']);
    $rol_id = "2";
    //registrar nuevo
    $consulta = "INSERT INTO usuarios(nombre, usuario, password, rol_id) VALUES ('$nombre','$usuario','$password','$rol_id')";
    
    header("location:control.php");
    die();
     }
}


?>