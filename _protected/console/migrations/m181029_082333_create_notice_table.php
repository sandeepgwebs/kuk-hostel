<?php

use yii\db\Migration;

/**
 * Handles the creation of table `notice`.
 */
class m181029_082333_create_notice_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('notice', [
            'id' => $this->primaryKey(),
            'title' => $this->string(255),
            'discription' => $this->string(255),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('notice');
    }
}
