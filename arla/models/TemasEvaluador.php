<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "temas_evaluador".
 *
 * @property integer $tem_ev_codigo
 * @property integer $tem_codigo
 * @property integer $ev_codigo
 *
 * @property Temas $temCodigo
 * @property Evaluadores $evCodigo
 */
class TemasEvaluador extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'temas_evaluador';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tem_codigo', 'ev_codigo'], 'required'],
            [['tem_codigo', 'ev_codigo'], 'integer'],
            [['tem_codigo'], 'exist', 'skipOnError' => true, 'targetClass' => Temas::className(), 'targetAttribute' => ['tem_codigo' => 'tem_codigo']],
            [['ev_codigo'], 'exist', 'skipOnError' => true, 'targetClass' => Evaluadores::className(), 'targetAttribute' => ['ev_codigo' => 'ev_codigo']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'tem_ev_codigo' => 'Tem Ev Codigo',
            'tem_codigo' => 'Tem Codigo',
            'ev_codigo' => 'Ev Codigo',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTemCodigo()
    {
        return $this->hasOne(Temas::className(), ['tem_codigo' => 'tem_codigo']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEvCodigo()
    {
        return $this->hasOne(Evaluadores::className(), ['ev_codigo' => 'ev_codigo']);
    }
}
