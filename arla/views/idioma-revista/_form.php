<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\IdiomaRevista */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="idioma-revista-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idi_codigo')->textInput() ?>

    <?= $form->field($model, 'rev_codigo')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
