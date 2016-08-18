<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\TemasEvaluador */

$this->title = $model->tem_ev_codigo;
$this->params['breadcrumbs'][] = ['label' => 'Temas Evaluadors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="temas-evaluador-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->tem_ev_codigo], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->tem_ev_codigo], [
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
            'tem_ev_codigo',
            'tem_codigo',
            'ev_codigo',
        ],
    ]) ?>

</div>
