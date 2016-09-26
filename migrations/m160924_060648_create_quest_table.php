<?php

use yii\db\Migration;

/**
 * Handles the creation for table `quest`.
 */
class m160924_060648_create_quest_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('{{%quest}}', [
            'id' => $this->primaryKey(),
            'title' =>$this->string(255)->notNull()->comment('Заголовок анкеты'),
            'description' =>$this->string(255)->notNull()->comment('Описание анкеты'),
            'active' =>$this->smallInteger(1)->unsigned()->comment('Активность анкеты'),
            'timer' =>$this->integer(6)->unsigned()->comment('timer'),
        ],'ENGINE=InnoDb DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT \'Таблица с анкетами\'');

        $this->createIndex('title_index','{{%quest}}','title');


    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('quest');
    }
}
