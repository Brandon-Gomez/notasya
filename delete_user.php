<?php
    require "conexion.php";
    require "seguridad.php";
    

    if (isset($_POST['deleteuser'])) {  

        $id = $_POST['delete_id'];
      
        //Error por llave foranea 
        $sql="SET FOREIGN_KEY_CHECKS=0";
        $resultado = mysqli_query($con,$sql);

        //BORRA USER
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