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
class Footer extends \yii\db\ActiveRecord
{

    public static function tableName()
    {
        return 'footer';
    }
}

?>