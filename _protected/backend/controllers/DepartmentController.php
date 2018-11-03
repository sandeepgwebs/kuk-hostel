<?php

namespace backend\controllers;

use Yii;
use backend\models\department;
use backend\models\departmentSearch;
use yii\data\ActiveDataProvider;
use backend\models\subject;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * DepartmentController implements the CRUD actions for department model.
 */
class DepartmentController extends Controller
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
     * Lists all department models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new departmentSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single department model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found

     */
//custom work start

    public function actionView($id)
    {
        $model = new Subject();

        $dataProvider = new ActiveDataProvider([
            'query' => Subject::find()->where(['department_id' =>$id]),
        ]);
        return $this->render('viewsubject', [ 'model' => $model, 'dataProvider'=>$dataProvider]);

    }

    public function actionAddsubject($id)
    {
        $model =new subject();
        $model->department_id = $id;

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->department_id]);
        }

        return $this->render('addsubject', [
            'model' => $model,
        ]);
    }

    public function actionSubjectupdate($id)
    {
        $model = subject::findOne($id);
        $model->delete();
        return $this->redirect(['view', 'id' => $model->department_id]);
        // return $this->redirect(['editslider','id'=>$model->slider_id]);
    }

    public function actionEditsubject($id)
    {
        $model = subject::findOne($id);
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->department_id]);
        }

      return $this->render('addsubject',['model' => $model,]);
    }

    public function actionDesignation()
    {
        return $this->render('designation');
    }




//custom work end
    /**
     * Creates a new department model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new department();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['index', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing department model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['index', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing department model.
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
     * Finds the department model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return department the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = department::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
