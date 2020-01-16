<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace ejercicio1;

/**
 * Description of Camion
 *
 * @author Agus
 */
class Camion extends Vehiculo{

    private $carga;
    
    public function cargar($cantidad_a_cargar){
        
        $this->carga = $cantidad_a_cargar;
        echo ' Se ha cargado cantidad: ' . $cantidad_a_cargar . '<br>';
        
    }
    
    public function verificar_encendido(){
        
        if($this->encendido == true){
            
            echo 'Camion encendido <br>';
        } else {
            
            echo 'Camion apagado <br>';
            
        }
        
        
        
    }
}
