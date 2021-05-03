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

class SingleproductController extends \yii\web\Controller
{
    public function actionSingleproduct()
    {
        $menuCard= MenuCard::find('*')->all();
        return $this->render('singleproduct', 'menuCard'); 
    }

}