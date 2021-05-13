<?php

namespace app\components;
use yii\base\Widget;

/**
 * Description of CatsWidget
 *
 * @author Andrey
 */
class SideWidget extends Widget{
    
    public function run(){
/*         $html = \Yii::$app->cache->get('Side');
        if(!$html){
            $side = \app\models\Side::find()->select('id, group')->all();
            $html = $this->render('side', compact('side'));
            \Yii::$app->cache->set('Side', $html, 60);
        } */
        $side = \app\models\Student::find()->select('id, group')->all();
        $html = $this->render('side', compact('side'));
        return $html;
    }
    
}