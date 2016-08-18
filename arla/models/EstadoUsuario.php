<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "estado_usuario".
 *
 * @property integer $eu_codigo
 * @property string $eu_descripcion
 *
 * @property Usuario[] $usuarios
 */
class EstadoUsuario extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'estado_usuario';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['eu_descripcion'], 'required'],
            [['eu_descripcion'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'eu_codigo' => 'Eu Codigo',
            'eu_descripcion' => 'Eu Descripcion',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsuarios()
    {
        return $this->hasMany(Usuario::className(), ['eu_codigo' => 'eu_codigo']);
    }
}
