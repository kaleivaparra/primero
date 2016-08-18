<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PerfilesUsuario */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="perfiles-usuario-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'per_codigo')->textInput() ?>

    <?= $form->field($model, 'usu_codigo')->textInput() ?>

    <?= $form->field($model, 'pu_fecha_creacion')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
