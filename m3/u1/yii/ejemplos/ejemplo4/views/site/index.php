<?php

/* @var $this yii\web\View */

$this->title = 'Home';
use yii\widgets\ListView;
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Ejemplo 4 de Aplicación</h1>

        <p class="lead">Podemos ver un ejemplo del funcionamiento de este framework</p>

    </div>

    <div class="body-content">

        <?= ListView::widget([
        'dataProvider' => $dataProvider,
        'itemView' => '_noticia',
        ]);

    ?>

    </div>
</div>
