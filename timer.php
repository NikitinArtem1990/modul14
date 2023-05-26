<?php

$datetime1 = new DateTime(date("H:i:s"));
$datetime2 = new DateTime('23:59:59');
$interval = $datetime1->diff($datetime2);

echo $interval->format('Until the end of the personal discount of 5% on all salon services left: %h h %i min %s sec');
?>