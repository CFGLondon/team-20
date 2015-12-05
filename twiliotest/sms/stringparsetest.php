<?php
    include 'mapsclass.php';
    $address=urlencode("1600 Amphitheatre Parkway, Mountain View, CA");
    $loc = geocoder::getLocation($address[lat]);

    print_r($loc);


?>

	


	
	
