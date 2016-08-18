<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Usuario */

$this->title = $model->usu_codigo;
$this->params['breadcrumbs'][] = ['label' => 'Usuarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="usuario-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->usu_codigo], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->usu_codigo], [
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
            'usu_codigo',
            'usu_username',
            'usu_nombres',
            'usu_apellido_paterno',
            'usu_apellido_materno',
            'usu_email_institucional:email',
            'usu_email_alternativo:email',
            'usu_password',
            'authKey',
            'accessToken',
            'activate',
            'eu_codigo',
            'usu_fecha_creacion',
            'usu_cargo',
        ],
    ]) ?>

</div>
