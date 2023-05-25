<?php

include_once './Libs/database.php';
require_once './Config/config.php';

session_set_cookie_params(60 * 60 * 24 * 14);
session_start();

if (isset($_GET['cerrar_sesion'])) {
    session_unset();

    // destroy the session
    session_destroy();
}

if (isset($_SESSION['rol'])) {
    switch ($_SESSION['rol']) {
        case 1: //administradores
            header('location: ./Admin/Home.php');

            break;

        case 2: // usuarios
            header('location: ./User/Home.php');
            break;

        case 4: //ingenieria
            header('location: ./Ingenieria/Home.php');
            break;

        case 5: //Servicios
            header('location: ./Servicios/Home.php');
            break;

        default:
    }
}

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $db    = new database();
    $query = $db->connect()->prepare('SELECT *FROM usuarios WHERE UserName = :username AND Password = :password');
    $query->execute(['username' => $username, 'password' => $password]);

    $row = $query->fetch(PDO::FETCH_NUM);

    if ($row == true) {
        $rol = $row[4];

        $_SESSION['rol'] = $rol;
        switch ($rol) {
            case 1: // administradores
                header('location: ./Admin/home.php');
                break;

            case 2: // usuarios
                header('location: ./User/Home.php');
                break;

            case 4: // ingenieria
                header('location: ./Ingenieria/Home.php');
                break;

            case 5: //servicios
                header('location: ./Ingenieria/Home.php');
                break;

            default:
        }
    } else {
        // no existe el usuario
        echo "<script>alert('Nombre de usuario o contraseña incorrecto');</script>";

    }
    $db->close();

}
?>

<!DOCTYPE html>
<html lang="es" class="backhtml">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Contol de personal">
    <meta name="author" content="Ing. Benitez Parga Miguel">
    <meta name="generator" content="Perosonal 0.01.1">
    <title>Login</title>


    <!-- ESTILOS LOCALES -->
    <link rel="stylesheet" type="text/css" href="./Css/Site.css" />

    <!-- CSS ICONOS BOOTSTRAP -->
    <link rel="stylesheet" href="./font/bootstrap-icons.css">

    <link rel="shortcut icon" href="./favicon.ico" type="image/x-icon" />

    <!-- Css bostrap  -->
    <link rel="stylesheet" type="text/css" href="./Css/bootstrap.min.css" />

</head>


<body>

    <!-- header -->
    <?php
include_once './Includes/Header.php';
?>

    <!-- NAV BAR -->
    <div class="container-fluid backNavBar border-bottom">

        <div class="container">


            <nav class=" backNavBar row navbar navbar-expand-lg justify-content-between align-items-center text-uppercase"
                aria-label="">


                <a href="#" class="col-auto">
                    <img src="./Imagenes/logo.png" alt="logo" class="img-logo-univision">
                </a>



            </nav>

        </div>
    </div>



    <div class="container">

        <div class="row justify-content-center">


            <form action="#" method="post" class="col col-xl-4 mt-3">

                <div class="card shadow mt-3">
                    <div class="card-header text-univision">
                        Iniciar sesión
                    </div>
                    <div class="card-body">
                        <!-- USUARIO -->
                        <div class="form-group pb-3">
                            <label for="user-name" class="form-label">Usuario</label>
                            <input type="text" id="user-name" name="username" class="form-control form-control-sm"
                                required>
                        </div>



                        <!-- PASSWORD -->
                        <div class="form-group pb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" id="password" name="password" class="form-control form-control-sm"
                                required>
                        </div>
                        <!-- BOTON ENVIAR -->
                        <button type="submit" class="btn btn-primary m-1" name="btnenviar">
                            <i class="bi bi-person-badge fs-5 me-2"></i>Confirmar identidad
                        </button>

                        <p class="mt-2">
                            ¿No tienes cuenta? <a href="./Login/Signup.php">Registrarse</a>
                        </p>
                    </div>


                </div>



            </form>

        </div>
    </div>


    <!-- logos footer -->
    <?php
include_once './Includes/Logos-footer.php';
?>

    <footer class="py-4 my-2">
        <p class="text-center text-muted">&copy; 2022 Benitez</p>
    </footer>

    </div>


</body>

</html>