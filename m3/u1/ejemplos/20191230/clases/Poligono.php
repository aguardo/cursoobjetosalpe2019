<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace clases;

/**
 * Description of Poligono
 *
 * @author Agus
 */
class Poligono extends Base{
    //put your code here
    
    private $puntos;
    
    public function getPuntos() {
        return $this->puntos;
    }

    public function setPuntos($puntos) {
        $this->puntos = $puntos;
        return $this;
    }

    public function __construct($argumentos) {
        parent::__construct($argumentos);
        
        
        $opcionales = [
            new Punto([ "x" => 200, "y" => 100]),
            new Punto([ "x" => 250,"y" => 190]),
            new Punto([ "x" => 160,"y" => 210]),
            
        ];
        
        if(empty($argumentos["puntos"])) {
            
            $this->setPuntos($opcionales); 
            
        }else{
            
            $this->setPuntos($argumentos["puntos"]); 
            
            
        }
       
    }
    
    public function render(){
        
        $string_points="";
        
        foreach($this->getPuntos() as $punto){
            
            $string_points .= $punto->getX(). ',' . $punto->getY(). ' ';
        }
        
        
        $string =  '<svg>
                    <polygon points="'. $string_points .'" stroke="'. $this->getColor().'" stroke-width="3" fill="'. $this->getFondo().'" />
                    </svg>'; 
        
        return $string;
    }

}
