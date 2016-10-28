<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\Answer;
use app\models\Quiz;
use yii\helpers\VarDumper;


class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function actionAnswer()
    {
        $model = new Answer();
        if(isset($_POST['Answer']))
        {
            $model->attributes = Yii::$app->request->post('Answer');
            if($model->validate() && $model->answer())
            {
                return $this->goHome();
            }
        }
      //  return $this->render('index', ['model'=>$model]);
    }


    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $answerIdCookie = Yii::$app->request->cookies['answer_id'];     //проверяем, установлена ли кука с анкетой
        $alreadyAnswered = Yii::$app->request->cookies['already_answered'];
        $alreadyAnswered = $alreadyAnswered ? explode(',', $alreadyAnswered) : [];
        if ($answerIdCookie) {                                          //если да, то выводим ее
            $answerModel = Answer::find()->byId($answerIdCookie)->isActive()->one();
        }
        if (empty($answerModel)) {                                              //если нет, то создаем новую анкету
            $questionModel = Quiz::find()->nextUnAnswered($alreadyAnswered)->one();
            $answerModel = new Answer();
            $answerModel->quiz_id = $questionModel->id;
            $answerModel->save();
            Yii::$app->response->cookies->add(new \yii\web\Cookie([
                'name' => 'answer_id',
                'value' => $answerModel->id,
            ]));
        }
        return $this->render('index');

    }


    /**
     * Login action.
     *
     * @return string
     */
    /**
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {   //если польз. авторизирован, то отправляем его на дом. страницу
            return $this->goHome();
        }

        $model = new LoginForm();   //создаем форму авторизации
        if ($model->load(Yii::$app->request->post()) && $model->login()) {  //если данные получены и польз залогинен,
            return $this->goBack();                                         //отправляем его на текущую страницу
        }
        return $this->render('login', [     //рендерим страницу авторизации
            'model' => $model,
        ]);
    }
    **/
    /**
     * Logout action.
     *
     * @return string
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return string

    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }
     */
    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }
}
