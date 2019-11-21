<?php

function operar($vector, &$salida){
    
    $suma = 0;
    $producto = 1;
    
    foreach($vector as $elemento){
        
        $suma += $elemento;
        $producto *= $elemento;        
    }
    
    $media = $suma / count($vector);
    
    $salida = [];
    
    $salida["suma"] = $suma;
    $salida["producto"] = $producto;
    $salida["media"] = $media;  
    
    
}

$a = [1,2,3,4,5,6,7];

$s = [];

operar($a,$s);

var_dump($s);
