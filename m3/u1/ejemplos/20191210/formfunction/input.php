<?php

if(empty($_REQUEST)){
    $mal = true;
   
} else {
    
    $mal = false;
}


function inputtext($array){
    
    $salida = "";
    
    foreach ($array as $element){
        
        $salida .= '<label for="'.$element['id'].'">'.$element['label'] .' </label>';
        $salida .= '<input type="text" name="'.$element['name'].'" id="'.$element['id'].'" >';
        $salida .= '<br>';
    }
    
    return $salida;
    
}


function inputcheck($array){
    
    $salida = "";
    
    foreach ($array as $element){
        
        $salida .= '<label for="'.$element['id'].'">'.$element['label'] .' </label>';
        $salida .= '<input type="checkbox" name="'.$element['name'].'" id="'.$element['id'].'" >';
        $salida .= '<br>';
            
       
    }
    
    return $salida;
    
}    
 
function inputselect($array){
    
    $salida = '<select name="seloptions">';
    
    foreach ($array as $element){
        
        $salida .= '<option value="'.$element['value'].'">'.$element['label'] .' </label>';
        $salida .= '<br>';
            
       
    }
    
    
    $salida .= "</select><br>";
    
    
    return $salida;
    
    
    
    
}

function inputradio($array){
    
    $salida = "";
    
    foreach ($array as $element){
        
        $salida .= '<label for="'.$element['id'].'">'.$element['label'] .' </label>';
        $salida .= '<input type="radio" name="'.$element['name'].'" id="'.$element['id'].'" >';
        $salida .= '<br>';
            
       
    }
    
    return $salida;
    
    
    
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
        
        if($mal){
            ?>
            <form name ="f">
                
                <?php
                
                echo inputtext([ [ "name" => "text1",
                              "id"  => "textid1",
                              "label" => "Texto 1" 
                              ],
                    
                            [ "name" => "text2",
                              "id"  => "textid2",
                              "label" => "Texto 2" 
                              ],
                    
                    
                    
                    ]);
                 
                echo inputcheck([ [ "name" => "check1",
                              "id"  => "checkid1",
                              "label" => "Check 1" 
                              ],
                    
                            [ "name" => "check2",
                              "id"  => "checkid2",
                              "label" => "Check 2" 
                              ],
                    
                    
                    
                    ]); 
                        
                echo inputselect([ 
                    
                            [ "value"  => "Option_1",
                              "label" => "Option 1" 
                              ],
                    
                            [ "value"  => "Option_2",
                              "label" => "Option 2" 
                              ],
                    
                    
                    
                ]);  
                        
                        
                echo inputradio([ [ "name" => "radio1",
                              "id"  => "radio1",
                              "label" => "Radio 1" 
                              ],
                    
                            [ "name" => "radio2",
                              "id"  => "radio2",
                              "label" => "Radio 2" 
                              ],
                    
                    
                    
                    ]);  
                
                ?>
                
               <input type="submit" value="Submit"> 
            </form>   
        
        <?php
        }else{
            var_dump($_REQUEST);
        
        }
        
        ?>
    </body>
</html>

