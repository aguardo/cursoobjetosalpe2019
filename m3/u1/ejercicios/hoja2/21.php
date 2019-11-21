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
        $a = 8;
        $b = 6;
        
        if($a > $b){
            
            print "a es mayor que b <br>";
            $b = $a;
            
        }
        
        
        if($a > $b):
            print " A es mayor que B <br>";
        endif;
        
        if($a>$b) {
            print " a es mayor que b <br>";
        }elseif ($a == $b){
            print " a es igual que b <br>";
            
        } else 
            
            print " b es mayor que a";
            
            
            
        if($a > $b):
            print " A es mayor que B <br>";
            print "...";
        elseif ($a == $b):
            print "A es igual que B<br>";
            print "!!!";
        else:
            print "B es mayor que A <br>";
        endif;   
        
        
        
        
        ?>
    </body>
</html>
