<?php

namespace app\controllers;

use Yii;
use app\models\Report;
use app\models\Language;
use app\models\DisabilityCategory;
use app\models\ProblemCategory;
use app\models\RawSMSData;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use DateTime;

/**
 * TestController implements the CRUD actions for Report model.
 */
class TestController extends Controller
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
     * Lists all Report models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Report::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Report model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    //Code4good added stuff
    public function actionMap($startTime = null) {
        $searchquery = [];
        if($startTime != null) {
            echo "given start time is :". $startTime."<br />";
        }

    	$reports = Report::find([])->all();
    	//print_r($reports);
    	return $this->render('map', [
    		'reports'=> $reports,
    	]);
    }

    public function actionJsonrecord($id) {
       \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
       return Report::findOne($id);
    }

    public function actionJsonrecords($param) {
    	\Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
	    return Report::find($param)->all();
    }

    /**
     * Creates a new Report model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Report();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->idmain]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Report model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
	    if ($model->load(Yii::$app->request->post())) {
            $date = new DateTime();
            $model->time_updated = $date->format('Y-m-d H:i:s');
		    if ($model->validate()) {
			    $model->save();
                echo "Success!";
        	    return;
	        }
	    }
      $languages = Language::find()->all();
      $language_arr = [];
      foreach($languages as $language) {
        $language_arr[$language->id_language] = $language->name." (".$language->dialect.")";
       }

       $disabilities = DisabilityCategory::find()->all();
       $disability_arr = [];
       foreach($disabilities as $disability) {
         $disability_arr[$disability->id_disability_category] = $disability->category;
       }

       $problems = ProblemCategory::find()->all();
       $problem_arr = [];
       foreach($problems as $problem) {
         $problem_arr[$problem->id_problem_category] = $problem->category;
       }

	  return $this->render('form', [
       	  'model' => $model,
          'languages' => $language_arr,
          'disabilities' => $disability_arr,
          'problems' => $problem_arr,
  	  ]);
	}

    /**
     * Deletes an existing Report model.
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
     * Finds the Report model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Report the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Report::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

	public function actionForm()
	{
    	$model = new Report();
	    if ($model->load(Yii::$app->request->post())) {
            $model->location_is_precise = true;
            $date = new DateTime();
            $model->time_sent = $date->format('Y-m-d H:i:s');
            $model->time_updated = $date->format('Y-m-d H:i:s');
		    if ($model->validate()) {
			    $model->save();
                echo "Success!";
        	    return;
	        }
	    }

      $languages = Language::find()->all();
      $language_arr = [];
      foreach($languages as $language) {
        $language_arr[$language->id_language] = $language->name." (".$language->dialect.")";
       }

       $disabilities = DisabilityCategory::find()->all();
       $disability_arr = [];
       foreach($disabilities as $disability) {
         $disability_arr[$disability->id_disability_category] = $disability->category;
       }

       $problems = ProblemCategory::find()->all();
       $problem_arr = [];
       foreach($problems as $problem) {
         $problem_arr[$problem->id_problem_category] = $problem->category;
       }

	    return $this->render('form', [
   	  'model' => $model,
      'languages' => $language_arr,
      'disabilities' => $disability_arr,
      'problems' => $problem_arr,
  	  ]);
	}
}
