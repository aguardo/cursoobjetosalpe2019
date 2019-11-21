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

                Introduce un número <input required type="number" name="num1" value="" />
                   
                <input type="submit" value="Enviar" name = "boton"/>


            </form>
            
        <?php    
            
            
        }else {
            
            
           $c = 0;
                       
           $c = $_REQUEST['num1'];
           
           do{
               
               echo "<div>$c</div>";
               $c = $c -2;
               
               
           }while($c>10);
            
            
          
        
            
        }
            
            
        
        
        
        ?>
    </body>
</html>
