<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AlmacenesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Almacenes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="almacenes-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Almacenes', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nombre',
            'direccion',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
