<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\sliderimages */

$this->title = 'Update Sliderimages: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Sliderimages', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="sliderimages-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
