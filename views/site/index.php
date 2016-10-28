<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Answer;

$this->title = 'Регистрация';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-index">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Заполните поля:</p>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(); ?>

            <?= $form->field($$this->$model, 'name')->textInput() ?>

            <?= $form->field($this->$model, 'last_name')->textInput() ?>

            <?= $form->field($this->$model, 'age')->textInput() ?>

            <?= $form->field($this->$model, 'gender')->textInput() ?>

            <div class="form-group">
                    <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>


            <?php if ($this->$model->isPersonalDataComplete())
                    foreach ($this->$model->QuizIitem as $key => $title)
                    {
                        echo $title;
                    }
            ?>

        </div>
    </div>

</div>

