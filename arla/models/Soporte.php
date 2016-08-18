<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "soporte".
 *
 * @property integer $sop_codigo
 * @property string $sop_descripcion
 *
 * @property InscripcionRevistaArla[] $inscripcionRevistaArlas
 */
class Soporte extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'soporte';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sop_descripcion'], 'required'],
            [['sop_descripcion'], 'string', 'max' => 30],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'sop_codigo' => 'Sop Codigo',
            'sop_descripcion' => 'Sop Descripcion',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getInscripcionRevistaArlas()
    {
        return $this->hasMany(InscripcionRevistaArla::className(), ['sop_codigo' => 'sop_codigo']);
    }
}
