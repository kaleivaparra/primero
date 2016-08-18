<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Evaluadores */

$this->title = $model->ev_codigo;
$this->params['breadcrumbs'][] = ['label' => 'Evaluadores', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="evaluadores-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->ev_codigo], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->ev_codigo], [
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
            'ev_codigo',
            'ev_nombres',
            'ev_apellidos',
            'ev_institucion',
            'pais_codigo',
            'ev_email:email',
        ],
    ]) ?>

</div>
