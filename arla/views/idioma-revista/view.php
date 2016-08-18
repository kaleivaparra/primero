<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\IdiomaRevista */

$this->title = $model->id_rev_codigo;
$this->params['breadcrumbs'][] = ['label' => 'Idioma Revistas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="idioma-revista-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_rev_codigo], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_rev_codigo], [
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
            'id_rev_codigo',
            'idi_codigo',
            'rev_codigo',
        ],
    ]) ?>

</div>
