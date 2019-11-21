<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$numero1 = 0;
$numero2 = 0;

$numero1 = $_REQUEST['num1'];
$numero2 = $_REQUEST['num2'];
        

if ( $numero1 > $numero2) {
    $salida = $numero1;    
}else{
    $salida = $numero2;
}

echo "El número mayor es $salida";