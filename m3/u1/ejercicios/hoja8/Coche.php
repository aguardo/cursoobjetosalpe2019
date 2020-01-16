<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Coche
 *
 * @author Agus
 */
class Coche {
    var $color;
    var $numero_puertas;
    var $marca;
    var $gasolina = 0;
    
    function llenarTanque($gasolina_nueva){
        
        $this->gasolina = $this->gasolina + $gasolina_nueva;
        
    }
    
    function acelerar(){
        if($this->gasolina > 0){
            $this->gasolina = $this ->gasolina -1;
            return 'Gasolina restante: ' . $this -> gasolina;
        }
    }
    
    
}
