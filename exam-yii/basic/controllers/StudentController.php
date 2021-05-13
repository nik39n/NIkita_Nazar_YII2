<?php

namespace app\controllers;

class StudentController extends \yii\web\Controller
{
    public function actionStudent()
    {
        return $this->render('student');
    }

}
