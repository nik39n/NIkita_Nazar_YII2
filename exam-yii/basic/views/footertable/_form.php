<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Footertable */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="footertable-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'copyright')->textInput() ?>

    <?= $form->field($model, 'authorone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'authortwo')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
