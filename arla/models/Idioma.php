<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "idioma".
 *
 * @property integer $idi_codigo
 * @property string $idi_descripcion
 *
 * @property IdiomaRevista[] $idiomaRevistas
 */
class Idioma extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'idioma';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idi_descripcion'], 'required'],
            [['idi_descripcion'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idi_codigo' => 'Idi Codigo',
            'idi_descripcion' => 'Idi Descripcion',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdiomaRevistas()
    {
        return $this->hasMany(IdiomaRevista::className(), ['idi_codigo' => 'idi_codigo']);
    }
}
