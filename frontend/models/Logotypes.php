<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "logotypes".
 *
 * @property integer $id
 * @property string $name
 * @property string $category
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
            [['name', 'category', 'path'], 'required'],
            [['name'], 'string', 'max' => 255],
            [['category'], 'string', 'max' => 50],
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
        ];
    }
}
