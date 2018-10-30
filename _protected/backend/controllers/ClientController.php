<?php
namespace backend\controllers;
use Yii;
use yii\web\Controller;
use backend\models\Slider;


class ClientController extends Controller
{

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionProfile()
    {
        return $this->render('profile');
    }

    public function actionNewslider()
    {
        return $this->render('slider');
    }


    public function actionSlider()
    {
        $model = new slider();

        if ($model->load(Yii::$app->request->post()) && $model->validate())
        {
            //return $this->render('entryconfirm', ['model' => $model]);
            if($model->save()){
                return $this->refresh();
            }
        }
        else{
            echo "hello";
            return $this->render('sliderform', ['model' => $model]);
        }
    }
}
