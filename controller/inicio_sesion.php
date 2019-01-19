<?php
    require("../model/Conexion.php");
    require("../model/Usuario.php");

    $usuario = $_POST["user"];
    $pass = $_POST["pass"];
    $mail = $_POST["mail"];

    $conexion = new Conexion();
    
    try {
        $sql = "SELECT * FROM usuarios WHERE usuario_nombre LIKE  '".$usuario."'";
        $res = $conexion->query($sql);
    } catch (PDOException $e) {
        echo 'Error de consulta' . $e->getMessage();
        exit();
    }

    foreach ($res as $key => $value) {

        if($value[0] == $usuario){
            if($value[1] == $pass){
                if($value[2] == $mail){
                    header('Location: ../view/shopping.php');
                }
            }
        }

    }

    $conexion = null;
    $res = null;

    echo("<h1>¡Datos erroneos!</h1>");
    echo("<p>Esta siendo redireccionado</p>");
    header( "refresh:2; url=../index.php" );
?>
