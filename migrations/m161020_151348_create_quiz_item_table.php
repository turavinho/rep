<?php

use yii\db\Migration;

/**
 * Handles the creation for table `quiz_item`.
 */
class m161020_151348_create_quiz_item_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('quiz_item', [
            'id' => $this->primaryKey(),
            'quiz_id' => $this->integer()->notNull()->comment('id анкеты'),
            'title' => $this->string(255)->notNull()->comment('Заголовок вопроса'),
            'type_id' => $this->integer()->notNull()->comment('тип вопроса'),
        ]);

        $this->createIndex('quiz_id','quiz_item','quiz_id');
        $this->createIndex('type_id','quiz_item','type_id');

    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('quiz_item');
    }
}
