<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "emple".
 *
 * @property int $emp_no
 * @property string $apellido
 * @property string|null $oficio
 * @property int|null $dir
 * @property string|null $fecha_alt
 * @property int|null $salario
 * @property int|null $comision
 * @property int|null $dept_no
 *
 * @property Depart $deptNo
 */
class Empleados extends \yii\db\ActiveRecord
{
    
    public $mes;
    public $año;
    public $dia;
    public $numero_empleados;
    
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'emple';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['emp_no', 'apellido'], 'required'],
            [['emp_no', 'dir', 'salario', 'comision', 'dept_no'], 'integer'],
            [['fecha_alt'], 'safe'],
            [['apellido'], 'string', 'max' => 50],
            [['oficio'], 'string', 'max' => 30],
            [['emp_no'], 'unique'],
            [['dept_no'], 'exist', 'skipOnError' => true, 'targetClass' => Depart::className(), 'targetAttribute' => ['dept_no' => 'dept_no']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'emp_no' => 'Nº Empleado',
            'apellido' => 'Apellido',
            'oficio' => 'Oficio',
            'dir' => 'Dir',
            'fecha_alt' => 'Fecha Alta',
            'salario' => 'Salario',
            'comision' => 'Comision',
            'dept_no' => 'Nº Departamento ',
            'numero_empleados' => 'Número de empleados',
        ];
    }

    /**
     * Gets query for [[DeptNo]].
     *
     * @return \yii\db\ActiveQuery|DepartQuery
     */
    public function getDeptNo()
    {
        return $this->hasOne(Departamentos::className(), ['dept_no' => 'dept_no']);
    }

    /**
     * {@inheritdoc}
     * @return EmpleadosQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new EmpleadosQuery(get_called_class());
    }
}
