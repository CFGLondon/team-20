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
 
foreach($reports as $report) {
    $coord->new LatLng(['lat' => $report->lat, 'lng' => $report->long]);

    // Lets add a marker now
    $marker = new Marker([
        'position' => $coord,
        //'title' => 'My Home Town',
    ]);
     
    // Provide a shared InfoWindow to the marker
    $marker->attachInfoWindow(
        new InfoWindow([
            'content' => '<p>'.$record->problem_prose.'</p>'
        ])
    );
     
    // Add marker to the map
    $map->addOverlay($marker);
}

// Display the map -finally :)
echo $map->display();

