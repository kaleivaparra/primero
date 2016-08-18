<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pais".
 *
 * @property integer $pais_codigo
 * @property string $pais_abreviatura
 * @property string $pais_descripcion
 */
class Pais extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pais';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pais_abreviatura', 'pais_descripcion'], 'required'],
            [['pais_abreviatura'], 'string', 'max' => 2],
            [['pais_descripcion'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'pais_codigo' => 'Pais Codigo',
            'pais_abreviatura' => 'Pais Abreviatura',
            'pais_descripcion' => 'Pais Descripcion',
        ];
    }
}
