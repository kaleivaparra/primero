<?php

/* @var $this yii\web\View */
use app\assets\AppAsset;
$this->title = 'ARLA';
$asset = app\assets\AppAsset::register($this);

?>
<div class="site-index">
    <div id="banner-wrap">
      <div id="banner">
          <h1>ÚLTIMAS EDICIONES</h1>
          <div class="wsite-header">
            <div id="carousel" class='outerWrapper'>
                <div class="item">
                    <img src="<?php echo Yii::$app->request->baseUrl;?>/css/images/1.100.jpg" </>
                    <h5>1:100 / 55</h5>
                </div>
                <div class="item">
                    <img src="<?php echo Yii::$app->request->baseUrl;?>/css/images/Arquitectura.jpg"</>
                    <h5>Revista de Arquitectura / 30</h5>
                </div>
                <div class="item">
                    <img src="<?php echo Yii::$app->request->baseUrl;?>/css/images/Corazonada.jpg"</>
                    <h5>Corazonada / 12</h5>
                </div>
                <div class="item">
                    <img src="<?php echo Yii::$app->request->baseUrl;?>/css/images/Urbano.jpg"</>
                    <h5>Urbano / 32</h5>
                </div>
                <div class="item">
                    <div>5</div>
                </div>
                <div class="item">
                    <div>6</div>
                </div>
                <div class="item">
                    <div>7</div>
                </div>
                <div class="item">
                    <div>8</div>
                </div>
                <div class="item">
                    <div>9</div>
                </div>
                <div class="item">
                    <div>10</div>
                </div>
                <div class="item">
                    <div>11</div>
                </div>
                <div class="item">
                    <div>12</div>
                </div>
            </div>   
          </div>
      </div>
    </div>
    </div>
<!--    <div class="jumbotron">
        <h1>Congratulations!</h1>

        <p class="lead">You have successfully created your Yii-powered application.</p>

        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p>
    </div>-->

    <div class="body-content">

        <div class="row">
            <div class="art-conv">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/doc/">Yii Documentation &raquo;</a></p>
            </div>
            <div class="cata-historico">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/forum/">Yii Forum &raquo;</a></p>
            </div>
<!--            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/extensions/">Yii Extensions &raquo;</a></p>
            </div>-->
        </div>

    </div>
</div>
