<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\sliderimagesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Sliderimages';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sliderimages-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Sliderimages', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'id',
            'slider_id',
            'title',
            'description:ntext',
            'images',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
