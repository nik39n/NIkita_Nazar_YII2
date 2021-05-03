<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "contacts".
 *
 * @property int $id
 * @property string $city
 * @property string $place
 * @property string $phone
 * @property string $time
 * @property string $email
 * @property string $email_desc
 */
class Contacts extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'contacts';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['city', 'place', 'phone', 'time', 'email', 'email_desc'], 'required'],
            [['city', 'place', 'time'], 'string', 'max' => 100],
            [['phone', 'email'], 'string', 'max' => 150],
            [['email_desc'], 'string', 'max' => 60],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'city' => 'City',
            'place' => 'Place',
            'phone' => 'Phone',
            'time' => 'Time',
            'email' => 'Email',
            'email_desc' => 'Email Desc',
        ];
    }
}
