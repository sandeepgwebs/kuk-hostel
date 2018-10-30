<?php

use yii\db\Migration;

/**
 * Handles the creation of table `department`.
 */
class m181030_054144_create_department_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('department', [
            'id' => $this->primaryKey(),
            'title' => $this->string(255),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('department');
    }
}
