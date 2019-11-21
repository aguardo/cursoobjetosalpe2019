<?php
    session_start();
    
        $palabras = array(
            "calamar","patata","arroz","pan","agua","helecho","butifarra","chorizo","ensalada","cocido"           
        );
    
    require_once('elegir_palabra.php'); 
    require_once('dibujar_bloques.php');   
    require_once('escribir_formulario.php');
    require_once('mostrar_intentos.php');
    require_once('acertar_palabra.php');
    require_once('fin_ahorcado.php')
    

    
    
    
    
?>   
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
       
        
        <?php
        
            if(!isset($_SESSION["palabra"]))
                {
                    $_SESSION["palabra"] = elegir_palabra($palabras);
                }
            
            
            $posiciones = [];
            
            if($_REQUEST){     
                
                if(!isset($_SESSION["intentos"]))
                   {
                        $_SESSION["intentos"] = [ $_REQUEST['letra'] ];
                }else{

                        $_SESSION["intentos"][] = $_REQUEST['letra'];

                }
                
                        
                echo dibujar_bloques($_SESSION["palabra"],$_SESSION["intentos"]);
               
            }else{
                
                echo dibujar_bloques($_SESSION["palabra"],[]);
                
            }
                
           

            echo escribir_formulario();
            
            
            if(isset($_SESSION["intentos"])){
                
                echo mostrar_intentos($_SESSION["intentos"]);
                
                if(acertar_palabra($_SESSION["palabra"],$_SESSION["intentos"])){
                    
                    echo fin_ahorcado();
                    session_destroy();
                }
                
            }
              
            
            
            
            
            
             
        ?>
    </body>
</html>
