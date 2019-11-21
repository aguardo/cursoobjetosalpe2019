<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function dibujar_bloques($palabra,$intentos){
        
        $bloques = '';
        
        for($i=0;$i<strlen($palabra);$i++){
              
            $bloques .='<div style="display:inline-block; width:20px; height:20px; border: 5px solid black; text-align:center;">';
            
            if(in_array($palabra[$i],$intentos)){
                
                $bloques .= $palabra[$i];
                
            }else{
                
                $bloques .= "&nbsp;";
                
            }            
            
            
            $bloques .='</div>';             
       
        }       
        
        return $bloques;
        
    }
