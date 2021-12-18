<?php
    require "conexion.php";


    if (isset($_POST['editnote'])) {  

        if (strlen($_POST['texto']) >= 1 && strlen($_POST['prioridad']) >=1 ) {
        $id = $_POST['update_id'];
        $texto = $_POST['texto'];
        $prioridad = $_POST['prioridad'];
        //registrar nuevo
        $consulta = "UPDATE notas SET texto='$texto', prioridad='$prioridad' WHERE id ='$id'";
        $resultado = mysqli_query($con,$consulta); 
        //Entrar a usuario
    
        if ($resultado) {
            echo '<script type="text/javascript">
            alert("Error");
            </script>';;
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