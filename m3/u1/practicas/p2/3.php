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
        $numero1 =10;
        $numero2 =3;
        ?>
        
        <div>
            <p> Los números utilizados son:</p>
            <p> <?php echo $numero1; ?> </p>
            <p> <?php echo $numero2; ?> </p>
            
            
        </div>
        
        <div>
            <table>
                <tr>
                    <td>Suma</td>
                    <td><?php echo $numero1 + $numero2 ?></td>
                </tr>
                <tr>
                    <td>Resta</td>
                    <td><?php echo $numero1 - $numero2 ?></td>
                </tr>
                <tr>
                    <td>Procucto</td>
                    <td><?php echo $numero1 * $numero2 ?></td>
                </tr>
                <tr>
                    <td>Cociente</td>
                    <td><?php echo $numero1 / $numero2 ?></td>
                </tr>
                <tr>
                    <td>Resto</td>
                    <td><?php echo $numero1 % $numero2 ?></td>
                </tr>
            </table>      
        </div>
        
        
    </body>
</html>
