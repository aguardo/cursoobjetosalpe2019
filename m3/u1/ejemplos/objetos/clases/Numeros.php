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
class Numeros extends Vector{
    
    protected $media;
    
    public function setModa(){
        
       $frecuencia = array_count_values($this->valores);
       arsort($frecuencia);
       
       
       $repeticiones = $frecuencia[array_keys($frecuencia)[0]]; // veces que se repite el valor que más se repite (moda)
       
       // se comprueba si hay más de un valor que se repite el mismo número de veces que el más repetido
       
       foreach($frecuencia as $indice => $valor){
          if($valor == $repeticiones){
              $moda[] = $indice;
                            
          }else {
             break;
          }
           
       }
       
       $this->moda = $moda;
       return $this;
       
    }
    
    public function setMedia(){
        
       $this->media = array_sum($this->valores)/count($this->valores);
       
       return $this;
       
    }
    
    public function setValores($valores) {
        parent::setValores($valores);
        $this->setModa();
        $this->setMedia();
        
    }


    public function __construct($valores = array()) {
        parent::__construct($valores);
        $this->setModa();
        $this->setMedia();
    }    
    
}
