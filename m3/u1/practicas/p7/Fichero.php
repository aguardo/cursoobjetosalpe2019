<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Fichero
 *
 * @author Agus
 */
class Fichero {
    //put your code here
    public $nombre;
    private $modo;
    private $puntero;
    
    public function __construct($nombre,$modo="r+") {
        $this->setNombre($nombre,$modo);
    }
    
    public function getNombre(){
        return $this->nombre;        
        
    }
    
    public function setNombre($nombre,$modo="r+"){
        $this->nombre = $nombre;
        $this->modo = $modo;
        $this->abrirFichero();    
        
    }
    
    public function getPuntero() {
        return $this->puntero;
    }

    public function setPuntero($puntero) {
        $this->puntero = $puntero;
        return $this;
    }

    public function abrirFichero(){
        
        $this->setPuntero(fopen($this->nombre,$this->modo));
       
    }
    
    public function cerrarFichero(){
        fclose($this->getPuntero());
    }
    
    public function escribirCadena($cadena){
        fwrite($this->puntero,$cadena);        
        
    }
    
    public function escribir($cadena){
        
        file_put_contents($this->getNombre(),$cadena);
        
    }
    
    public function escribirLinea(){
        
        
        
        
        
    }
    
}
