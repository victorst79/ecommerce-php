<?php
    require("../model/Conexion.php");
    require("../model/Usuario.php");    

    $conexion = new Conexion();

    foreach ($_POST as $key => $value) {
        if($key == "producto1"){
            try {
                $sql = "SELECT articulo_precio,articulo_stock FROM articulos WHERE articulo_id = 1";
                $res = $conexion->query($sql);
            } catch (PDOException $e) {
                echo 'Error de consulta' . $e->getMessage();
                exit();
            }

            foreach ($res as $key => $value) {
                $precio = $value[0];
                $stock = $value[1];
            }
            
            try {
                $sql = "INSERT INTO pedidos VALUES (null,'Portatil MSI',$precio,$stock)";
                $res = $conexion->query($sql);
            } catch (PDOException $e) {
                echo 'Error de consulta' . $e->getMessage();
                exit();
            }
            $conexion = null;
        }else if($key == "producto2"){
            try {
                $sql = "SELECT articulo_precio,articulo_stock FROM articulos WHERE articulo_id = 2";
                $res = $conexion->query($sql);
            } catch (PDOException $e) {
                echo 'Error de consulta' . $e->getMessage();
                exit();
            }

            foreach ($res as $key => $value) {
                $precio = $value[0];
                $stock = $value[1];
            }
            
            try {
                $sql = "INSERT INTO pedidos VALUES (null,'Portatil HP',$precio,$stock)";
                $res = $conexion->query($sql);
            } catch (PDOException $e) {
                echo 'Error de consulta' . $e->getMessage();
                exit();
            }
            $conexion = null;
        }else if($key == "producto3"){
            try {
                $sql = "SELECT articulo_precio,articulo_stock FROM articulos WHERE articulo_id = 3";
                $res = $conexion->query($sql);
            } catch (PDOException $e) {
                echo 'Error de consulta' . $e->getMessage();
                exit();
            }

            foreach ($res as $key => $value) {
                $precio = $value[0];
                $stock = $value[1];
            }
            
            try {
                $sql = "INSERT INTO pedidos VALUES (null,'Ordenador Sobremesa',$precio,$stock)";
                $res = $conexion->query($sql);
            } catch (PDOException $e) {
                echo 'Error de consulta' . $e->getMessage();
                exit();
            }
            $conexion = null;
        }
    }

    $conexion = null;
    header('Location: ../view/shopping.php')
?>