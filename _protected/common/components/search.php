<?php
namespace common\components;

use backend\models\faclist;
use yii\base\widget;


class Search extends Widget{
    public function run(){
        $model = faclist::find()->all();
        return $this->render('faclistform',['model'=>$model]);
    }
}
?>