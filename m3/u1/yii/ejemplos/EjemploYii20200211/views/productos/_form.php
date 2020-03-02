<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Almacenes;
use yii\helpers\ArrayHelper;
use kartik\date\DatePicker;


/* @var $this yii\web\View */
/* @var $model app\models\Productos */
/* @var $form yii\widgets\ActiveForm */


//use app\models\Country;
$almacenes= Almacenes::find()->all();

//use yii\helpers\ArrayHelper;
$listData=ArrayHelper::map($almacenes,'id','nombre');




?>

<div class="productos-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'foto')->fileInput() ?>

    <?= $form->field($model, 'almacen')->dropDownList(
        $listData,
        ['prompt'=>'Selecciona Almacén']
        ); ?>

    <?= '<label class="control-label">Fecha</label>'; ?>
        
    <?=    DatePicker::widget([
        'model' => $model,    
        'attribute' => 'fecha',
        'language' => 'es',
        'options' => ['placeholder' => 'Introduce la fecha'],
        'pluginOptions' => [
           'todayHighlight' => true,
           'todayBtn' => true, 
           'autoclose' => true,
           'format' => 'dd/mm/yyyy',
           'weekStart' => 1
           ]
    ]); ?> 
    
    <?= '<div class="help-block"></div>'; ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
