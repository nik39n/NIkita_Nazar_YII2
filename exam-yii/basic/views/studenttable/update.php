<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Studenttable */

$this->title = 'Update Studenttable: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Studenttables', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="studenttable-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
