<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
 use yii\helpers\Url;
 
 
 ?>


<form method="post" action="<?= Url::to(['site/formulario'])?>"></form>
    <div class="form-group">
        <label for="iusuario"> Nombre </label>
        <input type="text" class="form-control" id="iusuario" name="usuario" >
    </div>    
    <button class="btn btn-info"> Enviar </button>
</form>

