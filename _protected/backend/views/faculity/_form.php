<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\Department;
use backend\models\Subject;
use backend\models\Designation;

/* @var $this yii\web\View */
/* @var $model backend\models\faculity */
/* @var $form yii\widgets\ActiveForm */

?>

<div class="faculity-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'image')->fileInput() ?>

    <div class="three">
        <div class="three1">
            <?=$form->field($model, 'name')->dropDownList(ArrayHelper::map(Designation::find()->all(),'id','title'),['prompt'=>'Select User']);?>
        </div>
        <div class="three1">
             <?=$form->field($model, 'name')->dropDownList(ArrayHelper::map(Department::find()->all(),'id','title'),['prompt'=>'Select User']);?>
        </div>
        <div class="three1">

        </div>

        <div class="form-group">
            <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
            <?= Html::a('Back',['index', $model],['class'=>'btn btn-primary'])?>
        </div>

    <?php ActiveForm::end(); ?>

</div>
