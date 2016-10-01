<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Ask */

$this->title = 'Update Ask: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Asks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ask-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
