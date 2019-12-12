<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function longitud($string){
    
    return strlen($string);
    
}

function vocales($string){
    
    $vocales = ["a","e","i","o","u"];
    
    $texto = strtolower($string);
    
    $n_vocales = 0;
    
    for($c=0; $c<strlen($texto); $c++){
        
        if(in_array($texto[$c],$vocales)){
            $n_vocales++;
        }
        
    }
    
    return $n_vocales;
    
}

function novocales($string){
    
    $vocales = ["a","e","i","o","u"];
    
    $texto = strtolower($string);
    
    $n = 0;
    
    for($c=0; $c<strlen($texto); $c++){
        
        if(!in_array($texto[$c],$vocales)){
            $n++;
        }
        
    }
    
    return $n;
    
}

function frecuencia_vocales($string){
    
    $vocales = ["a","e","i","o","u"];
    
    $texto = strtolower($string);
    
    $frecuencia = [ "a" => 0,
                    "e" => 0,
                    "i" => 0,
                    "o" => 0,
                    "u" => 0        
                  ];
    
    for($c=0; $c<strlen($texto); $c++){
        
        if(in_array($texto[$c],$vocales)){
            $frecuencia[$texto[$c]] ++;
        }
        
    }
    
    return $frecuencia;
    
    
    
}



$texto = "Ejemplo de clase";

echo "Longitud del texto";
echo "<br>";
echo longitud($texto);
echo "<br>";
echo "Numero de vocales";
echo "<br>";
echo vocales($texto);
echo "<br>";
echo "Numero de no vocales";
echo "<br>";
echo novocales($texto);
echo "<br>";
echo "Frecuencia de vocales";
echo "<br>";
var_dump(frecuencia_vocales($texto));

