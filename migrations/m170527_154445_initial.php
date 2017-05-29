<?php

use yii\db\Migration;

class m170527_154445_initial extends Migration
{
    public function up()
    {
        $this->createTable('{{%table}}', [
            'id' => $this->primaryKey()->unsigned(),
            'value' => $this->integer()->unsigned(),
        ]);

        $data = [];
        for ($i = 0; $i < 10000; $i++) {
            $data[] = [
                'value' => 1,
            ];
        }

        $this->batchInsert(
            '{{%table}}',
            ['value'],
            $data
        );
    }

    public function down()
    {
        echo "m170527_154445_initial cannot be reverted.\n";

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
