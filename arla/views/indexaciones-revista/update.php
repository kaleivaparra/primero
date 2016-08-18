<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\IndexacionesRevista */

$this->title = 'Update Indexaciones Revista: ' . $model->inde_rev;
$this->params['breadcrumbs'][] = ['label' => 'Indexaciones Revistas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->inde_rev, 'url' => ['view', 'id' => $model->inde_rev]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="indexaciones-revista-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
