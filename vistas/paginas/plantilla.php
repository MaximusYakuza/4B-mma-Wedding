<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WebApp4B - MMA</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/e2ad21b169.js" crossorigin="anonymous"></script>
    <!--Plugings CSS-->
    <!--Plugings CSS-->
</head>

<body>

    <div class="container-fluid">
        <h3 class="text-center py-3">LOGO</h3>
    </div>

    <div class="container-fluid bg-light">
        <div class="container">
            <ul class="nav nav-justified py-2 nav-pills">


                <?php if (isset($_GET["pagina"])): ?>
                    <?php if ($_GET["pagina"] == "registro"): ?>
                        <li class="nav-item">
                            <a href="index.php?pagina=registro" class="nav-link active">Registro</a>
                        </li>
                    <?php else: ?>
                        <li class="nav-item">
                            <a href="index.php?pagina=registro" class="nav-link">Registro</a>
                        </li>
                    <?php endif ?>

                    <?php if ($_GET["pagina"] == "ingreso"): ?>
                        <li class="nav-item">
                            <a href="index.php?pagina=ingreso" class="nav-link active">Ingreso</a>
                        </li>
                    <?php else: ?>
                        <li class="nav-item">
                            <a href="index.php?pagina=ingreso" class="nav-link">Ingreso</a>
                        </li>
                    <?php endif ?>

                    <?php if ($_GET["pagina"] == "inicio"): ?>
                        <li class="nav-item">
                            <a href="index.php?pagina=inicio" class="nav-link active">Inicio</a>
                        </li>
                    <?php else: ?>
                        <li class="nav-item">
                            <a href="index.php?pagina=inicio" class="nav-link">Inicio</a>
                        </li>
                    <?php endif ?>

                    <?php if ($_GET["pagina"] == "salir"): ?>
                        <li class="nav-item">
                            <a href="index.php?pagina=salir" class="nav-link active">Salir</a>
                        </li>
                    <?php else: ?>
                        <li class="nav-item">
                            <a href="index.php?pagina=salir" class="nav-link">Salir</a>
                        </li>
                    <?php endif ?>
                <?php else: ?>
                    <!-- Si no se proporciona el parámetro "pagina", muestra los enlaces predeterminados -->
                    <li class="nav-item">
                        <a href="index.php?pagina=registro" class="nav-link">Registro</a>
                    </li>
                    <li class="nav-item">
                        <a href="index.php?pagina=ingreso" class="nav-link">Ingreso</a>
                    </li>
                    <li class="nav-item">
                        <a href="index.php?pagina=inicio" class="nav-link active">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a href="index.php?pagina=salir" class="nav-link">Salir</a>
                    </li>
                <?php endif ?>



                <ul class="nav nav-justified py-2 nav-pills">

                </ul>
        </div>
    </div>

    <!-- -->
    <div class="conatiner-fluid">
    <div class="container py-5">
        <?php
        if (isset($_GET["pagina"])) {
            // Lista de páginas permitidas
            if (
                $_GET["pagina"] == "registro" ||
                $_GET["pagina"] == "ingreso" ||
                $_GET["pagina"] == "inicio" ||
                $_GET["pagina"] == "salir" ||
                $_GET["pagina"] == "editar"
            ) {
                $p = $_GET["pagina"];
                include "paginas/" . $p . ".php";
            } else {
                // Cargar página de error 404
                include "paginas/error404.php";
            }
        } else {
            include "paginas/registro.php";
        }
        ?>
    </div>
</div>

    <!--Container Fluid-->
</body>

</html>