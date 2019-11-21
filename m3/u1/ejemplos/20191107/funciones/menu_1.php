<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function crear($menu=[]){
    
    $salida = [];
    
     
    foreach ($menu as $id => $submenu){  
     
        $m = '<ul id="'.$id.'">';
        
        foreach($submenu as $e => $v){
            $m .='<li><a href="'.$v.'">'.$e.'</a></li>';

        } 
    
        $m .= '</ul>';
        
        $salida[$id] = $m;
    }
    
    return $salida;
}




$a = crear([
    
    "menu1" => [
        
        "etiqueta" => "url",
        "etiqueta1" => "url1",
               
    ],
    
    "menu2" => [
        
        "etiqueta10" => "url10",
        "etiqueta11" => "url11",
               
    ]     
        
        ]);


echo $a["menu1"];
echo $a["menu2"];