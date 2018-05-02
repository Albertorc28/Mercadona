<?php

require_once("Persona.php");

class Cliente extends Persona{
    var $cif;

    function __construct($nombre,$edad){
        parent:: __construct($nombre,$edad);
        $this->cif=$cif;
    }

    function getCif(){
        return $this->cif;
    }

    function setCif($cif){
        $this->cif=$cif;
    }

    function mostrar(){
        echo "Cif Cliente ".$this->getCif()."<br>";
    }
}