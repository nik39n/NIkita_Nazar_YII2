<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Footertable */

$this->title = 'Create Footertable';
$this->params['breadcrumbs'][] = ['label' => 'Footertables', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="footertable-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
