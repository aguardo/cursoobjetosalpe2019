 <?php
      
if(empty($_REQUEST)){
    
    $caso = true;
    
}else{
    
    $caso = false;
    
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
        <title></title>
    </head>
    <body>
        <?php
        
        if($caso){
            
        ?>
            <form>

                Introduce un número <input required type="number" name="num[]" value="" />
                Introduce un número <input required type="number" name="num[]" value="" />
                Introduce un número <input required type="number" name="num[]" value="" />
                Introduce un número <input required type="number" name="num[]" value="" />
                Introduce un número <input required type="number" name="num[]" value="" />
                Introduce un número <input required type="number" name="num[]" value="" />
                Introduce un número <input required type="number" name="num[]" value="" />
                Introduce un número <input required type="number" name="num[]" value="" />
                Introduce un número <input required type="number" name="num[]" value="" />
                Introduce un número <input required type="number" name="num[]" value="" />
                   
                <input type="submit" value="Enviar" name = "boton"/>


            </form>
            
        <?php    
            
            
        }else {
            
            $suma = 0;
            
           foreach($_REQUEST['num'] as $valor){
               
               $suma += $valor;
               
           }
           
           $media = $suma / 10;
            
           echo "Nota media = $media";
          
        
            
        }
            
            
        
        
        
        ?>
    </body>
</html>
