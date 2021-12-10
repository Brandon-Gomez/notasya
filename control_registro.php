
<?php
require 'conexion.php';


if (isset($_POST['register'])) {
    if (strlen($_POST['nombre']) >= 1 && strlen($_POST['email']) >=1 ) {
    $nombre = trim($_POST['nombre']);
    $usuario = trim($_POST['email']);
    $password = trim($_POST['password']);
    $rol_id = "2";
    $consulta = "INSERT INTO usuarios(nombre, usuario, password, rol_id) VALUES ('$nombre','$usuario','$password','$rol_id')";
    $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND password = '$password'";
    
    $resultado = mysqli_query($con,$consulta);
    $res = mysqli_query($con,$sql);

    if($res->num_rows >0){
        $usuario = $res->fetch_assoc();
    
        $_SESSION["autentificado"] = "1";
        $_SESSION["nombre"] = $usuario['nombre'];
        $_SESSION["usuario"] = $usuario['email'];
        $_SESSION["password"] = $usuario['password'];
        header("location:app.php");
        
    }
    
}
}


?>