<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TemasEvaluador */

$this->title = 'Update Temas Evaluador: ' . $model->tem_ev_codigo;
$this->params['breadcrumbs'][] = ['label' => 'Temas Evaluadors', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->tem_ev_codigo, 'url' => ['view', 'id' => $model->tem_ev_codigo]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="temas-evaluador-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
