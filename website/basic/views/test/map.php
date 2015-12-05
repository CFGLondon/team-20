<?php

foreach($reports as $report) {
?>
    <div> Latitude: <?= $report->lat ?> Longitude: <?= $report->long ?> </div>
<?php
}
