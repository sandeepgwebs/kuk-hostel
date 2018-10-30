<?php
	namespace frontend\models;
	
	use yii;
	use yii\base\Model;
	use yii\db\ActiveRecord;
	
	class MyForm extends ActiveRecord
	{
		public static function tableName(){
			return 'city';
		}
		// public $name;
		// public $email;
		
		public function rules()
		{
			return[
				[['name','email'], 'required'],
				['email','email'],
			];
		}
	}
?>