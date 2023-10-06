<?php
    require_once ("controladores/platilla.controlador.php");
    require_once ("controladores/formularios.controlador.php");
    require_once ("modelos/formularios.modelos.php");



    $plantilla = new ControladorPLantilla();
    $plantilla -> ctrTraerPlantilla();
    ?>