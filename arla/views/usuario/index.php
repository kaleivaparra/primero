<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */
use app\assets\AppAsset;
$this->title = 'ARLA';
$asset = app\assets\AppAsset::register($this);

$this->title = 'Usuarios';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="usuario-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Usuario', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'usu_codigo',
            'usu_username',
            'usu_nombres',
            'usu_apellido_paterno',
            'usu_apellido_materno',
            // 'usu_email_institucional:email',
            // 'usu_email_alternativo:email',
            // 'usu_password',
            // 'authKey',
            // 'accessToken',
            // 'activate',
            // 'eu_codigo',
            // 'usu_fecha_creacion',
            // 'usu_cargo',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
