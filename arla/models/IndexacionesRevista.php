<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "indexaciones_revista".
 *
 * @property integer $inde_rev
 * @property integer $inde_codigo
 * @property integer $rev_codigo
 *
 * @property InscripcionRevistaArla $revCodigo
 * @property Indexaciones $indeCodigo
 */
class IndexacionesRevista extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'indexaciones_revista';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['inde_codigo', 'rev_codigo'], 'required'],
            [['inde_codigo', 'rev_codigo'], 'integer'],
            [['rev_codigo'], 'exist', 'skipOnError' => true, 'targetClass' => InscripcionRevistaArla::className(), 'targetAttribute' => ['rev_codigo' => 'rev_codigo']],
            [['inde_codigo'], 'exist', 'skipOnError' => true, 'targetClass' => Indexaciones::className(), 'targetAttribute' => ['inde_codigo' => 'inde_codigo']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'inde_rev' => 'Inde Rev',
            'inde_codigo' => 'Inde Codigo',
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
    public function getIndeCodigo()
    {
        return $this->hasOne(Indexaciones::className(), ['inde_codigo' => 'inde_codigo']);
    }
}
