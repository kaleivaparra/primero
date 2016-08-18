<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "perfiles_usuario".
 *
 * @property integer $per_codigo
 * @property integer $usu_codigo
 * @property string $pu_fecha_creacion
 *
 * @property Usuario $usuCodigo
 * @property Perfil $perCodigo
 */
class PerfilesUsuario extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'perfiles_usuario';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['per_codigo', 'usu_codigo', 'pu_fecha_creacion'], 'required'],
            [['per_codigo', 'usu_codigo'], 'integer'],
            [['pu_fecha_creacion'], 'safe'],
            [['usu_codigo'], 'exist', 'skipOnError' => true, 'targetClass' => Usuario::className(), 'targetAttribute' => ['usu_codigo' => 'usu_codigo']],
            [['per_codigo'], 'exist', 'skipOnError' => true, 'targetClass' => Perfil::className(), 'targetAttribute' => ['per_codigo' => 'per_codigo']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'per_codigo' => 'Per Codigo',
            'usu_codigo' => 'Usu Codigo',
            'pu_fecha_creacion' => 'Pu Fecha Creacion',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsuCodigo()
    {
        return $this->hasOne(Usuario::className(), ['usu_codigo' => 'usu_codigo']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPerCodigo()
    {
        return $this->hasOne(Perfil::className(), ['per_codigo' => 'per_codigo']);
    }
}
