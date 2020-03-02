<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "depart".
 *
 * @property int $dept_no
 * @property string|null $dnombre
 * @property string|null $loc
 *
 * @property Emple[] $emples
 */
class Departamentos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'depart';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['dept_no'], 'required'],
            [['dept_no'], 'integer'],
            [['dnombre', 'loc'], 'string', 'max' => 30],
            [['dept_no'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'dept_no' => 'Nº Departamento',
            'dnombre' => 'Nombre',
            'loc' => 'Localización',
        ];
    }

    /**
     * Gets query for [[Emples]].
     *
     * @return \yii\db\ActiveQuery|EmpleQuery
     */
    public function getEmples()
    {
        return $this->hasMany(Empleados::className(), ['dept_no' => 'dept_no']);
    }

    /**
     * {@inheritdoc}
     * @return DepartamentosQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new DepartamentosQuery(get_called_class());
    }
}
