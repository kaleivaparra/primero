<?php
use yii\helpers\Html;
use yii\widgets\Menu;
use yii\widgets\Breadcrumbs;
use yii\debug\Toolbar;
use yii\bootstrap\Nav;

// You can use the registerAssetBundle function if you'd like
//$this->registerAssetBundle('app');
use app\assets\AppAsset;
$asset = app\assets\AppAsset::register($this);
$baseUrl=$asset->baseUrl;
?>
<?php $this->beginPage(); ?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
<title><?php echo Html::encode($this->title); ?></title>
<meta property='og:site_name' content='<?php echo Html::encode($this->title); ?>' />
<meta property='og:title' content='<?php echo Html::encode($this->title); ?>' />
<meta property='og:description' content='<?php echo Html::encode($this->title); ?>' />

<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

<!--<link rel='stylesheet' type='text/css' href='<?php //echo $this->theme->baseUrl; ?>/files/main_style.css' title='wsite-theme-css' />-->
<link href='http://fonts.googleapis.com/css?family=Advent+Pro:400,700' rel='stylesheet' type='text/css' />
<?php $this->head(); ?>
</head>
<body class='wsite-theme-light tall-header-page wsite-page-index weeblypage-index'>
<?php $this->beginBody(); ?>
 <?php //echo Html::encode(\Yii::$app->name); ?>
<div id="wrap">
  <div id="header-top">
    <table id="header">
      <tr>
          <td id="logo"><span class='wsite-logo'><a href='/'><span id="wsite-title"><img src="<?php echo $baseUrl?>/files/theme/logo.jpg" width="400px"></span></a></span></td>
        <td id="header-right">
          <table>
            <tr>
              <td class="phone-number"></td>
              <td class="social"></td>
            </tr>
          </table>
          <div class="search"></div>
        </td>
      </tr>
    </table>
    <div id="topnav">
      <div id="nav-right">
        <div id="nav-inner">
          <?php // echo Menu::widget(array(
//            'options' => array('class' => 'nav'),
//            'items' => array(
//              array('label' => 'Inicio', 'url' => array('/site/index')),
//              array('label' => '¿Quiénes Somos?', 'url' => array('/site/about')),
//              array('label' => 'Inscripción', 'url' => array('/site/about')),
//              array('label' => 'Revistas', 'url' => array('/site/about'),'items' => array(
//                array('label' => 'Directorio', 'url' => ('product/index')),
//                array('label' => 'Catálogo Histórico', 'url' => ('product/index')),
//                array('label' => 'Catálogo Indexado', 'url' => ('product/index')),
//              )),
//              array('label' => 'Convocatorias', 'url' => array('/site/about')),
//              array('label' => 'Contacto', 'url' => array('/site/contact')),
//              Yii::$app->user->isGuest ?
//                array('label' => 'Login', 'url' => array('/site/login')) :
//                array('label' => 'Logout (' . Yii::$app->user->identity->usu_username .')' , 'url' => array('/site/logout')),
//            ),
//          )); 
          
          echo Nav::widget([
    'items' => [
        [
            'label' => 'Inicio',
            'url' => ['site/index'],
            //'linkOptions' => [...],
        ],
        [
            'label' => '¿Quiénes Somos?',
            'url' => ['site/about'],
            //'linkOptions' => [...],
        ],
        [
            'label' => 'Inscripción',
            'url' => ['site/about'],
            //'linkOptions' => [...],
        ],
        [
            'label' => 'Revistas',
            'items' => [
                 ['label' => 'Directorio', 'url' => '#'],
                 '<li class="divider"></li>',
                 //'<li class="dropdown-header">Dropdown Header</li>',
                 ['label' => 'Catálogo Histórico', 'url' => '#'],
                 ['label' => 'Catálogo Indexado', 'url' => '#'],
            ],
        ],
        [
            'label' => 'Convocatorias',
            'url' => ['site/about'],
            //'linkOptions' => [...],
        ],
        [
            'label' => 'Contacto',
            'url' => ['site/contact'],
            //'linkOptions' => [...],
        ],
        Yii::$app->user->isGuest ?
        [
            'label' => 'Login',
            'url' => ['site/login'],
            //'visible' => Yii::$app->user->isGuest
        ]:
        [
            'label' => 'Logout(' . Yii::$app->user->identity->usu_username .')' , 
            'url' => ['site/logout'],
        ],
        
    ],
]);?>
          <div style="clear:both"></div>
        </div>
      </div>
    </div>
  </div>
  <div id="main">
    <div id="content"><div id='wsite-content' class='wsite-not-footer'>
      <?php echo $content; ?>
</div>
</div>
  </div>
  <div id="footer-container">
    <div id="footer"><?php echo Html::encode(\Yii::$app->name); ?>
</div>
  </div>
</div>
<?php $this->endBody(); ?>
</body>
</html>
<?php $this->endPage(); ?>