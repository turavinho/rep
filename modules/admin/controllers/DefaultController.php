<?php

namespace app\modules\admin\controllers;

use yii\web\Controller;
use yii\data\ArrayDataProvider;
use app\modules\admin\models\AdminForm;

/**
 * Default controller for the `admin` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        $menu = [
            ['label'=>'Анкеты', 'url'=>['quiz/index']],
            ['label'=>'Вопросы', 'url'=>['quiz-item/index']],
            ['label'=>'Типы вопросов', 'url'=>['quiz-type-input/index']],
            ['label'=>'Ответы', 'url'=>['answer/index']],
        ];

        $dataProvider = new ArrayDataProvider([
            'key' => 'id',
            'allModels' =>$menu,
            'sort' => [

                'attributes' => ['labels','url'],
            ],
            'pagination' => [
                'pageSize' => 10,
            ],
        ]);

        $AdminForm = new AdminForm();
        return $this->render('index', [
        'dataProvider' => $dataProvider,
        'AdminForm' => $AdminForm,
        ]);
    }
}

