 <?php
      
$caso = "default"; 
 
if(empty($_REQUEST)){
    
    $caso = "vacio";
    
}elseif(isset($_REQUEST['times'])){
        
    $caso = "formulario";
    
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
        
        if($caso == "formulario"){
            
            $entradas = $_REQUEST['times'];
            
        ?>
            <form>

                
            <?php      
                
            for($c=1;$c<=$entradas; $c++){
                
               
            ?>      
                
                
                
                 Introduce un número <input required type="number" name="num[]" value="" />
                
                   
                
                
                
                
            <?php         
                
            }
                
            ?>        
               
            <input type="submit" value="Enviar" name = "boton"/>

            </form>
            
        <?php    
            
        
        }elseif($caso == "vacio"){
            
            
        ?>    
            <form>

                Introduce un número <input required type="number" name="times" value="" />
                   
                <input type="submit" value="Enviar" name = "boton"/>


            </form>     
                      
        
        <?php
        
        
        
        }else {
            
            $suma = 0;
            $total= 0;
            
           foreach($_REQUEST['num'] as $valor){
               
               $suma += $valor;
               $total++;
               
           }
           
           $media = $suma/$total ;
            
           echo "Nota media = $media";
          
        
            
        }
            
            
        
        
        
        ?>
    </body>
</html>
