<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';

use yii\widgets\ListView;


?>
<div class="site-index">


    <?= ListView::widget([
    'dataProvider' => $dataProvider,
    'itemView' => '_alumno',
]);
    ?>



    
</div>
