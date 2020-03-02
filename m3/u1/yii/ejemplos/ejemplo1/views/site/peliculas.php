<?php

use yii\helpers\Html;

/* @var $this yii\web\View */

$this->title = 'Peliculas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pelicula-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Pelicula', ['pelicula/create'], ['class' => 'btn btn-success']) ?>
    </p>
    
    <p>
        <?= Html::a('Listar Pelicula', ['pelicula/index'], ['class' => 'btn btn-success']) ?>
    </p>
    
    


   


</div>
