<?php
    require "seguridad.php";
    require "conexion.php";


    if (isset($_POST['editnote'])) {  
        if (strlen($_POST['texto_edit']) >= 1 && strlen($_POST['prioridad_edit']) >=1 ) {
        $id = $_POST['edit_id'];
        $texto = $_POST['texto_edit'];
        $prioridad = $_POST['prioridad_edit'];
        //registrar nuevo
        $consulta = "UPDATE notas SET texto='$texto', prioridad='$prioridad' WHERE id ='$id'";
        $resultado = mysqli_query($con,$consulta); 
        //Entrar a usuario
    
        if ($resultado) {
            header("location:note.php");   
        }
        else {
            echo'<script type="text/javascript">
            alert("Error");
            </script>';
            
            }
        }
    }

?>