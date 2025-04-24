<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Envio de datos en PHP</h1>
    <form action="index2.php" method="GET">
        <input type="text" name="nombre" id="nombre" placeholder="'Nombre"><br>
        <input type="text" name="telefono" id="telefono" placeholder="'Telefono"><br>
        <input type="submit" value="Énviar datos">
    </form>

    <?php
var_dump($_GET);
echo "<br>";
if($_SERVER["REQUEST_METHOD"]="GET")
{
    if(isset($_GET["nombre"]) && isset( $_GET["telefono"]))
    {
        $nombre = $_GET["nombre"];
        $telefono = $_GET["telefono"];
        echo "NOMBRE: " . $nombre . "<br>";
        echo "TELEFONO: " . $telefono;
    }
}
?>
</body>
</html>