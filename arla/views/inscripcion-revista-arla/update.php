<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\InscripcionRevistaArla */

$this->title = 'Update Inscripcion Revista Arla: ' . $model->rev_codigo;
$this->params['breadcrumbs'][] = ['label' => 'Inscripcion Revista Arlas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->rev_codigo, 'url' => ['view', 'id' => $model->rev_codigo]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="inscripcion-revista-arla-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
