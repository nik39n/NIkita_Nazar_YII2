<?php

namespace app\controllers;

class AboutController extends \yii\web\Controller
{
    public function actionAbout()
    {
        return $this->render('about');
    }

}
