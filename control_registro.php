
<?php
require 'co'
    session_start();
    $con = new mysqli('localhost', 'root','','bd_notas');
    $nombre_r = $_POST['nombre_r'];
    $usuario_r = $_POST['email_r'];
    $password_r = $_POST['password_r'];

    $sql = "INSERT INTO `usuarios`(`nombre`, `usuario`, `password`) VALUES ('[$nombre_r]','[$usuario_r]','[$password_r]',)";

    $res = $con->query($sql);

    header("location:app.php");




?>