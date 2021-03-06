<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\QuizItem */

$this->title = 'Create Quiz Item';
$this->params['breadcrumbs'][] = ['label' => 'Quiz Items', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="quiz-item-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
