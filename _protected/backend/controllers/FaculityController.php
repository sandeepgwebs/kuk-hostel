<?php

namespace backend\controllers;

use Yii;
use backend\models\faculity;
use backend\models\faculitySearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use yii\data\ActiveDataProvider;
use backend\models\faclist;
/**
 * FaculityController implements the CRUD actions for faculity model.
 */
class FaculityController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all faculity models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new faculitySearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single faculity model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
       $model = new faclist();
        $dataProvider = new ActiveDataProvider([
            'query' => Faclist::find()->where(['id' =>$id]),
        ]);
        return $this->render('faculityview', [
            'model' => $model, 'dataProvider'=>$dataProvider]);

    }



    /**
     * Creates a new faculity model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new faculity();
        if ($model->load(Yii::$app->request->post()))
        {
        if (UploadedFile::getInstance($model, 'image') != null)
        {
          $model->image = UploadedFile::getInstance($model, 'image');
        }
        if ($model->validate() && $model->image->saveAs('../uploads/faculity/' . $model->image->baseName . '.' . $model->image->extension))
        {
            $model->save();
            return $this->redirect(['view', 'id' => $model->id]);
        }
        }
        return $this->render('create', [
           'model' => $model,
        ]);
    }

    /**
     * Updates an existing faculity model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing faculity model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the faculity model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return faculity the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = faculity::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
