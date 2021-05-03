<?php

namespace app\controllers;
use app\models\Blog;
use app\models\ContactForm;
use app\models\Contacts;
use app\models\LoginForm;
use app\models\Main;
use app\models\MainNews;
use app\models\MenuCard;
use app\models\MenuItem;
use app\models\User;


class MainController extends \yii\web\Controller
{
    public function actionIndex()

    {
        $main=Main::find('*')->from('main')->all();
        $menuItem = MenuItem::find('*')->all();
        $menuCard= MenuCard::find('*')->all();
        $mainNews= MainNews::find('*')->all();
        return $this->render('index', compact('main','menuItem', 'mainNews','menuCard')); 
    }

}