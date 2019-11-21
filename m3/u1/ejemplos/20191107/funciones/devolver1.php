<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function suma_resta_producto_division($num1,$num2){
    
    $resultado= [
        
        'suma' => $num1 + $num2,
        'resta' => $num1 - $num2,
        'producto' => $num1 * $num2,
        'div' => $num1 / $num2,  
    ];
    
    return $resultado;
    
    
}

$resultado_operaciones = suma_resta_producto_division(10, 5);

foreach($resultado_operaciones as $indice => $valor){
    
    echo "$indice = $valor <br>"; 
    
}