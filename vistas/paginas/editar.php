<div class="d-flex justify-content-center text-center">
    <form class="p-5 bg-light" method="post">
        <div class="form-group">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                </div>
                <input type="text" class="form-control" value="<?php echo $usuario["name"]; ?>" placeholder="name" id="name" name="updateName">
            </div>
        </div>
        <div class="form-group">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa-solid fa-envelope"></i></span>
                </div>
                <input type="email" class="form-control" value="<?php echo $usuario["email"]; ?>" placeholder="Enter email" id="email" name="updateEmail">
            </div>
        </div>
        <div class="form-group">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa-solid fa-lock"></i></span>
                </div>
                <input type="password" class="form-control" value="<?php echo $usuario["password"]; ?>" placeholder="Enter password" id="pwd" name="updatePassword">

                <input type="hidden" name="passwordActual" value="<?php echo $usuario["password"]; ?>">

                <input type="hidden" name="id" value="<?php echo $usuario["id"]; ?>">
            </div>
        </div>

        <?php
        require_once "controladores/formularios.controlador.php";

        $usuario = array();

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $respuesta = ControladorFormularios::ctrActualizarRegistro();
            if ($respuesta == "ok") {
                echo '<script>
                if (window.history.replaceState){
                    window.history.replaceState(null, null, window.location.href);
                }
                </script>';

                echo '<div class="alert-success"> El usuario ha sido actualizado</div>
                <script>
                    setTimeout(function(){
                        window.location = "index.php?pagina=inicio";
                    }, 1600);
                </script>';
            }
        }

        if (isset($_GET["id"])) {
            $item = "id";
            $valor = $_GET["id"];

            $usuario = ControladorFormularios::ctrSeleccionarRegistros($item, $valor);
        }
        ?>

        <div class="d-flex justify-content-center text-center">
            <form class="p-5 bg-light" method="post">
                <!-- Tus campos de formulario aquí, puedes usar $usuario["name"], $usuario["email"], etc. -->
                <button type="submit" class="btn btn-primary">Actualizar</button>
            </form>
        </div>