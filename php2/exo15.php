<?php
// Exercice 15

$mail = "elan@elan-formation.fr";
$mail2 = "contact@elan";

if (filter_var($mail, FILTER_VALIDATE_EMAIL)){
    echo "L'adresse " . $mail . " est une adresse e-mail valide.";
}else{
    echo "L'adresse " . $mail . " est une adresse e-mail invalide.";
}

echo "<br/>";

if (filter_var($mail2, FILTER_VALIDATE_EMAIL)){
    echo "L'adresse " . $mail2 . " est une adresse e-mail valide.";
}else{
    echo "L'adresse " . $mail2 . " est une adresse e-mail invalide.";
}







?>