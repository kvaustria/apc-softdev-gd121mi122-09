<?php

namespace frontend\controllers;

use Yii;
use common\models\Applicants;
use common\models\ApplicantsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * ApplicantsController implements the CRUD actions for Applicants model.
 */
class ApplicantsController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all Applicants models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ApplicantsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Applicants model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Applicants model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Applicants();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {

             //get the instance of the uploaded file
                $imageName = $model->form138;
                $imageName2 = $model->certificate;
                $imageName3 = $model->taxreturn;

                $model->file = UploadedFile::getInstance($model, 'file1');
                $model->file->saveAs( 'uploads/'.$imageName.'.'.$model->file1->extension );

                $model->file2 = UploadedFile::getInstance($model, 'file2');
                $model->file2->saveAs( 'uploads/'.$imageName2.'.'.$model->file2->extension );

                $model->file3 = UploadedFile::getInstance($model, 'file3');
                $model->file3->saveAs( 'uploads/'.$imageName3.'.'.$model->file3->extension );



            return $this->redirect(['view', 'id' => $model->applicant_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Applicants model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->applicant_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Applicants model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Applicants model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Applicants the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Applicants::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
