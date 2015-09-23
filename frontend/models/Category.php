<?php

namespace app\models;

use Yii;
use app\models\Logotypes;

/**
 * This is the model class for table "category".
 *
 * @property integer $id
 * @property string $name
 */
class Category extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'category';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 100]
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
        ];
    }


    public function getLogos()
    {
        return $this->hasMany(Logotypes::className(), (['category' => 'id']));
    }


}
