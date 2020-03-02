<?php
namespace controladores;

class siteController extends Controller{
    
    private $miMenuElements;
    private $miPie;
    
    public function __construct() {
        parent::__construct();
        $this->miMenuElements = [
            "Inicio"=>$this->crearRuta(["accion"=>"index"]),
            "Ejercicio 1"=>$this->crearRuta(["accion"=>"ejercicio1"]),
            "Ejercicio 2"=>$this->crearRuta(["accion"=>"ejercicio2"]),
            "Ejercicio 3"=>$this->crearRuta(["accion"=>"ejercicio3"]),
            "Ejercicio 4"=>$this->crearRuta(["accion"=>"ejercicio4"]),
            "Ejercicio 5"=>$this->crearRuta(["accion"=>"ejercicio5"]),
            "Ejercicio 6"=>$this->crearRuta(["accion"=>"ejercicio6"]),
            "Ejercicio 7"=>$this->crearRuta(["accion"=>"ejercicio7"]),
        ];
        $this->miPie = "Ejercicio 1 en color";
    }


    public function indexAccion($objeto){
        
        $this->render([
          "vista"=>"index",
          "pie"=>$this->miPie,
          "menu"=>(new \clases\Menu($this->miMenuElements,"Inicio"))->html()
    ]);
    }
    
    public function ejercicio1Accion($objeto){
        
        $num1 = 0;
        $num2 = 0;
        $resultados["suma"] = 0;
        
        
         if(!empty($objeto->getValores())){
             
            $obj = new \clases\Numeros($objeto->getValores());
             
            $num1 = $obj->getNum1();
            $num2 = $obj->getNum2();
            $resultados["suma"] = $obj->getSuma();
          
        }
                
        
      $this->render([
          "vista"=>"ejercicio1",
          "pie"=>$this->miPie,
          "num1"=>$num1,
          "num2"=>$num2,
          "resultados"=>$resultados,
          "menu"=>(new \clases\Menu($this->miMenuElements,"Ejercicio 1"))->html()
    ]);
    }
    
    
    public function ejercicio2Accion($objeto){
        
        $num1 = 0;
        $num2 = 0;
       
        $resultados["suma"]=0;
        $resultados["resta"]=0;
        $resultados["producto"]=0;
        $resultados["resto"]=0;
        $resultados["cociente"]=0;
        
         if(!empty($objeto->getValores())){
             
            $obj = new \clases\Numeros($objeto->getValores());
             
            $num1 = $obj->getNum1();
            $num2 = $obj->getNum2();
            $resultados["suma"] = $obj->getSuma();
            $resultados["resta"]=$obj->getResta();
            $resultados["producto"]=$obj->getProducto();
            $resultados["resto"]=$obj->getResto();
            $resultados["cociente"]=$obj->getCociente();
          
        }
                
        
      $this->render([
          "vista"=>"ejercicio2",
          "pie"=>$this->miPie,
          "num1"=>$num1,
          "num2"=>$num2,
          "resultados"=>$resultados,
          "menu"=>(new \clases\Menu($this->miMenuElements,"Ejercicio 2"))->html()
    ]);
    }
    
    public function ejercicio3Accion($objeto){
        
        $obj = new \clases\Dado();
        
        $this->render([
          "vista"=>"ejercicio3",
          "pie"=>$this->miPie,
          "tirada"=>$obj->getTirada(),
          "menu"=>(new \clases\Menu($this->miMenuElements,"Ejercicio 3"))->html()
    ]);
        
        
        
    }
    
    public function ejercicio4Accion($objeto){
        
        $obj = new \clases\Dado();
                           
        $this->render([
          "vista"=>"ejercicio4",
          "pie"=>$this->miPie,
          "tirada"=>$obj->getTirada(),
          "tiradas"=> isset($_SESSION["tiradas"])? join(",",$_SESSION["tiradas"]): "", 
          "menu"=>(new \clases\Menu($this->miMenuElements,"Ejercicio 4"))->html()
    ]);
        
        $_SESSION["tiradas"][]=$obj->getTirada();
        
    }
    
    public function ejercicio5Accion($objeto){
        
        $obj = new \clases\Dado();        
                           
        $this->render([
          "vista"=>"ejercicio5",
          "pie"=>$this->miPie,
          "tirada"=>$obj->getTirada(),
          "tiradas"=> isset($_SESSION["tiradas"])? join(",",$_SESSION["tiradas"]): "", 
          "menu"=>(new \clases\Menu($this->miMenuElements,"Ejercicio 5"))->html()
    ]);
        
        $_SESSION["tiradas"][]=$obj->getTirada();
        
    }
    

    public function ejercicio6Accion($objeto){
        
        $obj = new \clases\Circulos();  

        
        $this->render([
          "vista"=>"ejercicio6",
          "pie"=>$this->miPie,
          "circulos"=>$obj->html(),  
          "menu"=>(new \clases\Menu($this->miMenuElements,"Ejercicio 6"))->html()
    ]);
        
    
        
    }
    
    
    
    
    
}
