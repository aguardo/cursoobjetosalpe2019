<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$numero1 = 0;
$numero2 = 0;


$suma = 0;
$resta = 0;
$producto = 0;
$division = 0;

$numero1 = $_REQUEST['num1'];
$numero2 = $_REQUEST['num2'];

$suma = $numero1 + $numero2;
$resta = $numero1 - $numero2;
$producto = $numero1 * $numero2;
$division = $numero1 / $numero2;

echo "La suma es $suma";
echo "La resta es $resta";
echo "El producto es $producto";
echo "La division es $division";




