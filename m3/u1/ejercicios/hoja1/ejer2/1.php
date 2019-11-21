<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$text1 = '';
$text2 = '';
$text3 = '';
$text4 = '';


$texto1 = $_REQUEST['text1'];
$texto2 = $_REQUEST['text2'];
$texto3 = $_REQUEST['text3'];
$texto4 = $_REQUEST['text4'];



echo "<div>";
echo "El texto mostrado en primera posición es $texto1";
echo "</div>";
echo "<div>";
echo "El texto mostrado en segunda posición es $texto2";
echo "</div>";
echo "<div>";
echo "El texto mostrado en tercera posición es $texto3";
echo "</div>";
echo "<div>";
echo "El texto mostrado en cuarta posición es $texto4";
echo "</div>";

