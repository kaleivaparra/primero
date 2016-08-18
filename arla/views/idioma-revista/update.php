<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\IdiomaRevista */

$this->title = 'Update Idioma Revista: ' . $model->id_rev_codigo;
$this->params['breadcrumbs'][] = ['label' => 'Idioma Revistas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_rev_codigo, 'url' => ['view', 'id' => $model->id_rev_codigo]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="idioma-revista-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
