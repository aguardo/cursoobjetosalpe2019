<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "relacion".
 *
 * @property int $id
 * @property int $producto
 * @property int $categoria
 *
 * @property Productos $producto0
 * @property Categorias $categoria0
 */
class Relacion extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'relacion';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['producto', 'categoria'], 'required'],
            [['producto', 'categoria'], 'integer'],
            [['producto'], 'exist', 'skipOnError' => true, 'targetClass' => Productos::className(), 'targetAttribute' => ['producto' => 'id']],
            [['categoria'], 'exist', 'skipOnError' => true, 'targetClass' => Categorias::className(), 'targetAttribute' => ['categoria' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'producto' => 'Producto',
            'categoria' => 'Categoria',
        ];
    }

    /**
     * Gets query for [[Producto0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProducto0()
    {
        return $this->hasOne(Productos::className(), ['id' => 'producto']);
    }

    /**
     * Gets query for [[Categoria0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCategoria0()
    {
        return $this->hasOne(Categorias::className(), ['id' => 'categoria']);
    }
}
