<?php
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use backend\models\designation;

?>
<div class="faclist-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php  echo $form->field($model, 'designation_id')->dropDownList(ArrayHelper::map(Designation::find()->all(),'id','title'),['prompt'=>'Select User']);?>

    <?/*= $form->field($model, 'department_id')->textInput() */?>

    <?php
    $dataCategory=ArrayHelper::map(backend\models\Department::find()->asArray()->all(), 'id', 'title');
    echo $form->field($model, 'department_id')->dropDownList($dataCategory,
        ['prompt'=>'-Choose a Category-', 'onchange'=>'
             $.post( "'.Yii::$app->urlManager->createUrl('subject/views?id=').'"+$(this).val(), function(data) {
             $( "select#id" ).html( data );
        });']);
    ?>

    <?/*= $form->field($model, 'subject_id')->textInput() */?>

    <?php
    $dataPost=ArrayHelper::map(\backend\models\Subject::find()->asArray()->all(), 'id', 'title');
    echo $form->field($model, 'subject_id')->dropDownList($dataPost,['id'=>'id']);
    ?>
    <?php ActiveForm::end(); ?>
