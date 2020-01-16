<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace ejercicio1;

/**
 * Description of Profesor
 *
 * @author Agus
 */
class Profesor extends Persona{
   private $materia;
   private $sueldo=[];

   public function getMateria() {
       return $this->materia;
   }

   public function getSueldo() {
       return $this->sueldo;
   }

   public function setMateria(Materias $materia) {
       $this->materia = $materia;
       return $this;
   }

   public function setSueldo(int $mes, float $sueldo) {
       $this->sueldo[$mes] = $sueldo;
       return $this;
   }

   public function __construct($nombre, $edad, Materias $materia, $mes=1, $sueldo=0) {
       parent::__construct($nombre, $edad);
       $this->setMateria($materia);
       $this->sueldo = array_fill(0,12,0);
       $this->setSueldo($mes, $sueldo);
      
   }
}
