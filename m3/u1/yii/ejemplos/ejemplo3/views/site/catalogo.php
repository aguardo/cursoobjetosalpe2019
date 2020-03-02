<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

    use yii\grid\GridView;
    
    echo GridView::widget([
        'dataProvider' => $datos,
        'columns' => [
            'id',
            'nombre',
            'descripcion'            
        ],
        
        
        
    ]);
    
    ?>