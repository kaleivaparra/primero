<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TemasEvaluador */

$this->title = 'Create Temas Evaluador';
$this->params['breadcrumbs'][] = ['label' => 'Temas Evaluadors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="temas-evaluador-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
