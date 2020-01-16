<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace clases;

/**
 * Description of Rectangulo
 *
 * @author Agus
 */
class Rectangulo extends Base{
    private $p1;
    private $p2;
    
    public function getP1() {
        return $this->p1;
    }

    public function getP2() {
        return $this->p2;
    }

    public function setP1($p1) {
        $this->p1 = $p1;
        return $this;
    }

    public function setP2($p2) {
        $this->p2 = $p2;
        return $this;
    }

        
       
    
    public function __construct($argumentos) {
        
        $opcionales = [
            "p1" => new Punto([ "x" => 0, "y" => 0]),
            "p2" => new Punto([ "x" => 10,"y" => 10]),
            
        ];
        
        $argumentos = array_merge($opcionales,$argumentos);
        
        parent::__construct($argumentos);
        
        $this->setP1($argumentos["p1"]);
        $this->setP2($argumentos["p2"]);
        
        
        
    }
    
    public function render(){
               
        $string =  '<svg>
                    <rect x="'. $this->getP1()->getX().'" y="'. $this->getP1()->getY().'" width="'. (intval($this->getP2()->getX()) - intval($this->getP1()->getX())) .'" height="'. (intval($this->getP2()->getY()) - intval($this->getP1()->getY()))  .'" stroke="'. $this->getColor().'" stroke-width="3" fill="'. $this->getFondo().'" rx="'. (isset($_REQUEST["r-redondeado"])?5:0)   .'"/>
                    </svg>'; 
        
        return $string;
        
    }
    
    
    
    
}
