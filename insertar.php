<?php
    require "conexion.php";


    if (isset($_POST['addnote'])) {    
        if (strlen($_POST['texto']) >= 1 && strlen($_POST['prioridad']) >=1 ) {
        $texto = trim($_POST['texto']);
        $prioridad = trim($_POST['prioridad']);
        $usuario = $_SESSION["id"];
        //registrar nuevo
        $consulta = "INSERT INTO notas(texto, prioridad, usuario_id) VALUES ('$texto','$prioridad','$usuario')";
        $resultado = mysqli_query($con,$consulta); 
        //Entrar a usuario
    
        if ($resultado) {
            header("location:crud.php");   
        }
        else {
            echo'<script type="text/javascript">
            alert("Error");
            </script>';
            
            }
        }
    }

?>