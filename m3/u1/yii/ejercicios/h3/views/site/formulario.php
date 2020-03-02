<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

use yii\helpers\Html;

echo Html::beginForm(['site/formulario'], 'post');
echo Html::beginTag('div',['class' => 'form-group']);
echo Html::label('Nombre','iusario',['class' => 'control-label']);
echo Html::input('text','usuario','',['id'=>'iusuario', 'class'=>'form-control']);
echo Html::endTag('div');
echo Html::submitButton('Enviar',['class'=> 'btn btn-info']);
echo Html::endForm();



