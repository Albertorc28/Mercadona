<?php

require_once("Empleado.php");

class EmpleadoGerente extends Empleado{
    var $nivel;

    function __construct($nombre,$edad,$id,$nivel){
        parent:: __construct($nombre,$edad,$id);
        $this->nivel= $nivel;
    }

    function getNivel(){
        return $this->nivel;
    }
    
    function setNivel($nivel){
        $this->nivel=$nivel;
    }

    function mostrar(){
        parent:: mostrar();
        echo $this->getNivel()."<br>";
    }
}

