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


class CartController extends \yii\web\Controller
{
    public function actionCart()
    {
        // $review =Review::find('*')->from('review')->all();
        // $blog =Blog::find('*')->from('blog')->all();
        $main=Main::find('*')->from('main')->all();
        $menuItem = MenuItem::find('*')->all();
        $menuCard= MenuCard::find('*')->all();
        $mainNews= MainNews::find('*')->all();
        return $this->render('Cart', compact('main','menuItem', 'mainNews','menuCard')); 
    }

}