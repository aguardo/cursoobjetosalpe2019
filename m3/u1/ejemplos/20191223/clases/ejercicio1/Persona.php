<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace ejercicio1;
/**
 * Description of Persona
 *
 * @author Agus
 */
class Persona {
    
    private $nombre;
    public $edad;
    
    public function estudios(){
        return "Mis estudios son...";
    }
    
    public function getNombre() {
        return $this->nombre;
    }

    public function getEdad() {
        return $this->edad;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
        return $this;
    }

    public function setEdad($edad) {
        $this->edad = $edad;
        return $this;
    }

    public function __construct($argumentos) {
        $this->setNombre($argumentos["Nombre"]);
        $this->setEdad($argumentos["Edad"]);
    }

}
