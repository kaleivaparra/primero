<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "convocatoria".
 *
 * @property integer $conv_codigo
 * @property string $conv_titulo
 * @property string $conv_descripcion
 * @property string $conv_fecha_creacion
 * @property string $conv_fecha_expiracion
 * @property integer $conv_login_registro
 */
class Convocatoria extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'convocatoria';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['conv_titulo', 'conv_descripcion', 'conv_fecha_creacion', 'conv_fecha_expiracion', 'conv_login_registro'], 'required'],
            [['conv_fecha_creacion', 'conv_fecha_expiracion'], 'safe'],
            [['conv_login_registro'], 'integer'],
            [['conv_titulo'], 'string', 'max' => 200],
            [['conv_descripcion'], 'string', 'max' => 1000],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'conv_codigo' => 'Conv Codigo',
            'conv_titulo' => 'Conv Titulo',
            'conv_descripcion' => 'Conv Descripcion',
            'conv_fecha_creacion' => 'Conv Fecha Creacion',
            'conv_fecha_expiracion' => 'Conv Fecha Expiracion',
            'conv_login_registro' => 'Conv Login Registro',
        ];
    }
}
