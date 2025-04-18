<?php
//procesar información
//var_dump($_SERVER);
//var_dump($_POST);
if($_SERVER["REQUEST_METHOD"]=="POST")
$nombre = $_POST["nombre"];
$telefono = $_POST["telefono"];

echo "NOMBRE: " , $nombre , "<br>";
echo "TELEFONO: " , $telefono;
?>