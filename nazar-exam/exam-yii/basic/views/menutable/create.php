<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Menutable */

$this->title = 'Create Menutable';
$this->params['breadcrumbs'][] = ['label' => 'Menutables', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="menutable-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
