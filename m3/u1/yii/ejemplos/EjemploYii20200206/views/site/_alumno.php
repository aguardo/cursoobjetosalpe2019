<?php
use yii\helpers\Html;
use yii\helpers\HtmlPurifier;
?>
<div class="row">
  <div class="col-xs-6 col-md-3">
    <a href="#" class="thumbnail">
        <img src="<?= Yii::getAlias("@web")?>/imgs/follaje.jpg" />
        <?= Html::img("@web/imgs/arbol-nieve.jpg") ?> 
        <h3 class="regla1"> <?= $model->id ?> </h3>
        <p> <?= $model->nombre ?> </p>
        <p> <?= $model->apellidos ?> </p>
    </a>
  </div>
</div>    
