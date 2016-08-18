<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\IndexacionesRevista */

$this->title = 'Create Indexaciones Revista';
$this->params['breadcrumbs'][] = ['label' => 'Indexaciones Revistas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="indexaciones-revista-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
