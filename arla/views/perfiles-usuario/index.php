<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */
use app\assets\AppAsset;
$this->title = 'ARLA';
$asset = app\assets\AppAsset::register($this);

$this->title = 'Perfiles Usuarios';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="perfiles-usuario-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Perfiles Usuario', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'pu_codigo',
            'per_codigo',
            'usu_codigo',
            'pu_fecha_creacion',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
