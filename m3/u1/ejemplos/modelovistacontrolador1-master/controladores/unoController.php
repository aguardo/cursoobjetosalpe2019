<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace controladores;

/**
 * Description of unoController
 *
 * @author Agus
 */
class unoController extends Controller{
    
  public function indexAccion($objeto){
      $this->render([
          "vista"=>"uno",
          "pie"=>"Ejemplo primero de clase",
          "menu"=>(new \clases\Menu([
            "Inicio"=>$this->crearRuta(["accion"=>"index"]),
            "Listado 1"=>$this->crearRuta(["accion"=>"listar"]),
            "Entrada"=>$this->crearRuta(["accion"=>"entrada"]),
            "Listado 2"=>$this->crearRuta(["accion"=>"listado2"]),
            "Hola"=>$this->crearRuta(["accion"=>"hola",
                                      "controlador"=>"uno"]),
            "Adios"=>$this->crearRuta(["accion"=>"adios",
                                       "controlador"=>"uno"]),
            "InicioUno"=>$this->crearRuta(["accion"=>"index",
                                       "controlador"=>"uno"]),
              
                  
        ],"InicioUno"))->html(),
          
    ]);
    }
    
    
    public function holaAccion($objeto){
      echo "Hola Acción";
    }
    
    public function adiosAccion($objeto){
      $this->render([
          "vista"=>"dos",
          "pie"=>"Ejemplo primero de clase",
          "menu"=>(new \clases\Menu([
            "Inicio"=>$this->crearRuta(["accion"=>"index"]),
            "Listado 1"=>$this->crearRuta(["accion"=>"listar"]),
            "Entrada"=>$this->crearRuta(["accion"=>"entrada"]),
            "Listado 2"=>$this->crearRuta(["accion"=>"listado2"])
        ],"Inicio"))->html(),
          "mensaje"=>"Estoy en el controlador uno y la acción adios"
    ]);
    }
    
    
    
}
