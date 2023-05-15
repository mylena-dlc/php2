<?php

$url = "http://my.mobirise.com/data/userpic/764.jpg";
$nb = 4;


function repeterImage($url, $nb){
    for($i=0;$i<$nb;$i++){
        echo "<img src='".$url."'/>";
    }
}

repeterImage($url,$nb);


?>