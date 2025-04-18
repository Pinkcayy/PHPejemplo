<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Envio de datos con PHP (GET y POST)</h1>

<!-- Formulario GET -->
<form action="index.php" method="GET">
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre"><br>

    <label for="apellido">Apellido:</label>
    <input type="text" id="apellido" name="apellido"><br>

    <input type="submit" value="Enviar nombre y apellido (GET)">
</form>

<br>

<!-- Formulario POST -->
<form action="index.php" method="POST">
    <label for="telefono">Teléfono:</label>
    <input type="text" id="telefono" name="telefono"><br>

    <label for="direccion">Dirección:</label>
    <input type="text" id="direccion" name="direccion"><br>

    <input type="submit" value="Enviar teléfono y dirección (POST)">
</form>

<br>

<?php
// Procesar datos enviados por GET
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["nombre"]) && isset($_GET["apellido"])) {
    $nombre = $_GET["nombre"];
    $apellido = $_GET["apellido"];

    echo "<h2>Datos recibidos con GET:</h2>";
    echo "NOMBRE: " . $nombre . "<br>";
    echo "APELLIDO: " . $apellido;
}

// Procesar datos enviados por POST
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["telefono"]) && isset($_POST["direccion"])) {
    $telefono = $_POST["telefono"];
    $direccion = $_POST["direccion"];

    echo "<h2>Datos recibidos con POST:</h2>";
    echo "TELÉFONO: " . $telefono . "<br>";
    echo "DIRECCIÓN: " . $direccion;
}
?>
</body>
</html>