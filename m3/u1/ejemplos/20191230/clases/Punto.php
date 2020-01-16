<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace clases;
/**
 * Description of Punto
 *
 * @author Agus
 */
class Punto {
    //put your code here
    public $x;
    public $y;
    
    
    public function getX() {
        return $this->x;
    }

    public function getY() {
        return $this->y;
    }

    public function setX($x) {
        $this->x = $x;
        return $this;
    }

    public function setY($y) {
        $this->y = $y;
        return $this;
    }

    public function __construct($argumentos) {
        
        $opcionales = [
            "x" => 0,
            "y" => 0,
            
        ];
        
        $argumentos = array_merge($opcionales,$argumentos);
                       
        $this->setX($argumentos["x"]);
        $this->setY($argumentos["y"]);
    }

    
    
    
}
