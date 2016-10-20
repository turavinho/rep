<?php

/* @var $this yii\web\View */

$this->title = $model->title;

?>

<div class="panel panel-default">
    <div class="panel-heading" align="center">
        <h3 class="panel-title"><?php echo $model->title; ?></h3>
    </div>
    <div class="panel-body">
        <?php echo $model->description; ?>
    </div>
</div>
