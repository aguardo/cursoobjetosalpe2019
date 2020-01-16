<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Vehiculo
 *
 * @author Agus
 */
class Vehiculo_2 {
    public $matricula;
    private $color;
    protected $encendido;
    public static $ruedas = 5;
    
    public function __construct($matricula, $color, $encendido) {
        $this->matricula = $matricula;
        $this->color = $color;
        $this->encendido = $encendido;
    }
    
    public function encender(){
        $this->encendido = true;
        echo 'Vehiculo encendido <br/>';        
    }
    
    public function apagar(){
        $this->encendido = false;
        echo 'Vehiculo apagado <br/>';
    }
    
    static function mensaje(){
        echo "Este es mi coche";
    }
    
    static function ruedas(){
        echo Vehiculo_2::$ruedas;
    }
}
