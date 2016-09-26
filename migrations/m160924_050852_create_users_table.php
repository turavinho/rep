<?php

use yii\db\Migration;

/**
 * Handles the creation for table `users`.
 */
class m160924_050852_create_users_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('{{%users}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255)->notNull()->comment('Имя пользователя'),
            'last_name' => $this->string(255)->notNull()->comment('Фамилия пользователя'),
            'age' => $this->integer()->notNull()->unsigned()->comment('Возраст пользователя'),
            'gender' => $this->integer()->notNull()->unsigned()->comment('Пол пользоваьеля'),
        ], 'ENGINE=InnoDb DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT \'Таблица с пользователями\'');
        $this->createIndex('last_name_index','{{%users}}','last_name');
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('{{%users}}');
    }
}
