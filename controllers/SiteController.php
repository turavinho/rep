<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\User;
use app\models\AskReplies;
use app\models\Quest;
use yii\helpers\VarDumper;


class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
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
        /*
        $relExample = Quest::find()->where(['id'=>1])->with('asks')->one();
        VarDumper::dump($relExample->asks,10,true);

        $list = Quest::find()->active()->all();
        return $this->render('index',["list" => $list]);
        */
        $model = AskReplies::find()->one();   //создаем форму авторизации
        /*if ($model->load(Yii::$app->request->post()) && $model->login()) {  //если данные получены и польз залогинен,
            return $this->goBack();                                         //отправляем его на текущую страницу
        }*/
        return $this->render('index', [     //рендерим страницу авторизации
            'model' => $model,
        ]);
    }

    /**
     * Displays ENTER_ASK.
     *
     * @return string
     */
    public function actionKot()
    {
        $model = Quest::find()->active()->one();
        return $this->render('kot',["model" => $model]);
    }


    /**
     * Login action.
     *
     * @return string
     */
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
     */
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
