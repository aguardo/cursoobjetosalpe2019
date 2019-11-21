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
        $op1=0;
        $op2=0;
        
        $op1 = $_REQUEST['num1'];
        $op2 = $_REQUEST['num2'];
        $x = $_REQUEST['num3'];
        
        echo "Valor de op1 es $op1";
        echo "Valor de op2 es $op2";
        echo "Valor de x es $x";
        
        if($op1 > $op2){
            
            $op2 = 0;            
        
        }else{
            
            $op1 = 0;
            
        }
        
        while($op1>$op2){
            
            $op2 = $op2 + 1;
            
        }
        
        do {
            
            $op1 = $op1 + 1;
            
        }while($op1 > $op2 );
        
        for($i=1; $i < 10; $i++){
            
            $r = $i *5;
            
            echo "<br>";
            echo "Valor de i $i,";
            echo "Valor de r $r";
            echo "<br>";
        }
        
        switch($x){
            
            case 1:
                $op1 = 0;
                break;
            case 2:
                $op2 = 0;
                break;
            case 3:
                echo "op1 = $op1";
                break;
            default:
                echo "op2 = $op2";
            
                
        }
        
        
        ?>
    </body>
</html>
