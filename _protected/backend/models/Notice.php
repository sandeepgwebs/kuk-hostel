<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "notice".
 *
 * @property int $id
 * @property string $title
 * @property string $discription
 */
class Notice extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'notice';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'discription'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'discription' => 'Discription',
        ];
    }
}
