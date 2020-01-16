<?php


spl_autoload_register(function ($nombre_clase) {
    include $nombre_clase . '.php';
});


use clases\Circulo;
use clases\Punto;
use clases\Rectangulo;
use clases\Poligono;
use clases\Base;





if(empty($_REQUEST)){
    $mal = true;
   
} else {
    
    $mal = false;
}

?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
         <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <title></title>
    </head>
    <body>
        <?php
        
        if($mal){
            ?>
            <div class="container">
            <h1 class="text-center "> Ejercicio dibujar formas </h1>
            <form>
                
                <p class="text-left font-weight-bold">Círculo</p>
                
                <p class="text-left">Centro</p>
                
                <div class="form-row">
                    <div class="form-group col-md-2">
                      <label for="CinputX">Coordenada X</label>
                      <input type="text" class="form-control" id="CinputX" placeholder="X" name="circle-x">
                    </div>
                    <div class="form-group col-md-2">
                      <label for="CinputY">Coordenada Y</label>
                      <input type="text" class="form-control" id="CinputY" placeholder="Y" name="circle-y">
                    </div>
                </div>
                 
                <div class="form-group ">
                      <label for="Cradio">Radio</label>
                      <input type="number" class="form-control col-md-2" id="Cradio" placeholder="Radio" name="circle-radio">
                </div>
                   
            
                <p class="text-left font-weight-bold">Rectángulo</p>
                
                <p class="text-left">P1</p>
                
                <div class="form-row">
                    <div class="form-group col-md-2">
                      <label for="RP1X">Coordenada X</label>
                      <input type="numer" class="form-control" id="RP1X" placeholder="P1 X" name="r-p1-x">
                    </div>
                    <div class="form-group col-md-2">
                      <label for="RP1Y">Coordenada Y</label>
                      <input type="number" class="form-control" id="RP1Y" placeholder="P1 Y" name="r-p1-y">
                    </div>
                </div>
                
                <p class="text-left">P2</p>
                
                <div class="form-row">
                    <div class="form-group col-md-2">
                      <label for="RP2X">Coordenada X</label>
                      <input type="number" class="form-control" id="RP2X" placeholder="P2 X" name="r-p2-x">
                    </div>
                    <div class="form-group col-md-2">
                      <label for="RP2Y">Coordenada Y</label>
                      <input type="number" class="form-control" id="RP2Y" placeholder="P2 Y" name="r-p2-y">
                    </div>
                </div>
                
                <div class="form-group">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="gridCheck" name="r-redondeado">
                      <label class="form-check-label" for="gridCheck">
                        Redondeado
                      </label>
                    </div>
                </div>
                
                
                <p class="text-left font-weight-bold">Polígono</p>
                <div class="form-group ">
                      <label for="Poligono">Puntos</label>
                      <input type="text" class="form-control col-md-4" id="Poligono" placeholder="Puntos Polígono" name="poligono">
                </div>
                
                
                <p class="text-left font-weight-bold">Colores</p>
                
                <div class="form-row">
                    <div class="form-group col-md-4">
                      <label for="Color">Color</label>
                      <input type="text" class="form-control" id="Color" placeholder="Color" name="color">
                    </div>
                    <div class="form-group col-md-4">
                      <label for="Fondo">Fondo</label>
                      <input type="text" class="form-control" id="Fondo" placeholder="Fondo" name="fondo">
                    </div>
                </div>
                
                
                

                <div class="form-group ">
                  <div class="col-sm-10 text-center">
                    <button type="submit" class="btn btn-primary">Dibujar</button>
                  </div>
                </div>
              </form>
            
            
            
        </div>    
        
        <?php
        }else{
                                  
            if(!empty($_REQUEST["circle-x"])){
                
                $circulo = new Circulo([
                    "centro" => new Punto([
                        "x" => $_REQUEST["circle-x"],
                        "y" => $_REQUEST["circle-y"],
                    ]),
                                       
                    "radio" => $_REQUEST["circle-radio"],
                    
                    "color" => !empty($_REQUEST["color"]) ? $_REQUEST["color"]: "black",
                    
                    "fondo" => !empty($_REQUEST["fondo"]) ? $_REQUEST["fondo"]: "white",
                ]);
                
                
                echo $circulo->render();
                
                //var_dump($circulo);
                
                
            }
            
            if(!empty($_REQUEST["r-p1-x"])){
                
                $rectangulo = new Rectangulo([
                    "p1" => new Punto([
                        "x" => $_REQUEST["r-p1-x"],
                        "y" => $_REQUEST["r-p1-y"],
                    ]),
                    
                    "p2" => new Punto([
                        "x" => $_REQUEST["r-p2-x"],
                        "y" => $_REQUEST["r-p2-y"],
                    ]),
                    
                    "color" => !empty($_REQUEST["color"]) ? $_REQUEST["color"]: "black",
                    
                    "fondo" => !empty($_REQUEST["fondo"]) ? $_REQUEST["fondo"]: "white",
                                                         
                ]);
                
                //var_dump($rectangulo);           
                        
                echo $rectangulo->render();
                
                
            }
            
            
            if(!empty($_REQUEST["poligono"])){
                
                $puntos = explode(";",$_REQUEST["poligono"]);
                
                
                
                foreach($puntos as $punto){
                    
                    $coordenadas = explode(",",$punto);
                    
                    $vertices[]= new Punto([
                        "x" => $coordenadas[0],
                        "y" => $coordenadas[1]
                        
                    ]);          
                    
                }
                
                    
                $poligono = new Poligono([
                    
                    "puntos" => $vertices,
                    
                    
                    "color" => !empty($_REQUEST["color"]) ? $_REQUEST["color"]: "black",
                    
                    "fondo" => !empty($_REQUEST["fondo"]) ? $_REQUEST["fondo"]: "white",
                                 
                    ]);
                
                
                
                echo $poligono->render();
                          
            }
            
            
            
            
            
            
            
        
        }
        
        ?>
        
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>    
    </body>
</html>
