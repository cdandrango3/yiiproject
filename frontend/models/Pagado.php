<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "{{%pagado}}".
 *
 * @property int $id
 * @property int $valores
 */
class Pagado extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%pagado}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'valores'], 'required'],
            [['id', 'valores'], 'integer'],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'valores' => 'Valores',
        ];
    }
}
