<?php

// Je déclare le tableau des boutons radio sexe
$nomRadio = ["Monsieur", "Madame"];

// Je déclare le tableau avec les champs texte
$namesInput = ["Nom", "Prénom", "Mail", "Ville"];

// Je déclare le tableau du menu déroulant
$formation = ["Développeur Logiciel", "Designer Web", "Intégrateur", "Chef de projet"];

//Fonction pour afficher bouton radio
function afficherRadio($nomRadio){
    foreach($nomRadio as $key){
        echo "<input type='radio' name='sexe'> <label for=" . $key . "> $key</label>";
    }
}

// Fonction pour afficher les champs de texte
function afficherInput($namesInput){
    foreach($namesInput as $key){
        echo "<label for=" . $key . ">" . $key . "</label><br>";
        echo "<input type=texte id=" . $key . "><br>";
    }
}

// Fonction pour afficher le menu déroulant
function afficherMenuDeroulant($formation){
    echo "<select id='Formation' name='Formation'>" . "Formation";
    foreach($formation as $key){
        echo "<option value=" . $key . ">" . $key . "</option>" ;
    }
    echo "</select>";
}

// Affichage
afficherRadio($nomRadio);
echo "<br><br>";
afficherInput($namesInput);
echo "<br>";
afficherMenuDeroulant($formation);
echo "<br><br>";
echo '<input type="submit" value="Valider"/>';






?>