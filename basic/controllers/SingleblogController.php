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


class SingleblogController extends \yii\web\Controller
{
    public function actionSingleblog()
    {
        // $review =Review::find('*')->from('review')->all();
        // $blog =Blog::find('*')->from('blog')->all();
        return $this->render('Singleblog'); 
    }

}