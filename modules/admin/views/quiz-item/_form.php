<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\QuizTypeInput;
use app\models\Quiz;

/* @var $this yii\web\View */
/* @var $model app\models\QuizItem */
/* @var $form yii\widgets\ActiveForm */

$types = ArrayHelper::map(QuizTypeInput::find()->all(), 'id', 'title');
$quiz_id = ArrayHelper::map(Quiz::find()->all(), 'id', 'title');

?>

<div class="quiz-item-form">

    <?php $form = ActiveForm::begin(); ?>


    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'type_id')->textInput() ?>

    <?= $form->field($model, 'type_id')->dropDownList($types) ?>

    <?= $form->field($model, 'quiz_id')->dropDownList($quiz_id) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
