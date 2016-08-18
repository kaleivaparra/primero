<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Usuario */
use app\assets\AppAsset;
$asset = app\assets\AppAsset::register($this);
$this->title = 'Solicitud de Inscripción en ARLA';
$this->params['breadcrumbs'][] = ['label' => 'Usuarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="usuario-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'msg' => $msg,
        'modelRevista' => $modelRevista,
    ]) ?>

</div>

