<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace ejercicio1;

/**
 * Description of Estudiante
 *
 * @author Agus
 */
class Estudiante extends Persona{
   
    private $carrera;
    public $notas;
   
    
    public function getCarrera() {
        return $this->carrera;
    }

    public function setCarrera(string $carrera) {
        $this->carrera = $carrera;
        return $this;
    }


    public function getNotas() {
        return join(",",$this->notas);
    }

    public function setNotas(array $notas) {
        
        foreach($notas as $v){
            
            $this->notas[] = $v;
        }
        
        //array_push($this->notas,$notas) ;
        return $this;
    }
    
    public function __toString(){
        
        return "Soy un estudiante";
        
   }
   
   public function __construct($nombre="", $edad=0, array $notas=[], string $carrera="") {
         parent::__construct($nombre, $edad);
         
         $this->setCarrera($carrera);
         $this->setNotas($notas);
         
    }
    
    /*
    public function __construct($argumentos=[]){
        parent::__construct($argumentos["Nombre"], argumentos["Edad"]);
        
        foreach()
        call_user_func([$this,set."$argumentos"],$argumentos[])
        
        
        
    }
   */

}
