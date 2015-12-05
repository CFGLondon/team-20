<?php

/* @var $this yii\web\View */

$this->title = 'Map Display';

//"Url::to(['test/jsonrecord', 'id'=>20])"

use dosamigos\google\maps\LatLng;
use dosamigos\google\maps\services\DirectionsWayPoint;
use dosamigos\google\maps\services\TravelMode;
use dosamigos\google\maps\overlays\PolylineOptions;
use dosamigos\google\maps\services\DirectionsRenderer;
use dosamigos\google\maps\services\DirectionsService;
use dosamigos\google\maps\overlays\InfoWindow;
use dosamigos\google\maps\overlays\Marker;
use dosamigos\google\maps\Map;
use dosamigos\google\maps\services\DirectionsRequest;
use dosamigos\google\maps\overlays\Polygon;
use dosamigos\google\maps\layers\BicyclingLayer;

$map = new Map([
    'center' => new LatLng(['lat' => 39.720089311812094, 'lng' => 2.91165944519042]),
    'zoom' => 1,
]);

$map->containerOptions = [
    "id" => "main_map",
    "style" => "width:100%; height:500px;padding:20px;"
];
$map->width = "100%";
$map->height = "500px";
 
foreach($reports as $report) {
    $coord = new LatLng(['lat' => $report->lat, 'lng' => $report->long]);

    // Lets add a marker now
    $marker = new Marker([
        'position' => $coord,
        //'title' => 'My Home Town',
    ]);
     
    // Provide a shared InfoWindow to the marker
    $marker->attachInfoWindow(
        new InfoWindow([
            'content' => '<p>'.$report->problem_prose.'</p>'
        ])
    );
     
    // Add marker to the map
    $map->addOverlay($marker);
}

// Display the map -finally :)
echo $map->display();

?>
<div id = "options">
Filter problems by: 
<form>
<input type = "checkbox" name = "category" value="education" checked>Education 

<input type = "checkbox" name = "category" value="domestic" checked>Domestic 

<input type = "checkbox" name = "category" value="health" checked>Healthcare 

<input type = "checkbox" name = "category" value="religion" checked>Religion
</form>
</div>

