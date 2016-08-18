<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Evaluadores */

$this->title = 'Update Evaluadores: ' . $model->ev_codigo;
$this->params['breadcrumbs'][] = ['label' => 'Evaluadores', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ev_codigo, 'url' => ['view', 'id' => $model->ev_codigo]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="evaluadores-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
