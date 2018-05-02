<?php

require_once ("ProductoCongelado.php");
require_once ("ProductoFresco.php");
require_once ("EmpleadoGerente.php");

class Tienda {
    var $ciudad;
    var $personas;
    var $productos;

    function __construct ($ciudad){
        $this->ciudad = $ciudad;
        $this->productos= array();
        $this->personas= array();
    }

    function getCiudad (){
        return $this->ciudad;
    }

    function setCiudad ($ciudad){
        $this->ciudad = $ciudad;
    }

    function empleadoMasJoven(){
        $pos=0;
        $menor = $this->empleados[0]->getEdad();
        for ($i = 0; $i < count($this->empleados); $i++){
            if ($this->empleados[$i]!= null){
                if ($this->empleados[$i]->getEdad()<$menor){
                $menor = $this->empleados[$i]->getEdad();
                $pos = $i;
                }
            }
        }
        return $this->empleados[$pos];
    }

    function anadirProducto ($producto){
        $enc = false;
        for ($i = 0; $i < count($this->productos) && ($enc == false); $i++) { 
            if ($this->productos[$i] == null) {
                $this->productos[$i] = $producto;
                $enc = true;
            }
        }
        if ($enc == false){
            $this->productos[] = $producto;
        }

    }

    function borrarProducto ($nomproducto){
        $enc = false;
        for ($i = 0; $i < count ($this->productos) && ($enc == false); $i++){
            if ($this->productos[$i]->getNombre() == $nomproducto){
                $this->productos[$i] = null;
                $enc = true;
            }
        }
    }





    //Muestra toda la tienda\\
    function mostrar (){
        echo"Mi tienda está en ".strtoupper($this->getCiudad());
        echo "<br><br>";

        echo"-----PRODUCTOS-----<br>";
        for ($i = 0; $i < count($this->productos); $i++){
            echo $this->productos[$i]->mostrar();
        }

        echo"-----EMPLEADOS-----<br>";
        for ($i = 0; $i < count($this->empleados); $i++){
            echo $this->empleados[$i]->mostrar();
        }
    }


    function altaEmpleado($empleado){
        $this->empleados[] = $empleado;  
    }


    function bajaEmpleado($nombreEmpleado){
        $enc = false;
        for ($i = 0; $i < count ($this->empleados) && ($enc == false); $i++){
            if ($this->empleados[$i]->getNombre() == $nombreEmpleado){
                $this->empleados[$i] = null;
                $enc = true;
            }
        }   
    }

}



?>