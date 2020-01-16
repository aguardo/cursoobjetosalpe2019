<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


/**
 * Description of 4
 *
 * @author Agus
 */
class Cadena {
    private $valor;
    private $longitud;
    private $vocales;
    
    function __construct($valor){
        $this->setValor($valor);        
    }
    
    public function getValor($minusculas = false){
        
        if($minusculas){
            return strtolower($this->valor);
        }else{
            return $this->valor;
        }
        
    }
    
    public function getLongitud(){
        
        $this->calcularLongitud();
        return $this->longitud;
    }
    
    public function getVocales(){
        
        $this->numeroVocales();
        return $this->vocales;
    }
    
    public function setValor($valor){
        
        $this -> valor = $valor;
        
    }
    
    public function setLongitud($longitud){
        
        $this->longitud = $longitud;
    }
    
    public function setVocales($vocales){
        
        $this->vocales = $vocales;
        
    }
    
    private function calcularLongitud(){
        
        $this ->setLongitud(strlen($this->valor));
        
    }
    
    private function numeroVocales(){
        $vocales = [ 'a', 'e', 'i', 'o', 'u'];
        $longitud = 0;
        foreach($vocales as $valor){
            
            $longitud += substr_count($this->getValor(1), $valor);
            return $longitud;
            
        }
        
    }
            
                 
            
    
}
