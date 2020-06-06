<?php

$conexion = mysqli_connect('localhost', 'root', '', 'hospital') ;
mysqli_query($conexion, "SET NAMES 'utf8'") ;

if(!$conexion) {
    echo 'error al conectar en la base de datos';

} else {
    echo 'felicidades, la conexion se realizo con exito'
}


?>
