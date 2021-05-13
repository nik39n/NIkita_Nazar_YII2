<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Footertable */

$this->title = 'Update Footertable: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Footertables', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="footertable-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
