<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "evaluadores".
 *
 * @property integer $ev_codigo
 * @property string $ev_nombres
 * @property string $ev_apellidos
 * @property string $ev_institucion
 * @property integer $pais_codigo
 * @property string $ev_email
 *
 * @property Pais $paisCodigo
 * @property TemasEvaluador[] $temasEvaluadors
 */
class Evaluadores extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'evaluadores';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ev_nombres', 'ev_apellidos', 'ev_institucion', 'pais_codigo', 'ev_email'], 'required'],
            [['pais_codigo'], 'integer'],
            [['ev_nombres', 'ev_apellidos'], 'string', 'max' => 200],
            [['ev_institucion', 'ev_email'], 'string', 'max' => 100],
            [['pais_codigo'], 'exist', 'skipOnError' => true, 'targetClass' => Pais::className(), 'targetAttribute' => ['pais_codigo' => 'pais_codigo']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ev_codigo' => 'Ev Codigo',
            'ev_nombres' => 'Ev Nombres',
            'ev_apellidos' => 'Ev Apellidos',
            'ev_institucion' => 'Ev Institucion',
            'pais_codigo' => 'Pais Codigo',
            'ev_email' => 'Ev Email',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPaisCodigo()
    {
        return $this->hasOne(Pais::className(), ['pais_codigo' => 'pais_codigo']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTemasEvaluadors()
    {
        return $this->hasMany(TemasEvaluador::className(), ['ev_codigo' => 'ev_codigo']);
    }
}
