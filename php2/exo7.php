<?php

$elements = [
    "choix 1"=>"",
    "choix 2"=>"checked",
    "choix 3"=>""
];

function genererCheckbox($elements){
    foreach($elements as $key=>$value){
    echo "<input type='checkbox' '. $value .' >".$key. "";
    }
}

genererCheckbox($elements);

?>