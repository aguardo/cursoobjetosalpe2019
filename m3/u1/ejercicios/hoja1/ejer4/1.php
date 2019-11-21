<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$char1 = '';


$charac1 = $_REQUEST['char1'];

if($charac1 == "a"){
    
    echo "<div>";
    echo "El carácter introducido es a";
    echo "</div>";
    
}else if ($charac1 == "b"){
    
    echo "<div>";
    echo "El carácter introducido es b";
    echo "</div>";    
    
}else {
    
    echo "<div>";
    echo "El carácter introducido es distinto a o b";
    echo "</div>";    
    
    
    
}
