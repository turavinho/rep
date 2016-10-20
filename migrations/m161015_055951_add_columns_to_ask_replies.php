<?php

use yii\db\Migration;

class m161015_055951_add_columns_to_ask_replies extends Migration
{
    public function up()
    {
        $this->addColumn('ask_replies', 'name', 'string');
        $this->addColumn('ask_replies', 'surname', 'string');
        $this->addColumn('ask_replies', 'age', 'integer');
        $this->addColumn('ask_replies', 'gender', 'integer');
    }


    public function down()
    {
        echo "m161015_055951_add_columns_to_ask_replies cannot be reverted.\n";

        return false;
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
