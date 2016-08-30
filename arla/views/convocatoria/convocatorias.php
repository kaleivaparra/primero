<?php
/* @var $this yii\web\View */

use yii\helpers\Html;
use app\assets\AppAsset;

$asset = app\assets\AppAsset::register($this);

$this->title = 'DIRECTORIO DE REVISTAS';
$this->params['breadcrumbs'][] = $this->title;
echo "Aquí van las convocatorias!";
?>


