<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */
use app\assets\AppAsset;
$this->title = 'ARLA';
$asset = app\assets\AppAsset::register($this);

$this->title = 'Evaluadores';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="evaluadores-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Ingresar Evaluador', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ev_codigo',
            'ev_nombres',
            'ev_apellidos',
            'ev_institucion',
            'pais_codigo',
            // 'ev_email:email',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
