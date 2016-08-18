<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Idioma */

$this->title = 'Update Idioma: ' . $model->idi_codigo;
$this->params['breadcrumbs'][] = ['label' => 'Idiomas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idi_codigo, 'url' => ['view', 'id' => $model->idi_codigo]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="idioma-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
