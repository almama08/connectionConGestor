<?php
    require_once "autoload.php";
    
    $gestor=new GestorPDO();
    $controller=new Controller($gestor);

    //consulta de datos
    $controller->index();
?>