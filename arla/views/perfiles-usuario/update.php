<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PerfilesUsuario */

$this->title = 'Update Perfiles Usuario: ' . $model->pu_codigo;
$this->params['breadcrumbs'][] = ['label' => 'Perfiles Usuarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->pu_codigo, 'url' => ['view', 'id' => $model->pu_codigo]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="perfiles-usuario-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
