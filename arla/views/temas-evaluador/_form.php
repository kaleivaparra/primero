<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TemasEvaluador */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="temas-evaluador-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tem_codigo')->textInput() ?>

    <?= $form->field($model, 'ev_codigo')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
