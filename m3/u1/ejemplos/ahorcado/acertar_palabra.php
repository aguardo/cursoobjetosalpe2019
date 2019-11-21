<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function acertar_palabra($palabra,$intentos){
    
    $is_acertado = true;
    
    for($i=0;$i<strlen($palabra);$i++){
    
        if(!in_array($palabra[$i],$intentos)){
            
            $is_acertado = false;
            break;
        } 
        
           
    }
    
    
    return $is_acertado;
      
    
}
