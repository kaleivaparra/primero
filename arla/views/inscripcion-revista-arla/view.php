<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\InscripcionRevistaArla */

$this->title = $model->rev_codigo;
$this->params['breadcrumbs'][] = ['label' => 'Inscripcion Revista Arlas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="inscripcion-revista-arla-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->rev_codigo], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->rev_codigo], [
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
            'rev_codigo',
            'rev_nombre_revista',
            'rev_descripcion',
            'ciu_codigo',
            'pais_codigo',
            'rev_sitio_web',
            'rev_anio_inicio',
            'fre_codigo',
            'sop_codigo',
            'rev_institucion',
            'rev_facultad',
            'rev_editorial',
            'rev_calle',
            'rev_codigo_postal',
            'rev_telefono',
            'rev_fecha_creacion',
            'rev_ultima_modificacion',
            'ei_codigo',
        ],
    ]) ?>

</div>
