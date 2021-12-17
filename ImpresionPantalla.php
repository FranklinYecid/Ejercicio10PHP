<?php

//Ejemplo con echo//
echo "Hola soy Franklin <br> " ;


//Ejemplo con print//
print "A.D.S.I <br>";

//Ejemplo con var_dump//
$texto = "FRANKLIN";
$numero = 3227981928;
$numero2 = '10';
$arreglo = array('Franklin','Yecid','Camilo');
$arreglo_asociativo = array('nombre' => 'Franklin', 'edad' =>20);
$boleano = false; 



var_dump($texto);
var_dump($numero);
var_dump($numero2);
var_dump($arreglo);
var_dump($arreglo_asociativo);
var_dump($boleano,"<br>");


//Ejemplo con print_r//
$a = array ('a' => 'manzana', 'b' => 'banana', 'c' => array ('x', 'y', 'z'));
print_r ($a);

?>