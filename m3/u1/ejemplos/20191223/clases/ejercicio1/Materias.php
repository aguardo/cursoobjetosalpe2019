<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace ejercicio1;

/**
 * Description of Materias
 *
 * @author Agus
 */
class Materias {
    //put your code here
    
    public $nombre;
    private $horas;
    private $titular;
    
    public function getNombre() {
        return $this->nombre;
    }

    public function getHoras() {
        return $this->horas;
    }

    public function setNombre(string $nombre) {
        $this->nombre = $nombre;
        return $this;
    }

    public function setHoras(int $horas) {
        $this->horas = $horas;
        return $this;
    }
    
    /*
    public function __construct(string $nombre, int $horas, Profesor $titular=null) {
        $this->setNombre($nombre);
        $this->setHoras($horas);
        $this->setTitular($titular);
        
        
    }*/
    
    public function __construct($argumentos=[]) {
        $opcionales = [
            "Nombre" => "",
            "Horas" => 0,
            "Titular" => new Profesor()
        ];
        
        $argumentos = array_merge($opcionales,$argumentos);

        $this->setNombre($argumentos["Nombre"]);
        $this->setHoras($argumentos["Horas"]);
        $this->setTitular($argumentos["Titular"]);
        
        
        
    }
    
    

    public function getTitular() {
        return $this->titular;
    }

    public function setTitular(Profesor $titular) {
        $this->titular = $titular;
        return $this;
    }


}
