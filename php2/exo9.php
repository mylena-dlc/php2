<?php

$nomsRadio = ["Masculin", "Féminin", "Autre"];

function affichierRadio($nomsRadio){   
    foreach($nomsRadio as $key){
    echo "<input type='radio'name='sexe'> <label for=".$key.">$key</label>";
    } 
}

affichierRadio($nomsRadio);


?>
