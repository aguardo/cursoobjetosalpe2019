<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$hora = 0;
$minutos = 0;
$segundos = 0;

$hora = $_REQUEST['num1'];
$minutos = $_REQUEST['num2'];
$segundos = $_REQUEST['num3'];

$segundos +=1;

echo "La hora es: ";
echo "$hora:";
echo "$minutos:";
echo "$segundos";


