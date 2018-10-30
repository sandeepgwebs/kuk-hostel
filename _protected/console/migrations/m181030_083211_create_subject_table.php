<?php

use yii\db\Migration;

/**
 * Handles the creation of table `subject`.
 * Has foreign keys to the tables:
 *
 * - `department`
 */
class m181030_083211_create_subject_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('subject', [
            'id' => $this->primaryKey(),
            'department_id' => $this->integer()->notNull(),
            'title' => $this->string(255),
        ]);

        // creates index for column `department_id`
        $this->createIndex(
            'idx-subject-department_id',
            'subject',
            'department_id'
        );

        // add foreign key for table `department`
        $this->addForeignKey(
            'fk-subject-department_id',
            'subject',
            'department_id',
            'department',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `department`
        $this->dropForeignKey(
            'fk-subject-department_id',
            'subject'
        );

        // drops index for column `department_id`
        $this->dropIndex(
            'idx-subject-department_id',
            'subject'
        );

        $this->dropTable('subject');
    }
}
