<?php

namespace app\controllers;
use app\models\Student;
class StudentController extends \yii\web\Controller
{
    public function actionStudent()
    {
        $student = Student::find('*')->all();
        return $this->render('student', compact('student')); 
    }

}
