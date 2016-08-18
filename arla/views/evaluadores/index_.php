<?php
/* @var $this yii\web\View */

use yii\helpers\Html;
use app\assets\AppAsset;

$asset = app\assets\AppAsset::register($this);

$this->title = 'DIRECTORIO DE EVALUADORES';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <div class="main-container-arla">
        <div class="left-screen">
            <h1>BÚSQUEDA</h1>
            <table>
                <tr>
                    <td><a href="#"> <h5 style="color: #F06424; border-bottom: 3px solid #A5AAAA;">
                                por nombre <bold class="enumerar">› </bold></h5></a></td>
                </tr>
                <tr>
                    <td><a href="#"> <h5 style="color: #F06424; border-bottom: 3px solid #A5AAAA;">
                                por tema <bold class="enumerar">› </bold></h5></a></td>
                </tr>
            </table>
        </div>
        <div class="right-screen">
            <div class="busq-ev">
                <h1 class="linea"><?= Html::encode($this->title) ?> <span class="enumerar">› </span> <h4 class="linea">BÚSQUEDA</h4></h1>

                <table>
                    <tr>
                        <td><img src="<?php echo Yii::$app->request->baseUrl; ?>/css/images/perfil.jpg" width="100px"</></td>
                        <td><b style="color: #F06424">César Eligio</b><img class ="banderas" src="<?php echo Yii::$app->request->baseUrl; ?>/css/iconos/bandera_ecuador.png" width="30px" height="27px"</>
                            </br>
                    <span class="enumerar">› </span>Institución (no revista) </br>
                    <span style="color: #F06424">temas: #</span>arquitectura<span style="color: #F06424"> #</span>urbanismo <span style="color: #F06424"> #</span>interiorismo </br>
                    <span style="color: #F06424">mail</span>
                    </td>
                    </tr>
                    <tr>
                        <td><img src="<?php echo Yii::$app->request->baseUrl; ?>/css/images/perfil.jpg" width="100px"</></td>
                        <td><b style="color: #F06424">César Eligio</b><img class ="banderas" src="<?php echo Yii::$app->request->baseUrl; ?>/css/iconos/bandera_ecuador.png" width="30px" height="27px"</>
                            </br>
                    <span class="enumerar">› </span>Institución (no revista) </br>
                    <span style="color: #F06424">temas: #</span>arquitectura<span style="color: #F06424"> #</span>urbanismo <span style="color: #F06424"> #</span>interiorismo </br>
                    <span style="color: #F06424">mail</span>
                    </td>
                    </tr>
                    <tr>
                        <td><img src="<?php echo Yii::$app->request->baseUrl; ?>/css/images/perfil.jpg" width="100px"</></td>
                        <td><b style="color: #F06424">César Eligio</b><img class ="banderas" src="<?php echo Yii::$app->request->baseUrl; ?>/css/iconos/bandera_ecuador.png" width="30px" height="27px"</>
                            </br>
                    <span class="enumerar">› </span>Institución (no revista) </br>
                    <span style="color: #F06424">temas: #</span>arquitectura<span style="color: #F06424"> #</span>urbanismo <span style="color: #F06424"> #</span>interiorismo </br>
                    <span style="color: #F06424">mail</span>
                    </td>
                    </tr>
                </table>
            </div>

            <div class="ev">
                <table>
                    <tr>
                        <td><img src="<?php echo Yii::$app->request->baseUrl; ?>/css/images/perfil.jpg" width="100px"</></td>
                        <td><b style="color: #F06424">César Eligio</b><img class ="banderas" src="<?php echo Yii::$app->request->baseUrl; ?>/css/iconos/bandera_ecuador.png" width="30px" height="27px"</>
                            </br>
                    <span class="enumerar">› </span>Institución (no revista) </br>
                    <span style="color: #F06424">temas: #</span>arquitectura<span style="color: #F06424"> #</span>urbanismo <span style="color: #F06424"> #</span>interiorismo </br>
                    <span style="color: #F06424">mail</span>
                    </td>
                    </tr>
                    <tr>
                        <td><img src="<?php echo Yii::$app->request->baseUrl; ?>/css/images/perfil.jpg" width="100px"</></td>
                        <td><b style="color: #F06424">César Eligio</b><img class ="banderas" src="<?php echo Yii::$app->request->baseUrl; ?>/css/iconos/bandera_ecuador.png" width="30px" height="27px"</>
                            </br>
                    <span class="enumerar">› </span>Institución (no revista) </br>
                    <span style="color: #F06424">temas: #</span>arquitectura<span style="color: #F06424"> #</span>urbanismo <span style="color: #F06424"> #</span>interiorismo </br>
                    <span style="color: #F06424">mail</span>
                    </td>
                    </tr>
                    <tr>
                        <td><img src="<?php echo Yii::$app->request->baseUrl; ?>/css/images/perfil.jpg" width="100px"</></td>
                        <td><b style="color: #F06424">César Eligio</b><img class ="banderas" src="<?php echo Yii::$app->request->baseUrl; ?>/css/iconos/bandera_ecuador.png" width="30px" height="27px"</>
                            </br>
                    <span class="enumerar">› </span>Institución (no revista) </br>
                    <span style="color: #F06424">temas: #</span>arquitectura<span style="color: #F06424"> #</span>urbanismo <span style="color: #F06424"> #</span>interiorismo </br>
                    <span style="color: #F06424">mail</span>
                    </td>
                    </tr>
                </table>
            </div> 
        </div>
    </div>
</div>
