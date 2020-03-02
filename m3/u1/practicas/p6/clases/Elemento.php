<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace clases;

/**
 * Description of Elemento
 *
 * @author Agus
 */
class Elemento {
    //put your code here
    private $x;
    private $y;
    
    private $simbolo;
    
    public function __construct($arg=[]){
        
        $opcionales= [
            "x" => 0,
            "y" => 0,
            "simbolo" => "*",
        ];
        
        
        $argumentos = array_merge($opcionales,$arg);
        
        $this->setX($argumentos["x"]);
        $this->setY($argumentos["y"]);
        $this->setSimbolo($argumentos["simbolo"]);
        
        
    }

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

    public function getSimbolo() {
        return $this->simbolo;
    }

    public function setSimbolo($simbolo) {
        $this->simbolo = $simbolo;
        return $this;
    }


    
        
}
    
    
    
    
    
    
