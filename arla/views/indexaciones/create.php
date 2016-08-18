<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Indexaciones */

$this->title = 'Create Indexaciones';
$this->params['breadcrumbs'][] = ['label' => 'Indexaciones', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="indexaciones-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
