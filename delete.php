<?php
    require "conexion.php";
    require "seguridad.php";
    

    if (isset($_POST['deletenote'])) {  

        $id = $_POST['delete_id'];
      
    
        $consulta = "DELETE FROM `notas` WHERE id ='$id'";
        $resultado = mysqli_query($con,$consulta); 
    
        if ($resultado) {
            header("location:crud.php");   
        }
        else {
            echo'<script type="text/javascript">
            alert("Error");
            </script>';
            
            }
        
    }

?>