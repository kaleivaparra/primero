<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\IdiomaRevista */

$this->title = 'Create Idioma Revista';
$this->params['breadcrumbs'][] = ['label' => 'Idioma Revistas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="idioma-revista-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
