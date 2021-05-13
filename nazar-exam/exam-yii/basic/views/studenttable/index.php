<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\StudenttableSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Studenttables';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="studenttable-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Studenttable', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'fname',
            'lname',
            'group',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
