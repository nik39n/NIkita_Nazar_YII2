<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "main_news".
 *
 * @property int $id
 * @property string $title
 * @property string $img
 * @property string $description
 * @property string $author
 * @property string $coments
 */
class MainNews extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'main_news';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'img', 'description', 'author', 'coments'], 'required'],
            [['title', 'img', 'author', 'coments'], 'string', 'max' => 100],
            [['description'], 'string', 'max' => 255],
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
            'description' => 'Description',
            'author' => 'Author',
            'coments' => 'Coments',
        ];
    }
}
