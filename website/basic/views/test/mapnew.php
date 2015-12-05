<?php
use yii\helpers\Url;
echo "[";
foreach($reports as $report) {
  echo "{ \"idmain\"="+$report->idmain+", \"lat\"="+$report->lat+", \"long\"="+$report->long+"};"
  
}

?>

