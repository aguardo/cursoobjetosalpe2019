<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$radio = 0;

$longitud = 0;
$area = 0;
$volumen = 0;

$radio = $_REQUEST['num1'];


$longitud = 2 * 3.1416 * $radio;
$area = 4 * 3.1416 * $radio * $radio;
$volumen = 4 /3 * 3.1416 * $radio * $radio * $radio;

echo "La longitud es $longitud";
echo "El area es $area";
echo "El volumen es $volumen";




