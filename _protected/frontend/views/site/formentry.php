<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<?php $form = ActiveForm::begin(['options' => ['id' => 'Addpost']]); ?>
<?= $form->field($model, 'name') ?>
<?= $form ->field($model, 'email') ?>

	<div class="form-group">
		<?= Html::submitButton('submit', ['class' => 'btn btn-primary']) ?>
	</div>

<?php ActiveForm::end(); ?>