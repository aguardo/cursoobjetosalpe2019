<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$numero1 = 0;
$numero2 = 0;


$suma = 0;

$numero1 = $_REQUEST['num1'];
$numero2 = $_REQUEST['num2'];

$suma = $numero1 + $numero2;



echo "La suma de los números es $suma";

