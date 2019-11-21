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
        
        $enlaces = [
            [
                'url' => '1.php',
                'class' => 'caja1',
                'etiqueta' => 'Ejercicio 1',       
            ],
            [
                'url' => '2.php',
                'etiqueta' => 'Ejercicio2'               
            ]
            
            
        ];
          
        ?>
        
        
        <ul>
            <li class = <?=$enlaces[0]['class']?> > <a href = <?= $enlaces[0]['etiqueta']?> > <?= $enlaces[0]['url'] ?> </a>           
            <li> <a href = <?= $enlaces[1]['etiqueta']?> > <?= $enlaces[1]['url'] ?> </a>           
            
        </ul>
        
        
    </body>
</html>
