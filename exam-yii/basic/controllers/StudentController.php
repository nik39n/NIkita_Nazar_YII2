<?php

namespace app\controllers;

class StudentController extends \yii\web\Controller
{
    public function actionStudents()
    {
        return $this->render('student');
    }

}
