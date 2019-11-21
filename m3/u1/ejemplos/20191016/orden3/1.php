<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$numero1 = 0;
$numero2 = 0;
$numero3 = 0;
$max = 0;
$middle = 0;
$min = 0;

$numero1 = $_REQUEST['num1'];
$numero2 = $_REQUEST['num2'];
$numero3 = $_REQUEST['num3'];


if($numero1 > $numero2) {
    
    if($numero3 > $numero1){
        
        $max = $numero3;
        $middle =$numero1;
        $min = $numero2;
        
    }else{
       
        $max = $numero1;
        
        if($numero3>$numero2){
            
            $middle =$numero3;
            $min = $numero2;
            
        }else {
            
            $middle =$numero2;
            $min = $numero3;
        }
        
    }   
    
    
}else{
    
    if($numero2 > $numero3){
        
        $max = $numero2;
        
        if($numero1 > $numero3){
        
            $middle =$numero1;
            $min = $numero3;      
        }else {
            
            $middle =$numero3;
            $min = $numero1;
        }
        
    }else{
        
        $max = $numero3;
        $middle =$numero2;
        $min = $numero1;
    
    }
       
}



echo "El orden de los números es $max $middle $min";

