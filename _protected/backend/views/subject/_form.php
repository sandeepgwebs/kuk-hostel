<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model backend\models\subject */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="subject-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'department_id')->textInput() ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>
    <div class="three1">
         <?php

         /*$dataCategory=ArrayHelper::map(backend\models\Department::find()->asArray()->all(), 'id', 'title');
         echo $form->field($model, 'id')->dropDownList($dataCategory,
             ['prompt'=>'-Choose a Category-',
                 'onchange'=>'
                $.post( "'.Yii::$app->urlManager->createUrl('subject/views?id=').'"+$(this).val(), function(data) {
                $( "select#id" ).html( data );
                });']);

                $dataPost=ArrayHelper::map(\backend\models\Subject::find()->asArray()->all(), 'id', 'title');
                echo $form->field($model, 'id')
                ->dropDownList(
                $dataPost,
                ['id'=>'id']
                );*/
         ?>
    </div>
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
