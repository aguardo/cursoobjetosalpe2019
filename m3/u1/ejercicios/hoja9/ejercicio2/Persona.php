<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace ejercicio2;

/**
 * Description of Persona
 *
 * @author Agus
 */

class Persona {
    private $nombre;
    private $apellidos;
    private $nombreCompleto;
    protected $edad;
    
    function __construct($nombre,$apellidos,$edad) {
        
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->setNombreCompleto();
        $this->edad = $edad;
        
    }
    public function getNombre() {
        return $this->nombre;
    }

    public function getApellidos() {
        return $this->apellidos;
    }

    public function getNombreCompleto() {
        return $this->nombreCompleto;
    }

    public function getEdad() {
        return $this->edad;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
        return $this;
    }

    public function setApellidos($apellidos) {
        $this->apellidos = $apellidos;
        return $this;
    }

    public function setNombreCompleto() {
        $this->nombreCompleto = $this->getNombre() . " " . $this->getApellidos();
        return $this;
    }

    public function setEdad($edad) {
        $this->edad = $edad;
        return $this;
    }


}
