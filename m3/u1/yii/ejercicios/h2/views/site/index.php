<?php

use app\components\Foto;

/* @var $this yii\web\View */

$this->title = 'Hola de ejercicios 2 Yii';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Congratulations!</h1>

        <p class="lead">You have successfully created your Yii-powered application.</p>

        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-md-4 text-center">
                 <h2> Izquierda </h2>
                
                 <?= Foto::widget(); ?>
                 
            </div>  
            
            <div class="col-md-4 text-center">
                 <h2> Centro </h2>
                
                 <?= Foto::widget(); ?>
                 
            </div>  
            
            <div class="col-md-4 text-center">
                 <h2> Derecha </h2>
                
                 <?= Foto::widget(["nombre" => "alpe.jpg", "alternativo"=>"Foto Adjunta"]); ?>
                 
            </div>  
            
            
        </div>

    </div>
</div>
