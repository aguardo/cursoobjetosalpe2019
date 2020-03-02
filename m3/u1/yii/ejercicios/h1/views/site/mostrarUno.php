<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

use yii\widgets\DetailView;

?>


<?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'texto',       
        ],  
    
]) 

        ?>


