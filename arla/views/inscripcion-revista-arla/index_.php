<?php
/* @var $this yii\web\View */

use yii\helpers\Html;
use app\assets\AppAsset;

$asset = app\assets\AppAsset::register($this);

$this->title = 'DIRECTORIO DE REVISTAS';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <div class="main-container-arla">
        <div class="left-screen">
            <h1><?= Html::encode($this->title) ?> <bold class="enumerar">› </bold> <h4>BÚSQUEDA</h4></h1>
            <table>
                <tr>
                    <td><img src="<?php echo Yii::$app->request->baseUrl; ?>/css/iconos/revista_catalogo general.png" width="30px"</></td>
                    <td>Catálogo Completo</td>
                </tr>
                <tr>
                    <td><img src="<?php echo Yii::$app->request->baseUrl; ?>/css/iconos/revista_red.png" width="30px"</></td>
                    <td>Revistas Red ARLA</td>
                </tr>
                <tr>
                    <td><img src="<?php echo Yii::$app->request->baseUrl; ?>/css/iconos/revista_historica.png" width="30px"</></td>
                    <td>Revistas Históricas</td>
                </tr>
            </table>
            <table>
                <tr>
                    <td><a href="#"> <h5 style="color: #F06424; border-bottom: 3px solid #A5AAAA;">
                                por título <bold class="enumerar">› </bold></h5></a></td>
                </tr>
                <tr>
                    <td><a href="#"> <h5 style="color: #F06424; border-bottom: 3px solid #A5AAAA;">
                                por tema <bold class="enumerar">› </bold></h5></a></td>
                </tr>
                <tr>
                    <td><a href="#"> <h5 style="color: #F06424; border-bottom: 3px solid #A5AAAA;">
                                por autor <bold class="enumerar">› </bold></h5></a></td>
                </tr>
                <tr>
                    <td><a href="#"> <h5 style="color: #F06424; border-bottom: 3px solid #A5AAAA;">
                                por editorial <bold class="enumerar">› </bold></h5></a></td>
                </tr>
                <tr>
                    <td><a href="#"> <h5 style="color: #F06424; border-bottom: 3px solid #A5AAAA;">
                                por ISSN <bold class="enumerar">› </bold></h5></a></td>
                </tr>
                <tr>
                    <td><a href="#"> <h5 style="color: #F06424; border-bottom: 3px solid #A5AAAA;">
                                por país <bold class="enumerar">› </bold></h5></a></td>
                </tr>
                <tr>
                    <td><a href="#"> <h5 style="color: #F06424; border-bottom: 3px solid #A5AAAA;">
                                por institución <bold class="enumerar">› </bold></h5></a></td>
                </tr>
            </table>
        </div>
        <div class="right-screen">
            <h1>ÚLTIMAS EDICIONES</h1>
            <div id="carousel-2" class='outerWrapper-2'>
                <div class="item-2">
                    <img src="<?php echo Yii::$app->request->baseUrl; ?>/css/images/1.100.jpg" </>
                    <h6>1:100 <h7> / 55</h7></h6>
                </div>
                <div class="item-2">
                    <img src="<?php echo Yii::$app->request->baseUrl; ?>/css/images/Arquitectura.jpg"</>
                    <h6>Revista de Arquitectura <h7> / 30</h7></h6>
                </div>
                <div class="item-2">
                    <img src="<?php echo Yii::$app->request->baseUrl; ?>/css/images/Corazonada.jpg"</>
                    <h6>Corazonada <h7> / 12</h7></h6>
                </div>
                <div class="item-2">
                    <img src="<?php echo Yii::$app->request->baseUrl; ?>/css/images/Urbano.jpg"</>
                    <h6>Urbano <h7> / 32</h7></h6>
                </div>
                <div class="item-2">
                    <img src="<?php echo Yii::$app->request->baseUrl; ?>/css/images/1.100.jpg" </>
                    <h6>1:100 <h7> / 55</h7></h6>
                </div>
                <div class="item-2">
                    <img src="<?php echo Yii::$app->request->baseUrl; ?>/css/images/Arquitectura.jpg"</>
                    <h6>Revista de Arquitectura <h7> / 30</h7></h6>
                </div>
                <div class="item-2">
                    <img src="<?php echo Yii::$app->request->baseUrl; ?>/css/images/Corazonada.jpg"</>
                    <h6>Corazonada <h7> / 12</h7></h6>
                </div>
                <div class="item-2">
                    <img src="<?php echo Yii::$app->request->baseUrl; ?>/css/images/Urbano.jpg"</>
                    <h6>Urbano <h7> / 32</h7></h6>
                </div>
            </div>  
            <div class="cat-historico">
                <h1>ARCHIVO</h1>
                <div id="carousel-historico" class='outerWrapper-2'>
                    <div class="item-2">
                        <img src="<?php echo Yii::$app->request->baseUrl; ?>/css/images/1.100.jpg" </>
                        <h6>1:100 <h7> / 55</h7></h6>
                    </div>
                    <div class="item-2">
                        <img src="<?php echo Yii::$app->request->baseUrl; ?>/css/images/Arquitectura.jpg"</>
                        <h6>Revista de Arquitectura <h7> / 30</h7></h6>
                    </div>
                    <div class="item-2">
                        <img src="<?php echo Yii::$app->request->baseUrl; ?>/css/images/Corazonada.jpg"</>
                        <h6>Corazonada <h7> / 12</h7></h6>
                    </div>
                    <div class="item-2">
                        <img src="<?php echo Yii::$app->request->baseUrl; ?>/css/images/Urbano.jpg"</>
                        <h6>Urbano <h7> / 32</h7></h6>
                    </div>
                    <div class="item-2">
                        <img src="<?php echo Yii::$app->request->baseUrl; ?>/css/images/1.100.jpg" </>
                        <h6>1:100 <h7> / 55</h7></h6>
                    </div>
                    <div class="item-2">
                        <img src="<?php echo Yii::$app->request->baseUrl; ?>/css/images/Arquitectura.jpg"</>
                        <h6>Revista de Arquitectura <h7> / 30</h7></h6>
                    </div>
                    <div class="item-2">
                        <img src="<?php echo Yii::$app->request->baseUrl; ?>/css/images/Corazonada.jpg"</>
                        <h6>Corazonada <h7> / 12</h7></h6>
                    </div>
                    <div class="item-2">
                        <img src="<?php echo Yii::$app->request->baseUrl; ?>/css/images/Urbano.jpg"</>
                        <h6>Urbano <h7> / 32</h7></h6>
                    </div>
                </div>  
            </div>
        </div>
    </div>
</div>
