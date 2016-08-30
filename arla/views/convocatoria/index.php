<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Convocatorias';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="convocatoria-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Convocatoria', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'conv_codigo',
            'conv_titulo',
            'conv_descripcion',
            'conv_fecha_creacion',
            'conv_fecha_expiracion',
            // 'conv_login_registro',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
