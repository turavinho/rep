<?php

use yii\db\Migration;

/**
 * Handles the creation for table `reply`.
 */
class m160924_054737_create_reply_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('{{%reply}}', [
            'id' => $this->primaryKey(),
            'quest_id' =>$this->integer(10)->unsigned()->comment('id анкеты'),
            'user_id' =>$this->integer(10)->unsigned()->comment('Автор ответа'),
            'date' =>$this->dateTime()->notNull()->comment('Дата ответа'),
       ],'ENGINE=InnoDb DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT \'Таблица с ответами\'');

        $this->createIndex('quest_id_index','{{%reply}}','quest_id');
        $this->createIndex('user_id_index','{{%reply}}','user_id');
        $this->createIndex('date_index','{{%reply}}','date');


    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('reply');
    }
}
