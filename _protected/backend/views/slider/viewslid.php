<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $model backend\models\sliderimages */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Sliderimages', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sliderimages-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
     <?=Html::a('Create new slide',['addslid','id' => Yii::$app->getRequest()->getQueryParam('id'), $model],['class'=>'btn btn-primary'])?>
     <?=Html::a('Back',['index', $model],['class'=>'btn btn-primary'])?>
    </p>

 <?= GridView::widget([
     'dataProvider' => $data,
     'summary' => false,
     'columns' => [
         ['class' => 'yii\grid\SerialColumn'],
         'title',
         'description',
         [
             //view images backend
             'attribute'=>'images',
             'value' => function ($model) {
                 return \yii\helpers\Html::img('@uploads/' .$model->images,[ 'width' => '120px', 'height' => '80px']);
              },
             'format' => 'raw',
         ],

      // buttons
         ['class' => 'yii\grid\ActionColumn',
             'header' => "Menu",
             'template' => '{edit-slide} {deleteslide}',
             'buttons' => [
                 'edit-slide' =>function ($url, $model, $key) {
                  $options = array_merge([
                      'title' => Yii::t('yii', 'Edit slide'),
                      'aria-label' => Yii::t('yii', 'Edit Slide'),
                      'data-pjax' => '0',
                  ], []);
                  return Html::a('<i class="glyphicon glyphicon-pencil"></i>', ['editslid','id'=>$model->id], $options);
                 },

                 'deleteslide' => function ($url, $model) {
                  return Html::a('<span class="glyphicon glyphicon-trash"></span>', ['deleteslide','id'=>$model->slider_id,'id'=>$model->id], [
                      'title' => Yii::t('app', 'Delete slide'),
                      'data' => [
                          'confirm' => Yii::t('app', 'Are you sure you want to delete this Slide?'),
                          'method' => 'post']
                  ]);
                 }
             ]
         ], // ActionColumn
     ], // columns
 ]); ?>



</div>
