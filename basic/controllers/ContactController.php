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

class ContactController extends \yii\web\Controller
{
    public function actionContact()
    {
        $contact =Contacts::find('*')->all();
        return $this->render('Contact', 'contact'); 
    }

}