<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\sliderimages */

$this->title = 'Create Sliderimages';
$this->params['breadcrumbs'][] = ['label' => 'Sliderimages', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sliderimages-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
