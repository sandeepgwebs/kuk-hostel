<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<h1>Create new a slider</h1>
<?php $form = ActiveForm::begin(); ?>


    <div class="form-group">
        <?= Html::submitButton('submit', ['class' => 'btn btn-primary']) ?>
    </div>

<?php ActiveForm::end(); ?>