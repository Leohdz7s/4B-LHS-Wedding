<?php
#salidas de las vistas al usuario

#establecemos que el codigo del archivo invocado es requerido
require_once "CONTROLADORES/plantillacontrolador.php";
require_once "CONTROLADORES/formulariocontrolador.php";
require_once "MODELOS/modelo-formulario.php";
$plantilla = new ControladorPlantilla();
$plantilla -> ctrTraerPlantilla();

?>