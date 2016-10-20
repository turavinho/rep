<?php

use yii\db\Migration;

/**
 * Handles the creation for table `quiz_type_input`.
 */
class m161020_151417_create_quiz_type_input_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('quiz_type_input', [
            'id' => $this->primaryKey(),
            'title' =>$this->string(255)->comment('Название типа вопроса'),
            'code' => $this->string(255)->comment('Тип вопроса'),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('quiz_type_input');
    }
}
