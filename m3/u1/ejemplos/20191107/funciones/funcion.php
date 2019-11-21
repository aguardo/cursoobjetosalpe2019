<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function miFuncion1(){
    $salida="";
    $salida = "Yo soy";
    $salida .="<br>";
    $salida .="Tu eres tu";
    
    return $salida;
}




function miFuncion(){
    echo "Yo soy yo";
    echo "<br>";
    echo "Tú eres tú";
    echo "<br>";
}

miFuncion();
miFuncion();
echo miFuncion1();
