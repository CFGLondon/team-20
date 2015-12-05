<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Reports';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="report-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Report', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idmain',
            'lat',
            'long',
            'location_is_precise',
            'location_prose:ntext',
            // 'problem_prose:ntext',
            // 'id_language',
            // 'time_sent',
            // 'age',
            // 'gender',
            // 'requires_editing',
            // 'editor_comments:ntext',
            // 'problem_category',
            // 'is_solved',
            // 'time_updated',
            // 'sms_id',
            // 'disability_category',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
