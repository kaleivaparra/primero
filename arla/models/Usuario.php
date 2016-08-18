<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "usuario".
 *
 * @property integer $usu_codigo
 * @property string $usu_username
 * @property string $usu_nombres
 * @property string $usu_apellido_paterno
 * @property string $usu_apellido_materno
 * @property string $usu_email_institucional
 * @property string $usu_email_alternativo
 * @property string $usu_password
 * @property string $authKey
 * @property string $accessToken
 * @property integer $activate
 * @property integer $eu_codigo
 * @property string $usu_fecha_creacion
 * @property string $usu_cargo
 *
 * @property EstadoUsuario $euCodigo
 */
class Usuario extends \yii\db\ActiveRecord {

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'usuario';
    }

    public $usu_password_repeat;

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['usu_username', 'usu_nombres', 'usu_apellido_paterno', 'usu_apellido_materno', 'usu_email_institucional', 'usu_email_alternativo', 'usu_password', 'authKey', 'accessToken', 'eu_codigo', 'usu_fecha_creacion', 'usu_cargo'], 'required'],
            [['activate', 'eu_codigo'], 'integer'],
            [['usu_fecha_creacion'], 'safe'],
            [['usu_username', 'usu_apellido_paterno', 'usu_apellido_materno'], 'string', 'max' => 50],
            ['usu_username', 'match', 'pattern' => "/^.{3,50}$/", 'message' => 'Mínimo 3 y máximo 50 caracteres'],
            ['usu_username', 'match', 'pattern' => "/^[0-9a-z]+$/i", 'message' => 'Sólo se aceptan letras y números'],
            //['usu_username', 'username_existe'],
            [['usu_nombres', 'usu_email_institucional', 'usu_email_alternativo'], 'string', 'max' => 100],
            [['usu_email_institucional', 'usu_email_alternativo'], 'match', 'pattern' => "/^.{5,100}$/", 'message' => 'Mínimo 5 y máximo 100 caracteres'],
            [['usu_email_institucional', 'usu_email_alternativo'], 'email', 'message' => 'Formato no válido'],
            //['usu_email_institucional', 'email_existe'],
            [['usu_password', 'usu_cargo'], 'string', 'max' => 200],
            ['usu_password', 'match', 'pattern' => "/^.{8,16}$/", 'message' => 'Mínimo 8 y máximo 16 caracteres'],
            ['usu_password_repeat', 'compare', 'compareAttribute' => 'usu_password', 'message' => 'Los passwords no coinciden'],
            [['authKey', 'accessToken'], 'string', 'max' => 250],
            [['eu_codigo'], 'exist', 'skipOnError' => true, 'targetClass' => EstadoUsuario::className(), 'targetAttribute' => ['eu_codigo' => 'eu_codigo']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'usu_codigo' => 'Usu Codigo',
            'usu_username' => 'Usuario',
            'usu_nombres' => 'Nombres',
            'usu_apellido_paterno' => 'Primer Apellido',
            'usu_apellido_materno' => 'Segundo Apellido',
            'usu_email_institucional' => 'Correo Institucional',
            'usu_email_alternativo' => 'Correo Alternativo',
            'usu_password' => 'Contraseña',
            'authKey' => 'Auth Key',
            'accessToken' => 'Access Token',
            'activate' => 'Activate',
            'eu_codigo' => 'Eu Codigo',
            'usu_fecha_creacion' => 'Usu Fecha Creacion',
            'usu_cargo' => 'Cargo',
            'usu_password_repeat'=>'Repetir Contraseña',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEuCodigo() {
        return $this->hasOne(EstadoUsuario::className(), ['eu_codigo' => 'eu_codigo']);
    }

    public function email_existe() {

        //Buscar el email en la tabla
        $table = Usuario::find()->where("usu_email_institucional=:usu_email_institucional", [":usu_email_institucional" => $this->usu_email_institucional]);

        //Si el email existe mostrar el error
        if ($table->count() == 1) {
            $this->addError('usu_email_institucional', "El email seleccionado existe");
        }
    }

    public function username_existe() {
        //Buscar el username en la tabla
        $table = Usuario::find()->where("usu_username=:usu_username", [":usu_username" => $this->usu_username]);

        //Si el username existe mostrar el error
        if ($table->count() == 1) {
            $this->addError('usu_username', "El usuario seleccionado existe");
        }
    }

}
