<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function crear($menu=[]){
    $salida = "<ul>";
    foreach($menu as $e => $v){
        $salida .='<li><a href="'.$v.'">'.$e.'</a></li>';
        
    }    
    
    return $salida;
}


$elementos = [
    "etiqueta" => "url",
    "etiqueta1" => "url1",
    
];

echo crear($elementos);