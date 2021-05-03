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


class BlogController extends \yii\web\Controller
{
    public function actionBlog()
    {
        $blog = Blog::find('*')->all();
        return $this->render('Blog', compact('Blog')); 
    }

}