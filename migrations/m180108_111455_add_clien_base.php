<?php

use yii\db\Migration;

/**
 * Class m180108_111455_add_clien_base
 */
class m180108_111455_add_clien_base extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('Client', [
            'id' =>  $this->primaryKey(),
            'name' => $this->string(50),
            'surname' => $this->string(50),
            'age' => $this->smallInteger(),
            'pol' => $this->string(10),
            'email' => $this->string(255),
            'phone' => $this->string(20),
            'address' => $this->string(250),
            'organization' => $this->string(250),
            'position' => $this->string(250),
            'info' => $this->text(),
        ]);

    }

    public function safeDown()
    {
         $this->dropTable('Client');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180108_111455_add_clien_base cannot be reverted.\n";

        return false;
    }
    */
}
