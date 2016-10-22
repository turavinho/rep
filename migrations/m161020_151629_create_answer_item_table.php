<?php

use yii\db\Migration;

/**
 * Handles the creation for table `answer_item`.
 */
class m161020_151629_create_answer_item_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('answer_item', [
            'id' => $this->primaryKey(),
            'answer_id' =>$this->integer()->notNull()->comment('id анткеты'),
            'quiz_item_id' =>$this->integer()->notNull()->comment('id вопроса'),
            'result' =>$this->text()->notNull()->comment('Результат'),
        ]);
        $this->createIndex('quiz_item_id','answer_item','quiz_item_id');

    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('answer_item');
    }
}
