<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

use kartik\select2\Select2;

/* @var $this yii\web\View */
/* @var $model app\models\Report */
/* @var $form ActiveForm */
?>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript">
var geocoder = new google.maps.Geocoder();
</script>
<style>
  #mapCanvas {
    width: 500px;
    height: 400px;
    float: left;
  }
  #infoPanel {
    float: left;
    margin-left: 10px;
  }
  #infoPanel div {
    margin-bottom: 5px;
  }
  </style>
<div class="test-form">
	<div class="report-form">
	<div id="mapCanvas"></div>
    <div id="infoPanel">
    <b>Marker status:</b>
    <div id="markerStatus"><i>Click and drag the marker.</i></div>
    </div>
    </br></br>
    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'lat') ?>
        <?= $form->field($model, 'long') ?>
        <?= $form->field($model, 'requires_editing') ?>
        <?= $form->field($model, 'is_solved') ?>
        <?= $form->field($model, 'id_language')->widget(Select2::classname(), [
            'data' => $languages,
            //'language' => 'de',
            //'options' => ['placeholder' => 'Select a state ...'],
            //'pluginOptions' => [
            //   'allowClear' => true
            //],
        ]) ?>
        <?= $form->field($model, 'age') ?>
        <?= $form->field($model, 'problem_category') ?>
        <?= $form->field($model, 'sms_id') ?>
        <?= $form->field($model, 'disability_category')->widget(Select2::classname(), [
            'data'=>$disabilities,
        ]) ?>
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

<script>
function geocodePosition(pos) {
  geocoder.geocode({
    latLng: pos
  }, function(responses) {
    if (responses && responses.length > 0) {
      updateMarkerAddress(responses[0].formatted_address);
    } else {
      updateMarkerAddress('Cannot determine address at this location.');
    }
  });
}

function updateMarkerStatus(str) {
  document.getElementById('markerStatus').innerHTML = str;
}

function updateMarkerPosition(latLng) {
  document.getElementById('report-long').value =  latLng.lng();
  document.getElementById('report-lat').value =  latLng.lat();
}

function updateMarkerAddress(str) {
  document.getElementById('report-location_prose').value = str;
}

function initialize() {
  var latLng = new google.maps.LatLng(10.0, 25.0);
  var map = new google.maps.Map(document.getElementById('mapCanvas'), {
    zoom: 4,
    center: latLng,
    mapTypeId: google.maps.MapTypeId.ROADMAP
  });
  var marker = new google.maps.Marker({
    position: latLng,
    title: 'Point A',
    map: map,
    draggable: true
  });
  
  // Update current position info.
  updateMarkerPosition(latLng);
  geocodePosition(latLng);
  
  // Add dragging event listeners.
  google.maps.event.addListener(marker, 'dragstart', function() {
    updateMarkerAddress('Dragging...');
  });
  
  google.maps.event.addListener(marker, 'drag', function() {
    updateMarkerStatus('Dragging...');
    updateMarkerPosition(marker.getPosition());
  });
  
  google.maps.event.addListener(marker, 'dragend', function() {
    updateMarkerStatus('Drag ended');
    geocodePosition(marker.getPosition());
  });
}
google.maps.event.addDomListener(window, 'load', initialize);
</script>
<<<<<<< HEAD
<style>
  #mapCanvas {
    width: 500px;
    height: 400px;
    float: left;
  }
  #infoPanel {
    float: left;
    margin-left: 10px;
  }
  #infoPanel div {
    margin-bottom: 5px;
  }
  </style>
<div class="test-form">
	
	<div id="mapCanvas"></div>
    <div id="infoPanel">
    <b>Marker status:</b>
    <div id="markerStatus"><i>Click and drag the marker.</i></div>
    </div>
    <div class="report-form">
    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'lat') ?>
        <?= $form->field($model, 'long') ?>
        <?= $form->field($model, 'requires_editing') ?>
        <?= $form->field($model, 'is_solved') ?>
        <?= $form->field($model, 'id_language')->widget(Select2::classname(), [
            'data' => $languages,
            //'language' => 'de',
            //'options' => ['placeholder' => 'Select a state ...'],
            //'pluginOptions' => [
            //   'allowClear' => true
            //],
        ]) ?>
        <?= $form->field($model, 'age') ?>
        <?= $form->field($model, 'problem_category') ?>
        <?= $form->field($model, 'sms_id') ?>
        <?= $form->field($model, 'disability_category')->widget(Select2::classname(), [
            'data'=>$disabilities,
        ]) ?>
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
=======
>>>>>>> 2b4fc05535ff4e4107c4bfa3fe994dc48b94af2e
