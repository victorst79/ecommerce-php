<?php    
    foreach ($_POST as $key => $value) {
        if($key == "producto1"){
            echo "Comprar producto 1";
        }else if($key == "producto2"){
            echo "Comprar producto2";
        }else if($key == "producto3"){
            echo "Comprar producto3";
        }
    }
?>