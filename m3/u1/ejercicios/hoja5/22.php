<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
function operar($array,$operacion){
  
    switch ($operacion){
        case "suma":
            $resultado = $array[0] + $array[1];
            break;
        case "resta":
            $resultado = $array[0] - $array[1];
            break;
        case "producto":
            $resultado = $array[0] * $array[1];
    }
       
    return $resultado;
}
?>


<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        echo "<div>".operar([40,21],"suma")."</div>";
        echo "<div>".operar([40,21],"resta")."<div>";
        echo "<div>".operar([40,21],"producto")."<div>";
       
                      
        ?>
    </body>
</html>
