<?php
use yii\helpers\Html;
use common\components\viewslide;

use common\components\latestpost;

//call view page viewslide common models

/* @var $this yii\web\View */
$this->title = Yii::t('app', Yii::$app->name);

?>
   <?= viewslide::widget() ?>

   <?=latestpost::widget() ?>


<div class="about-section">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h2 class="head2">About</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-12 col-xs-12 pull-right">
                <img src="<?=Yii::$app->view->theme->baseUrl;?>/images/about.jpg">
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12 pull-left">
                <h3>Indian students at kurukshetra university</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries</p>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries</p>
                <a href="#">Read more</a>
            </div>
        </div>
    </div>
</div>
<div class="gallery-section">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h2 class="head2">Gallery</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="image-box">
                    <img src="<?=Yii::$app->view->theme->baseUrl;?>/images/gallery1.jpg">
                    <h3>Nice library</h3>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="image-box">
                    <img src="<?=Yii::$app->view->theme->baseUrl;?>/images/gallery2.jpg">
                    <h3>Nice library</h3>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="image-box">
                    <img src="<?=Yii::$app->view->theme->baseUrl;?>/images/gallery3.jpg">
                    <h3>Nice library</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-9 col-sm-12">
                <div class="image-box">
                    <img src="<?=Yii::$app->view->theme->baseUrl;?>/images/gallery4.jpg">
                    <h3>Nice library</h3>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="image-box">
                    <img src="<?=Yii::$app->view->theme->baseUrl;?>/images/gallery5.jpg">
                    <h3>Nice library</h3>
                </div>
            </div>
        </div>
    </div>
</div>