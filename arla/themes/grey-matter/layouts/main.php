<?php
use yii\helpers\Html;
use yii\widgets\Menu;
use yii\widgets\Breadcrumbs;
use yii\debug\Toolbar;

// You can use the registerAssetBundle function if you'd like
//$this->registerAssetBundle('app');
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
<?php $this->head(); ?>
</head>
<body class='wsite-theme-light tall-header-page wsite-page-index weeblypage-index'>
  <?php $this->beginBody(); ?>
<div id="container">
  <table id="header">
    <tr>
      <td id="logo"><span class='navbar-brand'><a href='#'><span id="wsite-title"><img src="<?php echo Yii::$app->request->baseUrl;?>/css/images/logo ARLA_1.jpg" width="180px"</></span></a></span></td>
      <td id="header-right">
          <form method="get">
              <div class="search"><input type="search" placeholder="Buscar" name="q" value="<?=isset($_GET['q']) ? CHtml::encode($_GET['q']) : '' ; ?>" />
                  <input type="submit" value="BUSCAR" /></div>
</form>
          </td>
      <td id="header-right">
     <?php echo Menu::widget(array(
        'options' => array('class' => 'nav'),
        'items' => array(
            array('label' => 'Contacto', 'url' => array('/site/contact')),
          Yii::$app->user->isGuest ?
            array('label' => 'Login', 'url' => array('/site/login')) :
            array('label' => 'Logout (' . Yii::$app->user->identity->usu_username .')' , 'url' => array('/site/logout')),
          ),
          
      )); ?>

      </td>
    </tr>
  </table>
  <div id="main">
    <div id="navigation">
 <?php echo Menu::widget(array(
        'options' => array('class' => 'nav'),
        'items' => array(
          array('label' => 'INICIO', 'url' => array('/site/index')),
          array('label' => 'ARLA', 'url' => array('/site/about')),
          array('label' => 'DIRECTORIO DE EVALUADORES', 'url' => array('/evaluadores/index_')),
          array('label' => 'DIRECTORIO DE REVISTAS', 'url' => array('/inscripcion-revista-arla/index_')),
          array('label' => 'REGISTRO DE REVISTAS', 'url' => array('/usuario/create')),
          array('label' => 'CONVOCATORIAS VIGENTES', 'url' => array('/site/contact')),
        ),
      )); ?>
      <div class="clear"></div>
    </div>
    <div class="banner-container">

    <div id="content">
      <!--<div id='wsite-content' class='wsite-not-footer'>-->
         <?php echo $content; ?>
<!--</div>-->

      <div class="clear"></div>
    </div>
  </div>
  <div id="footer">
    <?php echo Html::encode(\Yii::$app->name); ?>

    <div class="clear"></div>
  </div>
</div>

<?php $this->endBody(); ?>
</body>
  <script type="text/javascript">
          $(document).ready(function() {
                  $('#carousel').waltzer({
                          scroll:4, 
                          circular:false
                  });
                  
                  $('#carousel-2').waltzer({
                          scroll:4, 
                          circular:false
                  });
                  
                  $('#carousel-historico').waltzer({
                          scroll:4, 
                          circular:false
                  });
          });
  </script>
</html>
<?php $this->endPage(); ?>