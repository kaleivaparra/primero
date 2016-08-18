<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Evaluadores */

$this->title = 'Create Evaluadores';
$this->params['breadcrumbs'][] = ['label' => 'Evaluadores', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="evaluadores-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
