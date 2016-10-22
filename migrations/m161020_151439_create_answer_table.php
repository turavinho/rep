<?php

use yii\db\Migration;

/**
 * Handles the creation for table `answer`.
 */
class m161020_151439_create_answer_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('answer', [
            'id' => $this->primaryKey(),
            'quiz_id' => $this->integer()->notNull()->comment('id анкеты'),
            'name' => $this->string(255)->notNull()->comment('Имя анкетируемого'),
            'last_name' => $this->string(255)->notNull()->comment('Фамилия анкетируемого'),
            'age' => $this->string(255)->notNull()->comment('Возраст анкетируемого'),
            'gender' => $this->string(255)->notNull()->comment('Возраст анкетируемого'),
            'start_time' => $this->dateTime()->notNull()->comment('Время начала заполнения анкеты'),
            'is_closed' => $this->integer()->notNull()->comment('Состояние анкеты'),
        ]);
         $this->createIndex('quiz_id','answer','quiz_id');

    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('answer');
    }
}
