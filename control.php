<?php
    require "conexion.php";
    $usuario = $_POST['email'];
    $password = $con->real_escape_string($_POST['password']);

    $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND password = '$password'";

    $res = $con->query($sql);

    if($res->num_rows>0){
        
        $usuario = $res->fetch_assoc();

        $_SESSION["autentificado"] = "1";
        $_SESSION["id"] = $usuario['id'];
        $_SESSION["nombre"] = $usuario['nombre'];
        $_SESSION["email"] = $usuario['usuario'];
        $_SESSION["rol_id"] = $usuario['rol_id'];

        header("location:app.php");
    }else {
        header("location:register.php?error=si");
    }


?>