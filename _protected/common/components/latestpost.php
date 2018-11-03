<?php

namespace common\components;
use backend\models\News;
use yii\base\widget;

class LatestPost extends Widget
{
    public function run(){
        $model = news::find()->all();
        return $this->render('latestposts',['model'=>$model]);
    }
}

?>