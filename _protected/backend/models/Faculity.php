<?php

namespace backend\models;

use Yii;
use yii\base\ActiveRecord;
use yii\web\UploadedFile;
use yii\helpers\ArrayHelper;
use backend\models\Department;
/**
 * This is the model class for table "faculity".
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $phone
 * @property string $image
 */
class Faculity extends \yii\db\ActiveRecord
{
    /**
     * @var UploadedFile file attribute
     */
    public static function tableName()
    {
        return 'faculity';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'email', 'phone'],'required'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'email' => 'Email',
            'phone' => 'Phone',
            'image' => 'Image',
        ];
    }

}
