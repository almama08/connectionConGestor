<?php

class Controller{
    protected $gestor;

    public function __construct($gestor){
        $this->gestor=$gestor;
    }

    public function index(){
        $arrayPersonas=$this->gestor->listar();

        include "views/listar.php";
    }
}
?>