<?php
namespace controladores;

class siteController extends Controller{
    
    private $miPie;
    private $miMenu;
        
    public function __construct() {
        parent::__construct();
        $this->miPie="Práctica 6";
        $this->miMenu=[
        "Hospitales"=>$this->crearRuta(["accion"=>"hospitales"]),
        "Restaurantes"=>$this->crearRuta(["accion"=>"restaurantes"]),
        "Autobuses"=>$this->crearRuta(["accion"=>"autobuses"]),
        "Mapa"=>$this->crearRuta(["accion"=>"mapa"])
            
        ];
    }

    public function hospitalesAccion($objeto){
      $this->render([
          "vista"=>"hospitales",
          "pie"=>$this->miPie,
          "menu"=>(new \clases\Menu($this->miMenu,"Hospitales"))->html()
    ]);
    }
    
    public function restaurantesAccion($objeto){
      $this->render([
          "vista"=>"restaurantes",
          "pie"=>$this->miPie,
          "menu"=>(new \clases\Menu($this->miMenu,"Restaurantes"))->html()
    ]);
    }
        
    public function autobusesAccion($objeto){
      $this->render([
          "vista"=>"autobuses",
          "pie"=>$this->miPie,
          "menu"=>(new \clases\Menu($this->miMenu,"Autobuses"))->html()
    ]);
    }
    
    public function mapaAccion($objeto){
      $this->render([
          "vista"=>"mapa",
          "pie"=>$this->miPie,
          "menu"=>(new \clases\Menu($this->miMenu,"Mapa"))->html()
    ]);
    }

}
