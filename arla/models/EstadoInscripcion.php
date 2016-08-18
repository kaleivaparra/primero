<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "estado_inscripcion".
 *
 * @property integer $ei_codigo
 * @property string $ei_descripcion
 *
 * @property InscripcionRevistaArla[] $inscripcionRevistaArlas
 */
class EstadoInscripcion extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'estado_inscripcion';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ei_descripcion'], 'required'],
            [['ei_descripcion'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ei_codigo' => 'Ei Codigo',
            'ei_descripcion' => 'Ei Descripcion',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getInscripcionRevistaArlas()
    {
        return $this->hasMany(InscripcionRevistaArla::className(), ['ei_codigo' => 'ei_codigo']);
    }
}
