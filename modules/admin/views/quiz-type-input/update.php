<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\QuizTypeInput */

$this->title = 'Update Quiz Type Input: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Quiz Type Inputs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="quiz-type-input-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
