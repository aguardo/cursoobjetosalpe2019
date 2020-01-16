<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace ejercicio1;
/**
 * Description of Numeros
 *
 * @author Agus
 */
class Numeros {
   
    private $numeros;
    private $orden_ascendente;
    
    function __construct($numeros) {
        $this->setNumeros($numeros);
    }

    public function getNumeros() {
        return $this->numeros;
    }

    public function getOrden_ascendente() {
        return $this->orden_ascendente;
    }

    public function setNumeros($numeros) {
        $this->numeros = $numeros;
        $this->setOrden_ascendente();
        return $this;
    }

    private function setOrden_ascendente() {
       
        $numeros_aux = $this->getNumeros();
        
        sort($numeros_aux);

        $is_ordenado = true;
        
        for($c=0; $c<count($numeros_aux);$c++){
            
            if($this->getNumeros()[$c] != $numeros_aux[$c]){
                
                $is_ordenado = false;
                break;
            }
        }
 
        $this->orden_ascendente = $is_ordenado;

    }
    
    public function imprimir(){
        
        $numeros_aux = $this->getNumeros();
        sort($numeros_aux);
        
        foreach($numeros_aux as $valor){
             echo "$valor ";
        }
        
        echo '<br>';
        
        $is_ordenado = $this->getOrden_ascendente()? 'SI' : 'NO' ;
       
        echo "Los valores fueron introducidos en orden: $is_ordenado"  ;
        
        
    }


    
}
