<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */
use app\assets\AppAsset;
$this->title = 'ARLA';
$asset = app\assets\AppAsset::register($this);

$this->title = 'Inscripcion Revista Arlas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="inscripcion-revista-arla-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Inscripcion Revista Arla', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'rev_codigo',
            'rev_nombre_revista',
            'rev_descripcion',
            'ciu_codigo',
            'pais_codigo',
            // 'rev_sitio_web',
            // 'rev_anio_inicio',
            // 'fre_codigo',
            // 'sop_codigo',
            // 'rev_institucion',
            // 'rev_facultad',
            // 'rev_editorial',
            // 'rev_calle',
            // 'rev_codigo_postal',
            // 'rev_telefono',
            // 'rev_fecha_creacion',
            // 'rev_ultima_modificacion',
            // 'ei_codigo',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
