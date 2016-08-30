<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Convocatoria */

$this->title = 'Update Convocatoria: ' . $model->conv_codigo;
$this->params['breadcrumbs'][] = ['label' => 'Convocatorias', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->conv_codigo, 'url' => ['view', 'id' => $model->conv_codigo]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="convocatoria-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
