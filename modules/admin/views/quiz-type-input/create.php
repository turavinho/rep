<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\QuizTypeInput */

$this->title = 'Create Quiz Type Input';
$this->params['breadcrumbs'][] = ['label' => 'Quiz Type Inputs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="quiz-type-input-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
