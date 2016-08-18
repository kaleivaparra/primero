<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Frecuencia;
use app\models\Soporte;
use app\models\Pais;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Usuario */
/* @var $form yii\widgets\ActiveForm */
?>
<?php echo $msg;?>
<div class="usuario-form">

    <?php $form = ActiveForm::begin([
        "method" => "post",
        'enableClientValidation' => true,
    ]); ?>
    <?php echo $form->errorSummary(array($model,$modelRevista));?>
    <h4>Datos del Usuario</h4>
    <table>
        <tr>
            <td><?= $form->field($model, 'usu_username')->textInput(['maxlength' => true]) ?></td>
            <td><?= $form->field($model, 'usu_password')->passwordInput(['maxlength' => true]) ?></td>
            <td><?= $form->field($model, 'usu_password_repeat')->input("password") ?></td>
        </tr>
        <tr>
            <td><?= $form->field($model, 'usu_nombres')->textInput(['maxlength' => true]) ?></td>
            <td><?= $form->field($model, 'usu_apellido_paterno')->textInput(['maxlength' => true]) ?></td>
            <td><?= $form->field($model, 'usu_apellido_materno')->textInput(['maxlength' => true]) ?></td>
        </tr>
        <tr>
            <td><?= $form->field($model, 'usu_cargo')->textInput(['maxlength' => true]) ?></td>
            <td><?= $form->field($model, 'usu_email_institucional')->textInput(['maxlength' => true]) ?></td>
            <td><?= $form->field($model, 'usu_email_alternativo')->textInput(['maxlength' => true]) ?></td>
        </tr>
    </table>
    <h4>Datos de la Revista</h4>
    <table>
        <tr>
            <td><?= $form->field($modelRevista, 'rev_nombre_revista')->textInput(['maxlength' => true]) ?></td>
            <td><?= $form->field($modelRevista, 'rev_descripcion')->textarea(['maxlength' => true]) ?></td>
        </tr>
        <tr>
            <?php
            $paises = ArrayHelper::map(Pais::find()->orderBy('pais_descripcion')->all(), 'pais_codigo', 'pais_descripcion');
            ?>
            <td><?= $form->field($modelRevista, 'ciu_codigo')->textInput() ?></td>
            <td><?= $form->field($modelRevista, 'pais_codigo')->dropDownList($paises,['prompt'=>'Seleccione País']) ?></td>
            <td><?= $form->field($modelRevista, 'rev_sitio_web')->textInput(['maxlength' => true]) ?></td>
            <td><?= $form->field($modelRevista, 'rev_anio_inicio')->textInput() ?></td>
        </tr>
        <tr>
            <?php 
            $frecuencias = ArrayHelper::map(Frecuencia::find()->all(), 'fre_codigo', 'fre_descripcion');
            $soportes = ArrayHelper::map(Soporte::find()->all(), 'sop_codigo', 'sop_descripcion');
            ?>
            <td><?= $form->field($modelRevista, 'fre_codigo')->dropDownList($frecuencias,['prompt'=>'Seleccione Frecuencia']) ?></td>
            <td><?= $form->field($modelRevista, 'sop_codigo')->dropDownList($soportes,['prompt'=>'Seleccione Soporte']) ?></td>
            <td><?= $form->field($modelRevista, 'rev_institucion')->textInput(['maxlength' => true]) ?></td>
            <td><?= $form->field($modelRevista, 'rev_facultad')->textInput(['maxlength' => true]) ?></td>
        </tr>
        <tr>
            <td><?= $form->field($modelRevista, 'rev_editorial')->textInput(['maxlength' => true]) ?></td>
            <td><?= $form->field($modelRevista, 'rev_calle')->textInput(['maxlength' => true]) ?></td>
            <td><?= $form->field($modelRevista, 'rev_codigo_postal')->textInput(['maxlength' => true]) ?></td>
            <td><?= $form->field($modelRevista, 'rev_telefono')->textInput(['maxlength' => true]) ?></td>
        </tr>
    </table>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Enviar Solicitud' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
