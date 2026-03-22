<?php

class GestorPDO extends Connection{

    public function __construct(){
        parent::__construct();
    }

    public function listar(){
        $consulta='SELECT * FROM Person';
        $rtdo=$this->getConn()->query($consulta);
        $arrayPersonas=[];
        while($value=$rtdo->fetch(PDO::FETCH_ASSOC)){
            $persona=new Persona($value['name'],$value['id']);
            $arrayPersonas[]=$persona;
        }
        return $arrayPersonas;
    }

    public function agregar(Persona $persona){
        $sql='INSERT INTO Person (name) VALUES (:nombre)';
        $stmt=$this->conn->prepare($sql);
        $stmt->bindValue(':nombre',$persona->getNombre());
        return $stmt->execute();
    }

    public function eliminar($id){
        $sql='DELETE FROM Person WHERE id=:id';
        $stmt=$this->conn->prepare($sql);
        $stmt->bindValue(':id',$id);
        return $stmt->execute();
    }

    public function editar($id,$nombre){
        $sql= 'UPDATE Person SET name=:name WHERE id=:id';
        $stmt=$this->conn->prepare($sql);
        $stmt->bindValue(':id',$id);
        $stmt->bindValue(':name',$nombre);
        return $stmt->execute();
    }
}
?>