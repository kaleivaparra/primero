<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Indexaciones */

$this->title = 'Update Indexaciones: ' . $model->inde_codigo;
$this->params['breadcrumbs'][] = ['label' => 'Indexaciones', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->inde_codigo, 'url' => ['view', 'id' => $model->inde_codigo]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="indexaciones-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
