<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\RevistaTemas */

$this->title = 'Update Revista Temas: ' . $model->rev_tem_codigo;
$this->params['breadcrumbs'][] = ['label' => 'Revista Temas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->rev_tem_codigo, 'url' => ['view', 'id' => $model->rev_tem_codigo]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="revista-temas-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
