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
            $s;
            $j;
            $k;
            $i;
            $a = 2.345;
            
            $s = 0;
            for($j = 1; $j<4; $j++){
                
                echo $j;
                if($j % 2 == 0){
                    $s +=$j;
                    
                }
            }
            printf("<br>%d",$j);
            var_dump($s);
            $i = 10;
            while($i >0){
                
                $i = $i -1;
            }
            
            echo $i;
            echo gettype($i) . "<br>";
            print_r($i);
            var_dump($a);
            
        ?>
    </body>
</html>
