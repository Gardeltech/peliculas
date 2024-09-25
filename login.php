<?php
session_name("LOGIN");
session_start();

if (isset($_POST["btnlogin"])) {
    $usuario = $_POST["usuario"];
    $contrasena = $_POST["contrasena"];

    if ($usuario == "admin" && $contrasena == "admin123") {
        $_SESSION["logueado"] = true;
        header("Location: usuario.php");
    }

    if ($contrasena !== "contrasena") {
        echo "Usuario y Contraseña incorrectos";
        exit();
    }
}

if (isset($_POST["btnReg"])) {
    header("Location: nuevousuario.php");
}




?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Login</title>
</head>

<body>
    <main class="container">


        <h1>Login</h1>
        <form action="login.php" class="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="usuario">Usuario</label>
                <input type="text" class="form-control" id="usuario" name="usuario">
            </div>
            <div class="form-group">
                <label for="contrasena">Contraseña</label>
                <input type="password" class="form-control" id="contrasena" name="contrasena">
            </div>


            <button type="submit" name="btnlogin" class="btn btn-primary">Iniciar sesión</button>
            <button type="submit" class="btn btn-primary" name="btnReg">Registro nuevo usuario</button>



        </form>







    </main>

</body>

</html>