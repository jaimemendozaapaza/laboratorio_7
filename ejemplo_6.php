<?php

try {
    $conection = new PDO("mysql:host=localhost;dbname=erik","root","");
    $conection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conectado exitosamente con PDO";
} catch (PDOException $e) {
    echo "La conexion falló: ".$e->getMessage();
}

?>