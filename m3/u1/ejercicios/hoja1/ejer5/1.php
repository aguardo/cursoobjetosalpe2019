<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$numero1 = 0;


$numero1 = $_REQUEST['num1'];

if($numero1%2 == 0){
    
    echo "<div>";
    echo "El número introducido es par";
    echo "</div>";
    
}else{
    
     echo "<div>";
    echo "El número introducido es impar";
    echo "</div>";
    
    
    
}
