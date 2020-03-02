<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace clases;

/**
 * Description of Numeros
 *
 * @author Agus
 */
class Numeros {
    private $num1;
    private $num2;
    private $suma;
    private $resta;
    private $producto;
    private $resto;
    private $cociente;
    
    public function __construct($arg) {
        $this->num1 = $arg["num1"];
        $this->num2 = $arg["num2"];
        $this->suma = $this->num1 + $this->num2;
        $this->resta = $this->num1 - $this->num2;
        $this->producto = $this->num1 * $this->num2;
        $this->cociente = $this->num1 / $this->num2;
        $this->resto = $this->num1 % $this->num2;
        
    }
    
    public function getNum1() {
        return $this->num1;
    }

    public function getNum2() {
        return $this->num2;
    }

    public function getSuma() {
        return $this->suma;
    }

    public function getResta() {
        return $this->resta;
    }

    public function getProducto() {
        return $this->producto;
    }

    public function getCociente() {
        return $this->cociente;
    }

    public function getResto() {
        return $this->resto;
    }


    
    
}
