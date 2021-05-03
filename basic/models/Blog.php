<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "blog".
 *
 * @property int $id
 * @property string $author
 * @property string $data
 * @property string $views
 * @property string $comments
 * @property string $img
 * @property string $title
 * @property string $description
 */
class Blog extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'blog';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['author', 'views', 'comments', 'img', 'title', 'description'], 'required'],
            [['data'], 'safe'],
            [['author', 'views', 'comments'], 'string', 'max' => 100],
            [['img'], 'string', 'max' => 150],
            [['title'], 'string', 'max' => 250],
            [['description'], 'string', 'max' => 500],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'author' => 'Author',
            'data' => 'Data',
            'views' => 'Views',
            'comments' => 'Comments',
            'img' => 'Img',
            'title' => 'Title',
            'description' => 'Description',
        ];
    }
}
