<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejemplos de Variables Superglobales en PHP</title>
</head>
<body>
    <h1>Ejemplos de Variables Superglobales en PHP</h1>

    <h2>1. $GLOBALS</h2>
    <?php
    $a = 10;
    $b = 20;
    function sumar() {
        $GLOBALS['resultado'] = $GLOBALS['a'] + $GLOBALS['b'];
    }
    sumar();
    echo "Resultado con \$GLOBALS: " . $resultado;
    ?>

    <h2>2. \$_SERVER</h2>
    <?php
    echo "Nombre del servidor: " . $_SERVER['SERVER_NAME'] . "<br>";
    echo "Script actual: " . $_SERVER['PHP_SELF'] . "<br>";
    echo "Método de solicitud: " . $_SERVER['REQUEST_METHOD'];
    ?>

    <h2>3. \$_GET</h2>
    <form method="get">
        <input type="text" name="nombre_get" placeholder="Tu nombre (GET)">
        <input type="submit" value="Enviar GET">
    </form>
    <?php
    if (isset($_GET['nombre_get'])) {
        echo "Hola " . $_GET['nombre_get'];
    }
    ?>

    <h2>4. \$_POST</h2>
    <form method="post">
        <input type="text" name="nombre_post" placeholder="Tu nombre (POST)">
        <input type="submit" value="Enviar POST">
    </form>
    <?php
    if (isset($_POST['nombre_post'])) {
        echo "Hola " . $_POST['nombre_post'];
    }
    ?>

    <h2>5. \$_COOKIE</h2>
    <?php
    setcookie("usuario", "Juan", time() + 3600);
    if (isset($_COOKIE['usuario'])) {
        echo "Bienvenido, " . $_COOKIE['usuario'];
    } else {
        echo "Cookie no encontrada.";
    }
    ?>

    <h2>6. \$_FILES</h2>
    <form method="post" enctype="multipart/form-data">
        <input type="file" name="archivo">
        <input type="submit" value="Subir archivo">
    </form>
    <?php
    if (isset($_FILES['archivo'])) {
        $nombre = $_FILES['archivo']['name'];
        $temporal = $_FILES['archivo']['tmp_name'];
        if (move_uploaded_file($temporal, "uploads/" . $nombre)) {
            echo "Archivo subido: " . $nombre;
        }
    }
    ?>

    <h2>7. \$_ENV</h2>
    <?php
    echo "Ruta del sistema (PATH): " . getenv("PATH");
    ?>

    <h2>8. \$_REQUEST</h2>
    <form method="post">
        <input type="text" name="dato" placeholder="Dato por REQUEST">
        <input type="submit" value="Enviar REQUEST">
    </form>
    <?php
    if (isset($_REQUEST['dato'])) {
        echo "Dato recibido: " . $_REQUEST['dato'];
    }
    ?>

    <h2>9. \$_SESSION</h2>
    <?php
    $_SESSION['usuario'] = "María";
    echo "Usuario guardado en sesión: " . $_SESSION['usuario'];
    ?>
</body>
</html>