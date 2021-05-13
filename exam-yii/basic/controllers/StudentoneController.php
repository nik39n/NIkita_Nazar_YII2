<?php

namespace app\controllers;
use app\models\Student;
class StudentoneController extends \yii\web\Controller
{
    public function actionStudentone($group)
    {
        $studentone = Student::find('*')->where(['group' => $group])->all();
        return $this->render('studentone', compact('studentone')); 
    }

}