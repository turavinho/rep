<?php

use yii\db\Migration;

/**
 * Handles the creation for table `quiz`.
 */
class m161020_150917_create_quiz_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('quiz', [
            'id' => $this->primaryKey(),
            'title' => $this->string(255)->notNull()->comment('Заголовок анкеты'),
            'time' => $this->integer()->notNull()->comment('Время на анкету'),
            'sort' => $this->integer()->notNull()->comment('Порядок вывода анкет'),
        ]);

    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('quiz');
    }
}
