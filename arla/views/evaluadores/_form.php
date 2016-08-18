<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Evaluadores */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="evaluadores-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ev_nombres')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ev_apellidos')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ev_institucion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pais_codigo')->textInput() ?>

    <?= $form->field($model, 'ev_email')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
