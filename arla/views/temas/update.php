<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Temas */

$this->title = 'Update Temas: ' . $model->tem_codigo;
$this->params['breadcrumbs'][] = ['label' => 'Temas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->tem_codigo, 'url' => ['view', 'id' => $model->tem_codigo]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="temas-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
