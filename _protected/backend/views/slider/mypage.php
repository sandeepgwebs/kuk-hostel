<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\sliderimages */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sliderimages-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'title')->textInput() ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'images')->fileInput() ?>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
        <?=Html::a('Back',['index', $model],['class'=>'btn btn-primary'])?>

    </div>

    <?php ActiveForm::end(); ?>

</div>
