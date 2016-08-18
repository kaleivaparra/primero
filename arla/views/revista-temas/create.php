<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\RevistaTemas */

$this->title = 'Create Revista Temas';
$this->params['breadcrumbs'][] = ['label' => 'Revista Temas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="revista-temas-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
