<?php

//Cadena de conexion al servidor y base de datos
$conection = mysqli_connect("localhost", "root","","erik");

//Para verificar si existe algun error
if (!$conection) {
    die("La conexion falló: ".mysqli_connect_error());
}

echo "Conectado exitosamente con procedimientos";

//Cerrar la conexion
mysqli_close($conection);
?>