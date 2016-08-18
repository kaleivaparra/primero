<?php
/* @var $this yii\web\View */

use yii\helpers\Html;
use app\assets\AppAsset;

$asset = app\assets\AppAsset::register($this);

$this->title = 'ARLA';
$this->params['breadcrumbs'][] = $this->title;
?>
<script type="text/javascript">
    function queHacemos() {
        document.getElementById('arla-quienes-somos').style.display = 'none';
        document.getElementById('que-hacemos').style.display = 'block';
    }
    function quienesSomos() {
        document.getElementById('que-hacemos').style.display = 'none';
        document.getElementById('arla-quienes-somos').style.display = 'block';
    }
</script>
<div class="sub-menu">
    <a href="#" onclick="queHacemos()"><h1>¿Qué hacemos?</h1></a>
    <a href="#" onclick="quienesSomos()"><h1>¿Quiénes somos?</h1></a>
</div>
<div class="site-about">
    <div class="main-container-arla">
        <div class="arla-quienes-somos" id="arla-quienes-somos">
            <div class="nucl-coordinador">
                <h1><?= Html::encode($this->title) ?> <bold class="enumerar">› </bold> ¿quiénes somos?</h1>
                </br>
                <h1>NÚCLEO COORDINADOR ARLA</h1>
                <table>
                    <tr>
                        <td><img src="<?php echo Yii::$app->request->baseUrl; ?>/css/images/perfil.jpg" width="100px"</></td>
                        <td><b style="color: #F06424">Hernán Ascuí</b></br>
                            <img src="<?php echo Yii::$app->request->baseUrl; ?>/css/iconos/bandera_chile.png" width="30px" height="27px"</></br>
                    <bold class="enumerar">› </bold>Editor Revista Arquitecturas del Sur </br>
                    <bold class="enumerar">› </bold>Departamento de Diseño y Teoría de la arquitectura, Universidad del Bío-Bío Concepción, Chile </br>
                    <span style="color: #F06424">hascuif@gmail.com</span>
                    </td>
                    </tr>
                    <tr>
                        <td><img src="<?php echo Yii::$app->request->baseUrl; ?>/css/images/perfil.jpg" width="100px"</></td>
                        <td><b style="color: #F06424">Patricia Méndez</b></br>
                            <img src="<?php echo Yii::$app->request->baseUrl; ?>/css/iconos/bandera_argentina.png" width="30px" height="27px"</></br>
                    <bold class="enumerar">› </bold>Directora revista DANA, Documentos de Arquitectura Nacional y Americana </br>
                    <bold class="enumerar">› </bold>CEDODAL, Centro de Documentación de Arquitectura Latinoamericana Buenos Aires, Argentina
                    <span style="color: #F06424">mail</span>
                    </td>
                    </tr>
                </table>
            </div>
            <div class="rep-regionales">
                <h1>REPRESENTANTES REGIONALES</h1>

                <table>
                    <tr>
                        <td><img src="<?php echo Yii::$app->request->baseUrl; ?>/css/images/perfil.jpg" width="100px"</></td>
                        <td><b style="color: #F06424">ANDES NORTE</b></br>
                            <img src="<?php echo Yii::$app->request->baseUrl; ?>/css/iconos/bandera_ecuador.png" width="30px" height="27px"</>
                            <img src="<?php echo Yii::$app->request->baseUrl; ?>/css/iconos/bandera_colombia.png" width="30px" height="27px"</>
                            <img src="<?php echo Yii::$app->request->baseUrl; ?>/css/iconos/bandera_venezuela.png" width="30px" height="27px"</></br>
                            <b style="color: #F06424">César Eligio</b></br>
                    <bold class="enumerar">› </bold>Revista de Arquitectura </br>
                    Facultad de Arquitectura, Universidad Católica de Colombia, Colombia </br>
                    <span style="color: #F06424">mail</span>
                    </td>
                    </tr>
                    <tr>
                        <td><img src="<?php echo Yii::$app->request->baseUrl; ?>/css/images/perfil.jpg" width="100px"</></td>
                        <td><b style="color: #F06424">ANDES SUR</b></br>
                            <img src="<?php echo Yii::$app->request->baseUrl; ?>/css/iconos/bandera_chile.png" width="30px" height="30px"</>
                            <img src="<?php echo Yii::$app->request->baseUrl; ?>/css/iconos/bandera_bolivia.png" width="30px" height="27px"</>
                            <img src="<?php echo Yii::$app->request->baseUrl; ?>/css/iconos/bandera_peru.png" width="38px" height="27px"</></br>
                            <b style="color: #F06424">Elisa Cordero</b></br>
                    <bold class="enumerar">› </bold>Revista AUS </br>
                    Instituto de Arquitectura y Urbanismo, Universidad Austral de Chile </br>
                    <span style="color: #F06424">mail</span>
                    </td>
                    </tr>
                    <tr>
                        <td><img src="<?php echo Yii::$app->request->baseUrl; ?>/css/images/perfil.jpg" width="100px"</></td>
                        <td><b style="color: #F06424">RÍO DE LA PLATA</b></br>
                            <img src="<?php echo Yii::$app->request->baseUrl; ?>/css/iconos/bandera_argentina.png" width="30px" height="27px"</>
                            <img src="<?php echo Yii::$app->request->baseUrl; ?>/css/iconos/bandera_paraguay.png" width="30px" height="27px"</>
                            <img src="<?php echo Yii::$app->request->baseUrl; ?>/css/iconos/bandera_uruguay.png" width="45px" height="40px"</></br>
                            <b style="color: #F06424">Rodrigo Amuchástegui</b></br>
                    <bold class="enumerar">› </bold>Revista ÁREA </br>
                    Facultad de Arquitectura, Diseño y Urbanismo, Universidad de Buenos Aires, Argentina </br>
                    <span style="color: #F06424">mail</span>
                    </td>
                    </tr>
                </table>
            </div>

            <div class="rep-regionales2">
                <table>
                    <tr>
                        <td><img src="<?php echo Yii::$app->request->baseUrl; ?>/css/images/perfil.jpg" width="100px"</></td>
                        <td><b style="color: #F06424">BRASIL</b></br>
                            <img src="<?php echo Yii::$app->request->baseUrl; ?>/css/iconos/bandera_brasil.png" width="30px" height="27px"</></br>
                            <b style="color: #F06424">Abilio Guerra</b></br>
                            <b style="color: #F06424">Silvana Romano Santos</b></br>
                    <bold class="enumerar">› </bold>Portal Vitruvius </br>
                    Romano Guerra Editora </br>
                    <span style="color: #F06424">hascuif@gmail.com</span>
                    </td>
                    </tr>
                    <tr>
                        <td><img src="<?php echo Yii::$app->request->baseUrl; ?>/css/images/perfil.jpg" width="100px"</></td>
                        <td><b style="color: #F06424">MÉXICO, CENTROAMÉRICA Y EL CARIBE</b></br>
                            <img src="<?php echo Yii::$app->request->baseUrl; ?>/css/iconos/bandera_mexico.png" width="40px" height="27px"</></br>
                            <b style="color: #F06424">Gladys Arana López</b></br>
                    <bold class="enumerar">› </bold>Cuadernos de Arquitectura, Universidad Autónoma de Yucatán </br>
                    <span style="color: #F06424">mail</span>
                    </td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="que-hacemos" id="que-hacemos" style="display: none">
            <div class="nucl-coordinador">
                <h1><?= Html::encode($this->title) ?> > ¿qué hacemos?</h1>
                </br>
                <h1>NÚCLEO COORDINADOR ARLA</h1>
                <table>
                    <tr>
                        <td>aa</td>
                        <td>a</td>
                    </tr>
                    <tr>
                        <td>a</td>
                        <td>a</td>
                    </tr>
                </table>
            </div>
            <div class="rep-regionales">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>
            </div>
        </div>
    </div>
</div>
