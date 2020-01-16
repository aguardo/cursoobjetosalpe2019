<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

spl_autoload_register(function ($nombre_clase) {
    include $nombre_clase . '.php';
});

use clases\Vector;
use clases\Numeros;

$a = new Vector([1,1,1,2,2,3]);

$a->imprimirValores();

echo "El valor máximo es: " . $a->getMaximo();
echo "La moda es: " . $a->getModa();

echo "<div> Segundo objeto </div>";

$b = new Numeros([1,2,2, 2, 3,3,3,5,8,9,9,9]);
echo "La moda es: ";

var_dump($b -> getModa()); 



echo "<div> Tercer objeto </div>";

$b ->setValores([6,6,8,9,9,9,10,10,10,12]);


echo "La moda es: ";

var_dump($b -> getModa()); 

echo "El valor máximo es: " . $b ->getMaximo();

