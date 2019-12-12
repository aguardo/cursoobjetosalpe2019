<?php

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
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        
        <title></title>
    </head>
    <body>
        <?php
        
        if($mal){
            ?>
        
        <div class="container">
            <h1 class="text-center"> Formulario de inscripción de alumnos </h1>
            <form>
                <div class="form-group row">
                  <label for="nombre" class="col-sm-2 col-form-label">Nombre Completo</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="nombre" name="nombre">
                  </div>
                </div>
                <div class="form-group row">
                    <label for="exampleFormControlTextarea1" class="col-sm-2 col-form-label">Dirección</label>
                    <div class="col-sm-10"> 
                        <textarea class="form-control" id="exampleFormControlTextarea1" name="descripcion"></textarea>
                    </div>    
                </div>
                
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Correo Electrónico</label>
                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="inputEmail3" placeholder="Email" name ="email">
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Contraseña</label>
                    <div class="col-sm-10">
                      <input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="password">
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="confirminputPassword3" class="col-sm-2 col-form-label">Confirmar Contraseña</label>
                    <div class="col-sm-10">
                      <input type="password" class="form-control" id="confirminputPassword3" placeholder="Confirm Password" name="confirmpassword">
                    </div>
                </div>
                
                
                <div class="form-group row">
                    <label for="Dateinput" class="col-sm-2 col-form-label">Fecha de nacimiento</label>
                    <div class="col-sm-10">
                        <input type="date" name="birthday" min="1000-01-01" id="Dateinput"
                           max="3000-12-31" class="form-control">
                    </div class="col-sm-10">
               </div>
                
                <fieldset class="form-group">
                  <div class="row">
                    <legend class="col-form-label col-sm-2 pt-0">Sexo</legend>
                    <div class="col-sm-10">
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="Hombre" checked>
                        <label class="form-check-label" for="gridRadios1">
                          Hombre
                        </label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="Mujer">
                        <label class="form-check-label" for="gridRadios2">
                          Mujer
                        </label>
                      </div>
                      
                    </div>
                  </div>
                </fieldset>
                <div class="form-group row">
                  <div class="col-sm-2">Por favor elige los temas de tus intereses</div>
                  <div class="col-sm-2">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="gridCheck1" name="hobbies[]" value="1">
                      <label class="form-check-label" for="gridCheck1">
                        Ficción
                      </label>
                    </div>
                      <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="gridCheck2" name="hobbies[]" value="2">
                      <label class="form-check-label" for="gridCheck2">
                        Acción
                      </label>
                    </div>
                      <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="gridCheck3" name="hobbies[]" value="3">
                      <label class="form-check-label" for="gridCheck3">
                        Suspense
                      </label>
                    </div>
                  </div>
                  <div class="col-sm-8">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="gridCheck4" name="hobbies[]" value="4">
                      <label class="form-check-label" for="gridCheck1">
                       Terror
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="gridCheck5" name="hobbies[]" value="5">
                      <label class="form-check-label" for="gridCheck1">
                        Comedia
                      </label>
                   
                    </div>
                      
                  </div>
                 
                   
                </div>
                <div class="form-group row">
                  <div class="col-sm-10 text-center">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                  </div>
                </div>
              </form>
            
            
        </div>    
        
        <?php
        }else{
            var_dump($_REQUEST);
            
        }
        
        ?>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
    
</html>
