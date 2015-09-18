<?php

namespace app\models;

use Yii;
use app\models\Category;

/**
 * This is the model class for table "logotypes".
 *
 * @property integer $id
 * @property string $name
 * @property integer $category
 * @property string $path
 * @property string $path_230
 */
class Logotypes extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'logotypes';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'category', 'path', 'path_230'], 'required'],
            [['category'], 'integer'],
            [['name', 'path_230'], 'string', 'max' => 255],
            [['path'], 'string', 'max' => 225]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'category' => 'Category',
            'path' => 'Path',
            'path_230' => 'Path 230',
        ];
    }


    public function getCat(){
        return $this->hasOne(Category::className(), ['id' => 'category']);
    }

}
