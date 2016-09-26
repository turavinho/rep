<?php

use yii\db\Migration;

/**
 * Handles the creation for table `ask`.
 */
class m160924_053811_create_ask_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('{{%ask}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(255)->notNull()->comment('Название вопроса'),
            'quest_id' =>$this->string(255)->notNull()->comment('id анкеты'),
            'type' => $this->string(255)->notNull()->comment('Тип вопроса'),
            'options' => $this->text()->notNull()->comment('Параментры вопроса в json'),

        ],'ENGINE=InnoDb DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT \'Таблица с вопросами\'');
        $this->createIndex('title_index','{{%ask}}','title');
        $this->createIndex('quest_id_index','{{%ask}}','quest_id');
        $this->createIndex('type_index','{{%ask}}','type');
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('ask');
    }
}
