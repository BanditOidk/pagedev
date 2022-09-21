<?php
    $conexion=pg_connect("host=localhost dbname=bdcatalogo user=postgres password=123456");
    if($conexion){
        echo 'conectoooooooooooooooooo';
    }else{
        echo 'no conecto :((((((';
    }
?>