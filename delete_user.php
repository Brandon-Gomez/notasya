<?php
    require "conexion.php";
    require "seguridad.php";
    

    if (isset($_POST['deleteuser'])) {  

        $id = $_POST['delete_id'];
      
        //registrar nuevo
        $consulta = "DELETE FROM usuarios WHERE id ='$id'";
        $resultado = mysqli_query($con,$consulta); 

        if ($resultado) {
            header("location:user.php");   
        }
        else {
            echo'<script type="text/javascript">
            alert("Error");
            </script>';
            
            }
        
    }

?>