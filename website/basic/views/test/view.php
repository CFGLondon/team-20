<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Report */

$this->title = $model->idmain;
$this->params['breadcrumbs'][] = ['label' => 'Reports', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="report-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->idmain], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->idmain], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idmain',
            'lat',
            'long',
            'location_is_precise',
            'location_prose:ntext',
            'problem_prose:ntext',
            'id_language',
            'time_sent',
            'age',
            'gender',
            'requires_editing',
            'editor_comments:ntext',
            'problem_category',
            'is_solved',
            'time_updated',
            'sms_id',
            'disability_category',
        ],
    ]) ?>

</div>
