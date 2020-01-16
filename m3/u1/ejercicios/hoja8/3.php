<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Usuario {
    
    var $nombre ="defecto";
    private $edad;
    protected $telefono;
    private $apellidos = "defecto";
    private $nombreCompleto;
    
    public function getNombreCompleto() {
        return $this->nombreCompleto;
    }

    public function getApellidos() {
        return $this->apellidos;
    }

    public function setApellidos($apellidos) {
        $this->apellidos = $apellidos;
        $this->concatenar();
    }

    
    public function getNombre() {
        return $this->nombre;
    }

    public function getEdad() {
        return $this->edad;
    }

    public function getTelefono() {
        return $this->telefono;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
        $this->concatenar();
    }

    public function setEdad($edad) {
        $this->edad = $edad;
    }

    public function setTelefono($telefono) {
        $this->telefono = $telefono;
    }
    
    private function concatenar(){
        $this -> nombreCompleto = $this -> nombre . " " . $this->apellidos;        
    }


}

$persona = new Usuario();
echo $persona->nombre;
$persona -> setEdad(51);
$persona -> setTelefono("232323");
$persona->setApellidos("vazquez rodriguez");
var_dump($persona);
$persona->nombre = "Ramon";
var_dump($persona);
$persona->setNombre("Ramon");
var_dump($persona);

