<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "menu_item".
 *
 * @property int $id
 * @property string $title
 * @property string $img
 * @property string $category
 */
class MenuItem extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'menu_item';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'img', 'category'], 'required'],
            [['title', 'img', 'category'], 'string', 'max' => 100],
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
            'img' => 'Img',
            'category' => 'Category',
        ];
    }
}
