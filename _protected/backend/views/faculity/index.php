<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\faculitySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Faculities';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="faculity-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Faculity', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'name',
            'email:email',
            'phone',
            //view image backend
            [
                'attribute'=>'image',
                'value' => function ($model) {
                    return \yii\helpers\Html::img('@uploads/faculity/' .$model->image,[ 'width' => '120px', 'height' => '80px']);
                },
                'format' => 'raw',
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
