<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\RevistaTemas */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="revista-temas-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tem_codigo')->textInput() ?>

    <?= $form->field($model, 'rev_codigo')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
