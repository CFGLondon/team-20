<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Report */
/* @var $form ActiveForm */
?>
<div class="test-form">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'lat') ?>
        <?= $form->field($model, 'long') ?>
        <?= $form->field($model, 'location_is_precise') ?>
        <?= $form->field($model, 'time_sent') ?>
        <?= $form->field($model, 'requires_editing') ?>
        <?= $form->field($model, 'is_solved') ?>
        <?= $form->field($model, 'time_updated') ?>
        <?= $form->field($model, 'id_language')->dropDownList($languages)?>
        <?= $form->field($model, 'age') ?>
        <?= $form->field($model, 'problem_category') ?>
        <?= $form->field($model, 'sms_id') ?>
        <?= $form->field($model, 'disability_category') ?>
        <?= $form->field($model, 'location_prose') ?>
        <?= $form->field($model, 'problem_prose') ?>
        <?= $form->field($model, 'editor_comments') ?>
        <?= $form->field($model, 'gender') ?>
        <?= $form->field($model, 'name') ?>

        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- test-form -->
