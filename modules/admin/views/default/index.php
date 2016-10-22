<?php
use yii\bootstrap\Html;
use yii\grid\GridView;
?>
<div class="admin-default-index">
    <h1><?= $this->context->action->uniqueId ?></h1>
    <p><?php
        echo GridView::widget([
            'dataProvider' => $dataProvider,
            'columns' => [
                [
                    'label' => 'Название',
                    'attribute' => 'label',
                    'format' => 'raw',
                    'value' => function ($data) {
                            return Html::label($data['label']);
                        }
                ],
            [
                'label' => 'Ссылка',
                'format' => 'raw',
                'value' => function ($data) {
                        return Html::a(
                        'Перейти',
                        $data['url'],
                        [
                            'target' => '_blank'
                        ]);
                    }
            ],
         ],
        ]);


        ?>



<table class="table table-striped table-bordered">
        <tr>
            <td>Название анкеты</td>
            <td>Описание</td>
            <td>Количество вопросов</td>
            <td>Количество ответов</td>
        </tr>
        <?php foreach($AdminForm->quest as $quest):?>
            <?//Поля анкеты?>
            <?php endforeach ?>
        <tr>
            <td><?=$quest->title;?></td>
            <td><?=$quest->description;?></td>
            <td><?=count($quest->asks)?></td>
            <td><?=count($quest->replies)?></td>

            <?php foreach ($quest->asks as $ask):?>
            <?//Поля вопроса ?>
            <?php endforeach ?>
        </tr>
</table>
</div>