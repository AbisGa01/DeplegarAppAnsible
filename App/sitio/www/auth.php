<?php
$conexion = mysqli_connect("localhost", "root", " ", "usuarios");

$usuario = $_POST['usuario'];
$password = $_POST['password'];
session_start();
$_SESSION['usuario'] = $usuario;

$consulta = "SELECT * FROM abigaildb WHERE usuario='$usuario' AND password='$password'";
$resultado = mysqli_query($conexion, $consulta);

$filas = mysqli_num_rows($resultado);

if ($filas) {
    // Redirigir a www.agallegos.com
    header("Location: http://www.agallegos.com");
    exit; // Asegura que se detenga la ejecución del script después de la redirección
} else {
    include("index.php");
    ?>
    <h1>Intenta de nuevo</h1>
    <?php
}

mysqli_free_result($resultado);
mysqli_close($conexion);
?>
