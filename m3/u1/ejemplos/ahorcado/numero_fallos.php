<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function numero_fallos($palabra, $intentos){
    
    $fallos = 0;
    
   for($i=0;$i<count($intentos);$i++){
    
        if(strpos($palabra, $intentos[$i]) === false){
            
            $fallos++;
        } 
        
           
    }
    
    
    
    return $fallos;
}