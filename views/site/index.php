<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use app\models\Answer;
use app\models\Quiz;
use app\models\QuizItem;
use yii\i18n\Formatter;
use yii\base\Component;
use yii\base\Object;


$this->title = 'Краткий ориентировочный тест';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="index">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Заполните поля:</p>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => '$id']) ?>

                <?= $form->field($model, 'name')->textInput() ?>

                <?= $form->field($model, 'last_name')->textInput() ?>

                <?= $form->field($model, 'age')->textInput() ?>

                <?= $form->field($model, 'gender')->textInput() ?>

                <div class="form-group">
                    <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>

    <?php foreach ($model as $quiz_id)
    {
        foreach ($quiz_id as $id => $quiz_item )
                echo $this->$model->$quiz_item;
        }
    ?>


</div>

