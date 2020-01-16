<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace ejercicio3;
/**
 * Description of Numeros
 *
 * @author Agus
 */
class Numeros {
    private $valor;
    private $media;
    private $moda;
    private $mediana;
    private $desviacion_tipica;
    
    public function __construct($valor) {
        $this->setValor($valor);
        $this->setMedia();
        $this->setModa();
        $this->setMediana();
        $this->setDesviacion_tipica();
    }

    
    public function getValor() {
        return $this->valor;
    }

    public function setValor($valor) {
        $this->valor = $valor;
        return $this;
    }

        
    public function setModa(){
        
       $frecuencia = array_count_values($this->getValor());
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
    
    
    public function getModa(){
        
        return $this->moda;
        
        
    }
    
    public function setMedia(){
        
       $this->media = array_sum($this->getValor())/count($this->getValor());
       
       return $this;
       
    }
    
    public function getMedia(){
        
        return $this->media;
    }
    
    public function setMediana(){
        
        $valores_aux = $this->getValor();
        
        sort($valores_aux);
        
        $n_valores = count($valores_aux);
        
        if ( $n_valores%2 == 0) {
            
            $this->mediana = ($valores_aux[($n_valores/2)-1]+$valores_aux[$n_valores/2])/2;
            
        }else{
            
            
            $this->mediana = $valores_aux[floor($n_valores-1)];
            
        }
    }
    
    public function getDesviacion_tipica(){
        
        return $this->desviacion_tipica;
        
    }
    
    public function setDesviacion_tipica(){
        
        $media = $this->getMedia();
        
        $varianza = 0;
        
        foreach($this->getValor() as $valor){
            
            $varianza += pow($valor-$media,2);
            
        }
        
        $this->desviacion_tipica = sqrt($varianza / count($this->getValor()));
        
        
    }
    
    
}
