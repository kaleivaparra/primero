<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "temas".
 *
 * @property integer $tem_codigo
 * @property string $tem_descripcion
 *
 * @property RevistaTemas[] $revistaTemas
 */
class Temas extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'temas';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tem_descripcion'], 'required'],
            [['tem_descripcion'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'tem_codigo' => 'Tem Codigo',
            'tem_descripcion' => 'Tem Descripcion',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRevistaTemas()
    {
        return $this->hasMany(RevistaTemas::className(), ['tem_codigo' => 'tem_codigo']);
    }
}
