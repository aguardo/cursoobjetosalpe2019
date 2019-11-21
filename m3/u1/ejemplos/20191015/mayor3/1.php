<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$numero1 = 0;
$numero2 = 0;
$numero3 = 0;
$salida = 0;

$numero1 = $_REQUEST['num1'];
$numero2 = $_REQUEST['num2'];
$numero3 = $_REQUEST['num3'];


if($numero1 > $numero2) {
    
    if($numero1 > $numero3){
        $salida = $numero1;
    }else{
        $salida = $numero2;
    }   
    
    
}else{
    
    if($numero2 > $numero3){
        $salida = $numero2;       
    }else{
        $salida = $numero3;      
    }
       
}



echo "El número mayor es $salida";

