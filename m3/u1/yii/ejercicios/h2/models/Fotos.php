<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "fotos".
 *
 * @property int $id
 * @property string $nombre
 * @property resource $contenido
 * @property string $alternativo
 */
class Fotos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'fotos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre', 'contenido', 'alternativo'], 'required'],
            [['contenido'], 'string'],
            [['nombre', 'alternativo'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nombre' => 'Nombre',
            'contenido' => 'Contenido',
            'alternativo' => 'Alternativo',
        ];
    }
}
