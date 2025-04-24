<?php
var_dump($_GET);
echo "<br>";
if($_SERVER["REQUEST_METHOD"]="GET")
{
    $nombre = $_GET["nombre"];
    $telefono = $_GET["telefono"];
    echo "NOMBRE: " . $nombre . "<br>";
    echo "TELEFONO: " . $telefono;
}
?>