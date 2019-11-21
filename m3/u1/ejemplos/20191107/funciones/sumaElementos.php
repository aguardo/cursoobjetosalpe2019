<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function sumar($v,&$r){
    
    $r = 0;
    
    foreach($v as $valor){
 
        $r += $valor; 
        
    }
        
}    

$a = [1,2,3,4,5,6,7];
$s = 0;

sumar($a,$s);

echo $s;


