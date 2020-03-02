<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace clases;

/**
 * Description of Dado
 *
 * @author Agus
 */
class Dado {
    //put your code here
    
    private $tirada;
    
    public function __construct() {
        $this->tirada = random_int(1, 6);
    }
    
    public function getTirada() {
        return $this->tirada;
    }


    
}
