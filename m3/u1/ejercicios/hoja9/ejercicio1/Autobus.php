<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace ejercicio1;

/**
 * Description of Autobus
 *
 * @author Agus
 */
class Autobus extends Vehiculo{
    //put your code here.
    
    private $pasajeros;
    
    public function subir_pasajeros ($cantidad_pasajeros){
        
    $this -> pasajeros = $cantidad_pasajeros;
    echo 'Se han subido' . $cantidad_pasajeros . 'pasajeros <br>';
        
    }
    
    public function verificar_encendido(){
        
        if($this->encendido == true){
            
            echo 'Autobus encendido <br>';
        } else {
            
            echo 'Autobus apagado <br>';
            
        }
            
    }
    
    
}
