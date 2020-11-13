<?php

//Indica que requiere los siguiente archivos
require_once 'config/global.php';
require_once 'sistema/BaseControlador.php';
require_once 'sistema/FuncionesControlador.php';

//EL if verifica si la variable controlador esta definido
if (isset($_GET["controlador"])) {
    $controladorObj = cargarControlador($_GET["controlador"]);
} else {
    $controladorObj = cargarControlador(CONTROL_DEFECTO);
}
lanzarAccion($controladorObj);