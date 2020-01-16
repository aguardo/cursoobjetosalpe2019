<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Usuario {
    
    var $nombre ="defecto";
    function set_usuario(){
        $this -> nombre ="Ramon";
        
    }
}

$persona = new Usuario();
echo $persona->nombre;
$persona -> nombre = "Silvia";
var_dump($persona);

