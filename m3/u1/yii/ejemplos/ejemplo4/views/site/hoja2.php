<?php

/* @var $this yii\web\View */


use yii\helpers\Html;
use yii\widgets\DetailView;

$this->title = 'Hoja 2';

?>
<div class="site-hoja-2">

    <div>
        
        <?=  Html::img('@web/imgs/'.$img) ?>

    </div>

    
    <h3><?= $model->titulo ?></h3>
    <p><?= $model->texto ?></p>
   
</div>
