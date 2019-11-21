<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

 function encontrar_letra($palabra, $letra){
     
     $posiciones = [];
     
     for($i=0;$i<strlen($palabra);$i++){
         
         if($palabra[$i] == $letra){
             
             $posiciones[] = $i;
         }
         
     }
     
     return $posiciones;
     
     
 }