<div id="googlemaps" style="height:100%;width:100%;position:absolute; ">
</div>

<script>
    //Google maps code
    var position = [52.1999722,0.1247423];

    function initialize() {

      var myOptions = {
        zoom: 8,
        mapTypeId: google.maps.MapTypeId.ROADMAP
      };

      map = new google.maps.Map(document.getElementById('googlemaps'),
            myOptions);
/*
      posCambridge = new google.maps.LatLng(position[0], position[1]);

      marker = new google.maps.Marker({
        position: posCambridge,
        map: map,
        draggable: false,
        animation: google.maps.Animation.DROP
      });*/

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
    <?php } ?>
    }
    google.maps.event.addDomListener(window, 'load', initialize);

    //End google maps

</script>


