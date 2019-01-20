<?php
    require("../model/Conexion.php");
    require("../model/Usuario.php");    

    $cantidad = $_POST['cantidad'];
    $stock = $_POST['stock'];
        $conexion = new Conexion();

    try {
        $sql = "SELECT articulo_id FROM articulos WHERE articulo_stock LIKE ".$stock;
        $res = $conexion->query($sql);
    } catch (PDOException $e) {
        echo 'Error de consulta' . $e->getMessage();
        exit();
    }

    foreach ($res as $key => $value) {
        $id = $value[0];
    }

    echo $id;

    try {
        $sql = "INSERT INTO detalle_pedido VALUES (null,$id,$cantidad)";
        $res = $conexion->query($sql);
    } catch (PDOException $e) {
        echo 'Error de consulta' . $e->getMessage();
        exit();
    }
    

    $conexion = null;
?>