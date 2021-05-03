<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "menu_card".
 *
 * @property int $id
 * @property string $title
 * @property string $img
 * @property string $category
 * @property int $price
 */
class MenuCard extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'menu_card';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'img', 'category', 'price'], 'required'],
            [['price'], 'integer'],
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
            'price' => 'Price',
        ];
    }
}
