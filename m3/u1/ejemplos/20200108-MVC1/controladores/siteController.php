<?php
namespace controladores;

class siteController extends Controller{
    
    private $miPie;
    private $miMenu;

    
    
    public function __construct(){
        parent::__construct();
        $this->miMenu = [
            "Inicio"=>$this->crearRuta(["accion"=>"index"]),
            "Ejercicio1"=>$this->crearRuta(["accion"=>"ejercicio1"]),
            "Ejercicio2"=>$this->crearRuta(["accion"=>"ejercicio2"]),
            "Ejercicio3"=>$this->crearRuta(["accion"=>"ejercicio3"]),
        ];
        
        $this->miPie = "Ejemplo de clase";
        
        
    }
    
    public function indexAccion($objeto){
      $this->render([
          "vista"=>"index",
          "pie"=>$this->miPie,
          "menu"=>(new \clases\Menu($this->miMenu,"Inicio"))->html()
    ]);
    }
    
    
    public function ejercicio1Accion($objeto){
      $this->render([
          "vista"=>"index",
          "pie"=>$this->miPie,
          "menu"=>(new \clases\Menu($this->miMenu,"Inicio"))->html()
    ]);
    }
    
    
    /*
    public function ListarAccion($objeto){
      $this->render([
          "vista"=>"listar",
          "pie"=>"probando",
          "contenido"=>empty($objeto->getValores()) ? ["no hay nada"] : $objeto->getValores(),
          "menu"=>(new \clases\Menu([
            "Inicio"=>$this->crearRuta(["accion"=>"index"]),
            "Listado 1"=>$this->crearRuta(["accion"=>"listar"]),
            "Entrada"=>$this->crearRuta(["accion"=>"entrada"])
        ],"Listado 1"))->html()
    ]);
    }
    
    public function entradaAccion($objeto){
      $this->render([
          "vista"=>"formulario",
          "pie"=>"probando mandar datos",
          "menu"=>(new \clases\Menu([
            "Inicio"=>$this->crearRuta(["accion"=>"index"]),
            "Listado 1"=>$this->crearRuta(["accion"=>"listar"]),
            "Entrada"=>$this->crearRuta(["accion"=>"entrada"])
        ],"Entrada"))->html()
    ]);
    }
    
    public function listado2Accion($objeto){
      $this->render([
          "vista"=>"mostrar",
          "contenido"=>"Esto es un ejemplo de clase",
          "pie"=>"Añadido en clase",
          "menu"=>(new \clases\Menu([
            "Inicio"=>$this->crearRuta(["accion"=>"index"]),
            "Listado 1"=>$this->crearRuta(["accion"=>"listar"]),
            "Entrada"=>$this->crearRuta(["accion"=>"entrada"]),
            "Listado 2"=>$this->crearRuta(["accion"=>"listado2"])
        ],"Listado 2"))->html()
    ]);
    }
  */
}
