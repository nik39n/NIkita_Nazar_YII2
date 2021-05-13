<?php

namespace app\components;
use yii\base\Widget;

/**
 * Description of CatsWidget
 *
 * @author Andrey
 */
class FooterWidget extends Widget{
    
    public function run(){
        //  $html = \Yii::$app->cache->get('Footer');
        // if(!$html){
        //     $footer = \app\models\Footer::find()->select("*")->all();
        //     $html = $this->render('footer', compact('footer'));
        //     \Yii::$app->cache->set('Footer', $html, 60);
        // }
        $footer = \app\models\Footer::find()->select("*")->all();
        $html = $this->render('footer', compact('footer'));
        return $html;
    }
    
}