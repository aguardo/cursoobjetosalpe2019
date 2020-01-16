<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace clases;

/**
 * Description of Circulo
 *
 * @author Agus
 */
class Circulo extends Base{
    //put your code here
    private $centro;
    private $radio;
    
    public function getCentro() {
        return $this->centro;
    }

    public function setCentro($centro) {
        $this->centro = $centro;
        return $this;
    }
    public function getRadio() {
        return $this->radio;
    }

    public function setRadio($radio) {
        $this->radio = $radio;
        return $this;
    }

    public function __construct($argumentos) {
        
      $opcionales = [
            "centro" => new Punto([]),
            "radio" => 10,
                       
       ];
      
            
       $argumentos = array_merge($opcionales,$argumentos);
       
       parent::__construct($argumentos);
        $this->setCentro($argumentos["centro"]);
        $this->setRadio($argumentos["radio"]);
        
    }
    
    public function render(){
        
        $string =  '<svg>
                    <circle cx="'. $this->getCentro()->getX().'" cy="'. $this->getCentro()->getY().'" r="'. $this->getRadio().'" stroke="'. $this->getColor().'" stroke-width="3" fill="'. $this->getFondo().'" />
                    </svg>'; 
        
        return $string;
        
    }
    
}
