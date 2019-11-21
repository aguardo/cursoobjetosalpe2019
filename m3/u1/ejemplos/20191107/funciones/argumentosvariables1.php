<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function sumar(){
    
    $args = func_get_args();
    $suma = 0;
    
    foreach($args as $valor){
        
        $suma += $valor;
        
    }
    
    return $suma;
    
       
}


$resultado = sumar(0);

echo "<div>$resultado</div>";




$resultado = sumar(15, 5 , 10);

echo "<div>$resultado</div>";



