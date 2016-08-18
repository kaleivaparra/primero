<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "revista_temas".
 *
 * @property integer $rev_tem_codigo
 * @property integer $tem_codigo
 * @property integer $rev_codigo
 *
 * @property InscripcionRevistaArla $revCodigo
 * @property Temas $temCodigo
 */
class RevistaTemas extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'revista_temas';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tem_codigo', 'rev_codigo'], 'required'],
            [['tem_codigo', 'rev_codigo'], 'integer'],
            [['rev_codigo'], 'exist', 'skipOnError' => true, 'targetClass' => InscripcionRevistaArla::className(), 'targetAttribute' => ['rev_codigo' => 'rev_codigo']],
            [['tem_codigo'], 'exist', 'skipOnError' => true, 'targetClass' => Temas::className(), 'targetAttribute' => ['tem_codigo' => 'tem_codigo']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'rev_tem_codigo' => 'Rev Tem Codigo',
            'tem_codigo' => 'Tem Codigo',
            'rev_codigo' => 'Rev Codigo',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRevCodigo()
    {
        return $this->hasOne(InscripcionRevistaArla::className(), ['rev_codigo' => 'rev_codigo']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTemCodigo()
    {
        return $this->hasOne(Temas::className(), ['tem_codigo' => 'tem_codigo']);
    }
}
