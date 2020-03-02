<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace clases;

/**
 * Description of Circulos
 *
 * @author Agus
 */
class Circulos {
   
    private $r;
    
    
    public function __construct($num=3) {
        
        for($c=0;$c<$num; $c++){
            $this->setR(random_int(50, 150));      
        }
             
    }
    
    public function setR($r) {
        $this->r []= $r;
        return $this;
    }
    
    
    public function getR() {
        return $this->r;
    }

        
    
    
    public function html(){
        
        $cY = max($this->getR());
        
        $acum_x= 0;
        
        $str= '<svg height="350" width="900">';
                
        
        foreach($this->getR() as $valor){
                    
           $str .= '<circle cx="'.($acum_x + $valor).'" cy="'.$cY.'" r="'.$valor.'" stroke="black" stroke-width="3" fill="rgb('.random_int(1,255).','.random_int(1,255).','.random_int(1,255).')" />';
            
           $acum_x += 2*$valor; 
            
        }
                
                
                
               
                
        $str .=  "<svg>"  ; 
        
        return $str;
    }
    
    
    
}
