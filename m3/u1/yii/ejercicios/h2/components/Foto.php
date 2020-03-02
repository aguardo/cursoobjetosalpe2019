<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



namespace app\components;

use yii\base\Widget;
use yii\helpers\Html;

class Foto extends Widget
{
    public $nombre = "nada.jpg";
    public $alternativo = "nada";
    
    public function init() {
        parent::init();
    }
    
    public function run() {
        return Html::img("@web/imgs/$this->nombre", ["alt" => $this->alternativo]);
    }   
    
    
    
    
    
    
}


