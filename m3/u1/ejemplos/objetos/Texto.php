<?php

class Texto {
    private $cadena;
    private $numeroVocales;
    
    function __construct($cadena="") {
        $this->setCadena($cadena);
    }
        
    public function longitud(){
        return mb_strlen($this->cadena);
    }
    
    public function getCadena() {
        return "la cadena es ". $this->cadena;
    }

    public function setCadena($cadena) {
        $this->cadena = $cadena;
        $this->numeroVocales = $this -> vocales();
        return $this;
    }
    
    private function vocales(){
    
        $vocales = ["a","e","i","o","u"];

        $texto = strtolower($this->getCadena());

        $n_vocales = 0;

        for($c=0; $c<strlen($texto); $c++){

            if(in_array($texto[$c],$vocales)){
                $n_vocales++;
            }

        }

        return $n_vocales;

    }
    public function getNumeroVocales() {
        return $this->numeroVocales;
    }

    public function setNumeroVocales($numeroVocales) {
        $this->numeroVocales = $numeroVocales;
        return $this;
    }



}

