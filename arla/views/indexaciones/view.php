<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Indexaciones */

$this->title = $model->inde_codigo;
$this->params['breadcrumbs'][] = ['label' => 'Indexaciones', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="indexaciones-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->inde_codigo], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->inde_codigo], [
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
            'inde_codigo',
            'inde_descripcion',
        ],
    ]) ?>

</div>
