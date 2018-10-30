<?php

use yii\db\Migration;

/**
 * Handles the creation of table `news`.
 */
class m181029_115105_create_news_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('news', [
            'id' => $this->primaryKey(),
            'title' => $this->string(255),
            'discription' => $this->string(255),
            'date' => $this->date(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('news');
    }
}
