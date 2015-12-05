<h1>ADD International: Disability Problem Reports</h1>
<div id="googlemaps" style="height:500px;width:80%;">
</div>
<div id="problemdetails">

</div>


<script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script>
    //Google maps code

    function initialize() {

      var myOptions = {
        zoom: 4,
        zoomControl: true,
        scaleControl: true,
        scrollwheel: true,
        disableDoubleClickZoom: false,
        streetViewControl: false,
        mapTypeId: google.maps.MapTypeId.ROADMAP
      };

      map = new google.maps.Map(document.getElementById('googlemaps'),
            myOptions);

      map.setCenter(new google.maps.LatLng(52.1999722, 0.1247423));

      <?php foreach($reports as $report) { ?>
          position<?=$report->idmain?> = new google.maps.LatLng(
              <?=$report-> lat ?> ,
              <?=$report-> long?> );
      marker<?=$report->idmain?> = new google.maps.Marker({
        position: position<?=$report->idmain?>,
        map: map,
        draggable: false,
        animation: google.maps.Animation.DROP
      });
      marker<?=$report->idmain?>.addListener('click', function() {
        //When clicked, fetch the relevant details
        
      });
    <?php } ?>
    }
    google.maps.event.addDomListener(window, 'load', initialize);

    //End google maps
</script>


