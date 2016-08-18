<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\PerfilesUsuario */

$this->title = 'Create Perfiles Usuario';
$this->params['breadcrumbs'][] = ['label' => 'Perfiles Usuarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="perfiles-usuario-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
