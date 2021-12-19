<?php
    require "conexion.php";


    if (isset($_POST['adduser'])) {    
        if (strlen($_POST['email_add']) >= 1 && strlen($_POST['contraseña_add']) >=1 ) {
        $nombre = trim($_POST['nombre_add']);
        $email = trim($_POST['email_add']);
        $contraseña = $_POST['contraseña_add'];
        $rol = $_POST["rol_add"];
        //registrar nuevo
        $consulta = "INSERT INTO usuarios(nombre, usuario, password, rol_id) VALUES ('$nombre','$email','$contraseña','$rol')";
        $resultado = mysqli_query($con,$consulta); 
        //Entrar a usuario
    
        if ($resultado) {
            header("location:user.php");   
        }
        else {
            echo'<script type="text/javascript">
            alert("Error");
            </script>';
            
            }
        }
    }

?>