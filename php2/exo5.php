
<?php

$namesInput = array("Nom", "Prénom", "Ville");

function displayInput($namesInput) {
    //echo
    //'<form method="post" action="">';

    foreach ($namesInput as $key) {
        echo
        '<label for="' . $key. '">' . $key . '</label> :<br>
        <input type="text" id="' . $key . '"name="userinfo" required><br>';
    }
    echo
    '<input type="submit" value="Valider"/>
    </form>';
}

displayInput($namesInput);



?>