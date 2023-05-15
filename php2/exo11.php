<?php

setlocale(LC_TIME, 'fr_FR.utf8'); 
$date = '2018-02-23'; 
$date_fr = strftime("%N %d %B %Y", strtotime($date)); 
echo $date_fr;

// 
?>
