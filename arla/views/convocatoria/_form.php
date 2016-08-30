<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Convocatoria */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="convocatoria-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'conv_titulo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'conv_descripcion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'conv_fecha_creacion')->textInput() ?>

    <?= $form->field($model, 'conv_fecha_expiracion')->textInput() ?>

    <?= $form->field($model, 'conv_login_registro')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
