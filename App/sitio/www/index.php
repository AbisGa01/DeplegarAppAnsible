<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/styles.css"> <!-- Vincula la hoja de estilo CSS -->
</head>
<body>
    <form action="auth.php" method="post" class="container"> <!-- Aplica la clase de estilo "container" al formulario -->
        <h1>Ingresa al sistema<span class="heart"></span></h1>
        <p>Usuario <input type="text" placeholder="Ingrese su nombre" name="usuario"></p>
        <p>Contraseña <input type="password" placeholder="Ingrese su contraseña" name="password"></p>
        <input type="submit" value="Ingresar">
        <p>¿No tienes una cuenta? <a href="registro.php">Crear una cuenta</a></p>
    </form>
</body>
</html>
