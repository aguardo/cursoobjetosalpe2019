<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$nota = 0;

$nota = $_REQUEST['num1'];

if( $nota < 3){
    
    echo "Muy Deficiente";
    
}elseif ($nota < 5){
    
    echo "Suspenso";
    
}elseif ($nota < 6){

    echo "Suficiente";

}elseif ($nota < 7){
    
    echo "Bien";
}elseif ($nota < 9){
    
    echo "Notable";
}elseif ($nota <=10){
    
    echo "Sobresaliente";
}


