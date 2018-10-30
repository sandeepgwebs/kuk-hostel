<?php
 echo "heloo i am viewsubject page";

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\subjectSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Subjects';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="subject-index">

 <h1><?= Html::encode($this->title) ?></h1>
 <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

 <p>
  <?= Html::a('Create Subject', ['addsubject','id' => Yii::$app->getRequest()->getQueryParam('id'), $model], ['class' => 'btn btn-success']) ?>
  <?=Html::a('Back',['index', $model],['class'=>'btn btn-primary'])?>
 </p>

 <?= GridView::widget([
     'dataProvider' => $dataProvider,
      'columns' => [
         ['class' => 'yii\grid\SerialColumn'],

         'id',
         'department_id',
         'title',

         ['class' => 'yii\grid\ActionColumn'],
     ],
 ]); ?>
</div>
