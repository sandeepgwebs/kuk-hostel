<?php

use yii\db\Migration;

/**
 * Handles the creation of table `designation`.
 */
class m181031_101736_create_designation_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('designation', [
            'id' => $this->primaryKey(),
            'title' => $this->string(255),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('designation');
    }
}
