<?php
use yii\helpers\Html;
use yii\helpers\HtmlPurifier;
?>


 <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
        <div class="caption">
        <h3><?= Html::encode($model->nombre) ?></h3>
        <p> <?= HtmlPurifier::process($model->descripcion) ?>    </p>
        
      </div>
    </div>
  </div>


       


