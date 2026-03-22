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

    public function agregar(){
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $nombre=$_POST['nombre'];

            $persona=new Persona($nombre);
            $this->gestor->agregar($persona);

            /*header('Location: index.php');
            exit;*/
        }

        include "views/agregar.php";
    }
}
?>