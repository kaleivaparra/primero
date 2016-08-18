<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ciudad".
 *
 * @property integer $ciu_codigo
 * @property integer $pais_codigo
 * @property string $ciu_nombre
 *
 * @property InscripcionRevistaArla[] $inscripcionRevistaArlas
 */
class Ciudad extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ciudad';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pais_codigo', 'ciu_nombre'], 'required'],
            [['pais_codigo'], 'integer'],
            [['ciu_nombre'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ciu_codigo' => 'Ciu Codigo',
            'pais_codigo' => 'Pais Codigo',
            'ciu_nombre' => 'Ciu Nombre',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getInscripcionRevistaArlas()
    {
        return $this->hasMany(InscripcionRevistaArla::className(), ['ciu_codigo' => 'ciu_codigo']);
    }
}
