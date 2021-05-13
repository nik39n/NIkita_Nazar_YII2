<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "footer".
 *
 * @property string $copyright
 * @property string $authorone
 * @property string $authortwo
 */
class Footertable extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'footer';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['copyright'], 'safe'],
            [['authorone', 'authortwo'], 'required'],
            [['authorone', 'authortwo'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'copyright' => 'Copyright',
            'authorone' => 'Authorone',
            'authortwo' => 'Authortwo',
        ];
    }
}
