<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Consultas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="noticias-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="row">
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <div class="caption">
                <h3>Consulta 1</h3>
                <p>Datos de los Empleados</p>
                <p><?= Html::a('Consulta 1', ['consultas/consulta1'], ['class' => 'btn btn-primary']) ?> </p>
                </div>
            </div>
    </div>
</div>


</div>
