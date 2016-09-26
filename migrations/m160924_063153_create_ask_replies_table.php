<?php

use yii\db\Migration;

/**
 * Handles the creation for table `ask_replies`.
 */
class m160924_063153_create_ask_replies_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('{{%ask_replies}}', [
            'id' => $this->primaryKey(),
            'quest_id' =>$this->integer(10)->unsigned()->comment('id анкеты'),
            'res_id' =>$this->integer(10)->unsigned()->comment('id ответа'),
            'value' =>$this->text()->notNull()->comment('Значение'),
        ],'ENGINE=InnoDb DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT \'Таблица с ответами на вопросы\'');

        $this->createIndex('quest_id_index','{{%ask_replies}}','quest_id');
        $this->createIndex('res_id','{{%ask_replies}}','res_id');


    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('ask_replies');
    }
}
