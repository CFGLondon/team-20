<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Report */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="report-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'lat')->textInput() ?>

    <?= $form->field($model, 'long')->textInput() ?>

    <?= $form->field($model, 'location_is_precise')->textInput() ?>

    <?= $form->field($model, 'location_prose')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'problem_prose')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'id_language')->textInput() ?>

    <?= $form->field($model, 'time_sent')->textInput() ?>

    <?= $form->field($model, 'age')->textInput() ?>

    <?= $form->field($model, 'gender')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'requires_editing')->textInput() ?>

    <?= $form->field($model, 'editor_comments')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'problem_category')->textInput() ?>

    <?= $form->field($model, 'is_solved')->textInput() ?>

    <?= $form->field($model, 'time_updated')->textInput() ?>

    <?= $form->field($model, 'sms_id')->textInput() ?>

    <?= $form->field($model, 'disability_category')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
