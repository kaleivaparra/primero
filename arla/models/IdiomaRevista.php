<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "idioma_revista".
 *
 * @property integer $id_rev_codigo
 * @property integer $idi_codigo
 * @property integer $rev_codigo
 *
 * @property Idioma $idiCodigo
 * @property InscripcionRevistaArla $revCodigo
 */
class IdiomaRevista extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'idioma_revista';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idi_codigo'], 'required'],
            [['idi_codigo', 'rev_codigo'], 'integer'],
            [['idi_codigo'], 'exist', 'skipOnError' => true, 'targetClass' => Idioma::className(), 'targetAttribute' => ['idi_codigo' => 'idi_codigo']],
            [['rev_codigo'], 'exist', 'skipOnError' => true, 'targetClass' => InscripcionRevistaArla::className(), 'targetAttribute' => ['rev_codigo' => 'rev_codigo']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_rev_codigo' => 'Id Rev Codigo',
            'idi_codigo' => 'Idi Codigo',
            'rev_codigo' => 'Rev Codigo',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdiCodigo()
    {
        return $this->hasOne(Idioma::className(), ['idi_codigo' => 'idi_codigo']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRevCodigo()
    {
        return $this->hasOne(InscripcionRevistaArla::className(), ['rev_codigo' => 'rev_codigo']);
    }
}
