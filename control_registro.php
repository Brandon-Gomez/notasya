
<?php
require 'conexion.php';


if (isset($_POST['register'])) {    
    if (strlen($_POST['email']) >= 1 && strlen($_POST['password']) >=1 ) {
    $nombre = trim($_POST['nombre']);
    $usuario = trim($_POST['email']);
    $password = md5($_POST['password']);
    $rol_id = "2";
    //registrar nuevo
    $consulta = "INSERT INTO usuarios(nombre, usuario, password, rol_id) VALUES ('$nombre','$usuario','$password','$rol_id')";
    $resultado = mysqli_query($con,$consulta);

    //Entrar a usuario

    if ($resultado) {
        header("location:login.php");   
    }
    else {
        echo'<script type="text/javascript">
        alert("Este email esta en uso");
        window.location.href="register.php";
        </script>';  
            
        }
//     $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND password = '$password'";
//     $res = $con->query($sql);
//          if($res->num_rows>0){
        
//         $user = $res->fetch_assoc();

//         $_SESSION["autentificado"] = "1";
//         $_SESSION["nombre"] = $_POST['nombre'];
//         $_SESSION["usuario"] = $_POST['email'];
//         $_SESSION["password"]= $_POST['password'];
//         header("location:app.php");
//     }else {
//         header("location:register.php?error=si");
//    }
    }
 }


?>