<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "frecuencia".
 *
 * @property integer $fre_codigo
 * @property string $fre_descripcion
 *
 * @property InscripcionRevistaArla[] $inscripcionRevistaArlas
 */
class Frecuencia extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'frecuencia';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fre_descripcion'], 'required'],
            [['fre_descripcion'], 'string', 'max' => 30],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'fre_codigo' => 'Fre Codigo',
            'fre_descripcion' => 'Fre Descripcion',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getInscripcionRevistaArlas()
    {
        return $this->hasMany(InscripcionRevistaArla::className(), ['fre_codigo' => 'fre_codigo']);
    }
}
