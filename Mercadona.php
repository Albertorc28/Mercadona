<?php

require_once("Tienda.php");

$t1= new Tienda("Badajoz");
$t2= new Tienda("Caceres");

$pf1=new ProductoFresco("Tomates", 1, "30-03-2018");
//$pf1->mostrar();

$pc1= new ProductoCongelado("Salmon", 20, -30);
//$pc1->mostrar();

$p= new Producto("Sardinas", 2);
//$p->mostrar();

$t1->anadirProducto($pf1);
$t1->anadirProducto($pc1);
$t1->anadirProducto($p);

for($i=0;$i<100;$i++){
    $p=new ProductoFresco("Leche ", 1, "26-04-2018");
    $t1->anadirProducto($p);
}

//$t1->mostrar();

$e1=new Empleado("Juan", 24, 1);
$e2=new Empleado("Andrea", 25, 2);
$eg1=new EmpleadoGerente("Telmo",24,3,4);

for($i=0;$i<250;$i++){
    $e=new Empleado("Juan ".$i,20*$i,$i);
    $t1->altaEmpleado($e);
}

for($i=0;$i<10;$i++){
    $e=new EmpleadoGerente("Telmo ".$i,33 ,20*$i,$i);
    $t1->altaEmpleado($e);
}

$t1->altaEmpleado($e1);
$t1->altaEmpleado($eg1);

$t1->bajaEmpleado("Andrea");

$joven=$t1->empleadoMasJoven();


//Imprimir lo que esta ocurriendo\\
echo"<pre>";
print_r ($t1);
echo"</pre>";


