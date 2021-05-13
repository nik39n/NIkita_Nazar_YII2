<?php

namespace app\components;
use yii\base\Widget;

/**
 * Description of CatsWidget
 *
 * @author Andrey
 */
class MenuWidget extends Widget{
    
    public function run(){
        $html = \Yii::$app->cache->get('Menu');
        if(!$html){
            $menu = \app\models\Menu::find()->select('action, name')->all();
            $html = $this->render('menu', compact('menu'));
            \Yii::$app->cache->set('Menu', $html, 60);
        }
        return $html;
    }
    
}