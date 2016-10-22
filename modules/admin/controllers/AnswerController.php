<?php

namespace app\modules\admin\controllers;

use Yii;
use app\models\Quiz;
use app\models\AnswerSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;



class AnswerController extends Controller
{
    public function actionIndex()
    {
         $searchModel = new AnswerSearch();
         $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

    return $this->render('index', [
        'searchModel' => $searchModel,
        'dataProvider' => $dataProvider,
         ]);
    }
}
