<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "menu".
 *
 * @property int $id
 * @property string $name
 * @property string $action
 * @property string|null $content
 * @property string|null $keywords
 * @property string|null $description
 */
class Menu extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'menu';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'action'], 'required'],
            [['name', 'action', 'content', 'keywords', 'description'], 'string', 'max' => 100],
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
            'action' => 'Action',
            'content' => 'Content',
            'keywords' => 'Keywords',
            'description' => 'Description',
        ];
    }
}
