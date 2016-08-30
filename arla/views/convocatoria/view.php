<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Convocatoria */

$this->title = $model->conv_codigo;
$this->params['breadcrumbs'][] = ['label' => 'Convocatorias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="convocatoria-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->conv_codigo], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->conv_codigo], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'conv_codigo',
            'conv_titulo',
            'conv_descripcion',
            'conv_fecha_creacion',
            'conv_fecha_expiracion',
            'conv_login_registro',
        ],
    ]) ?>

</div>
