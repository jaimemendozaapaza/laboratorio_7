<?php

//Cadena de conexion al servidor
$conection = new mysqli("localhost","root","","erik");

//Para verificar si existe algun error
if (!$conection) {
    die("La conexion falló: ".$conection->connect_error);
}

echo "Conectado exitosamente con objetos";

//Cerrar la conexion
mysqli_close($conection);

?>