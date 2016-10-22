<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\QuizItem */

$this->title = 'Update Quiz Item: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Quiz Items', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="quiz-item-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
