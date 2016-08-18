<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "indexaciones".
 *
 * @property integer $inde_codigo
 * @property string $inde_descripcion
 *
 * @property IndexacionesRevista[] $indexacionesRevistas
 */
class Indexaciones extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'indexaciones';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['inde_descripcion'], 'required'],
            [['inde_descripcion'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'inde_codigo' => 'Inde Codigo',
            'inde_descripcion' => 'Inde Descripcion',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIndexacionesRevistas()
    {
        return $this->hasMany(IndexacionesRevista::className(), ['inde_codigo' => 'inde_codigo']);
    }
}
