<?php

use yii\db\Migration;

/**
 * Handles the creation of table `sliderimages`.
 * Has foreign keys to the tables:
 *
 * - `slider`
 */
class m181023_121625_create_sliderimages_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('sliderimages', [
            'id' => $this->primaryKey(),
            'slider_id' => $this->integer()->notNull(),
            'title' => $this->string(255),
            'description' => $this->text(),
            'images' => $this->string(255),
        ]);

        // creates index for column `slider_id`
        $this->createIndex(
            'idx-sliderimages-slider_id',
            'sliderimages',
            'slider_id'
        );

        // add foreign key for table `slider`
        $this->addForeignKey(
            'fk-sliderimages-slider_id',
            'sliderimages',
            'slider_id',
            'slider',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `slider`
        $this->dropForeignKey(
            'fk-sliderimages-slider_id',
            'sliderimages'
        );

        // drops index for column `slider_id`
        $this->dropIndex(
            'idx-sliderimages-slider_id',
            'sliderimages'
        );

        $this->dropTable('sliderimages');
    }
}
