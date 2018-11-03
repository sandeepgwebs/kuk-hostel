<?php

namespace common\components;
use backend\models\Faculity;
use yii\base\widget;

class Faculitys extends Widget
{
    public function run(){
        $model = faculity::find()->all();
        return $this->render('faculitysir',['model'=>$model]);
    }
}
?>