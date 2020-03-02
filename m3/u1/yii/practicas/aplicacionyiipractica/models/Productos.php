<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "productos".
 *
 * @property int $id
 * @property string $nombre
 * @property string $foto
 * @property string $descripcion
 * @property float $precio
 * @property int $oferta
 * @property int $portada
 *
 * @property Relacion[] $relacions
 */
class Productos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'productos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre', 'foto', 'descripcion', 'precio', 'oferta', 'portada'], 'required'],
            [['precio'], 'number'],
            [['oferta', 'portada'], 'integer'],
            [['nombre', 'foto', 'descripcion'], 'string', 'max' => 255],
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
            'foto' => 'Foto',
            'descripcion' => 'Descripcion',
            'precio' => 'Precio',
            'oferta' => 'Oferta',
            'portada' => 'Portada',
        ];
    }

    /**
     * Gets query for [[Relacions]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRelacions()
    {
        return $this->hasMany(Relacion::className(), ['producto' => 'id']);
    }
}
