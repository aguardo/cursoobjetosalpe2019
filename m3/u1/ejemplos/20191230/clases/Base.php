<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace clases;

/**
 * Description of Base
 *
 * @author Agus
 */
class Base {
    
    public $color;
    public $fondo;
    
    public function getColor() {
        return $this->color;
    }

    public function getFondo() {
        return $this->fondo;
    }

    public function setColor($color) {
        $this->color = $color;
        return $this;
    }

    public function setFondo($fondo) {
        $this->fondo = $fondo;
        return $this;
    }

    public function __construct($argumentos) {
        
        $opcionales = [
            "color" => "black",
            "fondo" => "white",
            
        ];
        
        $argumentos = array_merge($opcionales,$argumentos);
        
        $this->setColor($argumentos["color"]);
        $this->setFondo($argumentos["fondo"]);
    }

}
