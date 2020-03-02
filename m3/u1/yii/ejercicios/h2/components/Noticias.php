<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\components;

use yii\base\Widget;
use yii\helpers\Html;

class Noticias extends Widget
{
    public $titulo;
    
    public function init() {
        parent::init();
        echo '<div class="panel panel-default">';
        echo '<div class="panel-heading">';
        echo Html::tag("h3",Html::encode("this->titulo"),['class'=>"panel-title"]);
        echo '</div>';
        echo '<div class="panel-body">';
        
    }
    
    public function run() {
        echo '</div></div>';
    }   
    
    
}
    