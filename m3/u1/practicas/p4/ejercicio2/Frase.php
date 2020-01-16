<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace ejercicio2;
/**
 * Description of Frase
 *
 * @author Agus
 */
class Frase {
    private $valor;
    private $n_vocales;
    
    
    public function __construct($valor) {
        $this->setValor($valor);
    }
    
    public function getValor($minusculas = false){
        
        if($minusculas){
            return strtolower($this->valor);
        }else{
            return $this->valor;
        }
        
    }

    public function getN_vocales() {
        return $this->n_vocales;
    }

    public function setValor($valor) {
        $this->valor = $valor;
        $this->setN_vocales();
        return $this;
    }

    private function setN_vocales() {
        
        $vocales = [ 'a', 'e', 'i', 'o', 'u'];
        $longitud = 0;
        foreach($vocales as $valor){
            
            $longitud += substr_count($this->getValor(1), $valor);
           
            
        }
        
        
        $this->n_vocales = $longitud;
        return $this;
    }


    

}
