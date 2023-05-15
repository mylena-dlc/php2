<?php

$elements = ["Monsieur", "Madame", "Mademoiselle"];

function alimenterListeDeroulante($elements){   
    echo "<select id='liste civilité'>";
 
    foreach($elements as $key){
    echo "<option value=".$key. ">" .$key. "</option><br>";
    } 
        echo "</select><br>";
}

alimenterListeDeroulante($elements);


?>
