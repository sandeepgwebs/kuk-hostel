<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\faculity */

$this->title = 'Create Faculity';
$this->params['breadcrumbs'][] = ['label' => 'Faculities', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="faculity-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
