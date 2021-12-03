<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%Clientes}}".
 *
 * @property int $id
 * @property int $nombre
 * @property int $apellido
 * @property int $edad
 * @property string $fecha_de_nacimiento
 */
class Clientes extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%Clientes}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre', 'apellido', 'edad', 'fecha_de_nacimiento'], 'required'],
            [['nombre', 'apellido', 'edad'], 'integer'],
            [['fecha_de_nacimiento'], 'string', 'max' => 50],
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
            'apellido' => 'Apellido',
            'edad' => 'Edad',
            'fecha_de_nacimiento' => 'Fecha De Nacimiento',
        ];
    }
}
