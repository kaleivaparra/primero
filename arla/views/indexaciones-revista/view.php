<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\IndexacionesRevista */

$this->title = $model->inde_rev;
$this->params['breadcrumbs'][] = ['label' => 'Indexaciones Revistas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="indexaciones-revista-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->inde_rev], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->inde_rev], [
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
            'inde_rev',
            'inde_codigo',
            'rev_codigo',
        ],
    ]) ?>

</div>
