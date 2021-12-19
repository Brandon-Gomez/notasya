<?php
    require "seguridad.php";
    require "conexion.php";


    

    if (isset($_POST['edituser'])) {  
        if (strlen($_POST['nombre_edit']) >= 1 && strlen($_POST['email_edit']) >=1 ) {
        $id = $_POST['update_id'];
        $nombre = $_POST['nombre_edit'];
        $email = $_POST['email_edit'];
        $rol = $_POST['rol_edit'];
        //registrar nuevo
        $consulta = "UPDATE usuarios SET nombre='$nombre', usuario='$email', rol_id='$rol' WHERE id ='$id'";
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