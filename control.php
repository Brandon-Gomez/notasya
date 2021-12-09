<?php
    session_start();

    $con = new mysqli('localhost', 'root','','bd_notas');

    $usuario = $_POST['email'];
    $password = $con->real_escape_string($_POST['password']);

    $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND password = '$password'";

    $res = $con->query($sql);

    echo $res->num_rows;

    if($res->num_rows>0){
        
        $usuario = $res->fetch_assoc();

        $_SESSION["autentificado"] = "1";
        $_SESSION["nombre"] = $usuario['nombre'];
        $_SESSION["email"] = $usuario['email'];

        header("location:app.php");
    }else {
        header("location:register.php?error=si");
    }


?>