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
            ['label'=>'Пользователи', 'url'=>['user/index']],
            ['label'=>'Анкеты', 'url'=>['quest/index']],
            ['label'=>'Вопросы', 'url'=>['ask/index']],
            ['label'=>'Ответы', 'url'=>['reply/index']],
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

