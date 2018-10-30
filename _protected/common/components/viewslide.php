<?php
// create widgets

namespace common\components;

use backend\models\SliderImages;
use backend\models\Notice;
use yii\base\widget;

class ViewSlide extends widget
{
    public function run(){
        $model = SliderImages::findall(['slider_id'=>1]);

        $notice = notice::find()->all();

        return $this->render('showslid',['model'=>$model,'notice'=> $notice]);
    }
}