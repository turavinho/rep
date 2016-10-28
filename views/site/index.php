<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\Answer */

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
                <?php if ($model->isPersonalDataComplete()):?>
                    <?php foreach ($model->quiz->items as $key => $item):?>
                        <?php switch($item->quizType->code) {
                            case 'input':
                                echo Html::label($item->title);
                                echo "<br>";
                                echo Html::input('text', 'answers['.$item->id.']');
                                echo "<br>";
                                break;
                            case 'textarea':
                                echo Html::label($item->title);
                                echo "<br>";
                                echo Html::textarea('answers['.$item->id.']');
                                echo "<br>";
                                break;
                        } ?>
                    <?php endforeach; ?>

                <?php else: ?>
                    <?= $form->field($model, 'name')->textInput() ?>
                    <?= $form->field($model, 'last_name')->textInput() ?>
                    <?= $form->field($model, 'age')->textInput() ?>
                    <?= $form->field($model, 'gender')->textInput() ?>
                    <div class="form-group">
                        <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                    </div>
                <?php endif; ?>
            <?php ActiveForm::end(); ?>
        </div>
    </div>

</div>