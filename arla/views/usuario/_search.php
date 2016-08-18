<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\UsuarioSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="usuario-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'usu_codigo') ?>

    <?= $form->field($model, 'usu_username') ?>

    <?= $form->field($model, 'per_codigo') ?>

    <?= $form->field($model, 'usu_nombres') ?>

    <?= $form->field($model, 'usu_apellido_paterno') ?>

    <?php // echo $form->field($model, 'usu_apellido_materno') ?>

    <?php // echo $form->field($model, 'usu_email') ?>

    <?php // echo $form->field($model, 'usu_password') ?>

    <?php // echo $form->field($model, 'authKey') ?>

    <?php // echo $form->field($model, 'accessToken') ?>

    <?php // echo $form->field($model, 'activate') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
