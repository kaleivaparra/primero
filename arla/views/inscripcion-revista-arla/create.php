<?php

use yii\helpers\Html;
/* @var $this yii\web\View */
use app\assets\AppAsset;
$this->title = 'ARLA';
$asset = app\assets\AppAsset::register($this);

/* @var $this yii\web\View */
/* @var $model app\models\InscripcionRevistaArla */

$this->title = 'Crear Revista en Directorio ARLA';
$this->params['breadcrumbs'][] = ['label' => 'Inscripcion Revista Arlas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="inscripcion-revista-arla-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'msg' => $msg,
        'modelIdiomaRevista' => $modelIdiomaRevista,
        'modelTemasRevista' => $modelTemasRevista,
        'modelIndexaRevista' => $modelIndexaRevista
    ]) ?>

</div>
