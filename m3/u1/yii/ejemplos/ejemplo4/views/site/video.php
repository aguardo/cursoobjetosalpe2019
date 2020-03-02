<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

use yii\helpers\Url;
?>

<div>
    
    <div>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/cAVgKdbDlRY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    <div>
    <iframe id="iframemp4file" width="560" height="315" src="<?=Url::to('@web/video/video.mp4', true);?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    
    
</div>
