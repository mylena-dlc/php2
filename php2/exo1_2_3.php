<h1>Exo algo php2</h1>

<style>
    .rouge {
        color: red;
    }
    table, td, th {
        border-collapse: collapse;
        border-width: 1px;
        border-style: solid;
        margin: 10px;
    }
    table {
        width: 40%;
    }
</style>
<?php

//Exercice 1

// 1 - preparation; declarations; rien de concret

function convertirMajRouge($texte) {
    
    $texte = mb_strtoupper($texte);

    $texte = '<p class="rouge">' . $texte . '</p>';

    return $texte;
}

// 2 - execution; concret

$texteAFormatter = "Mon texte en paramètre";

echo convertirMajRouge($texteAFormatter) . "<br>" ;
?>
<hr />
<?php

//Exercice 2
/*<html> 
<table id="capitales">
    <thead>
        <tr>
            <th>Pays</th>
            <th>Ville</th>  
        </tr>
    </thead>
    <tr>
        <td>France</td>
        <td>Paris</td>
    </tr>
    <tr>
        <td>Allemagne</td>
        <td>berlin</td>
    </tr>
    <tr>
        <td>USA</td>
        <td>Washington</td>
    </tr>
    <tr>
        <td>Italie</td>
        <td>rome</td>
    </tr>
</table>
</html>*/

$capitales = [
    "France" => "Paris",
    "Allemagne" => "Berlin",
    "USA" => "Washington",
    "Italie" => "Rome"
];

function afficherTableHTML($tableau) {
    ksort($tableau);
    echo "<table>";
    echo "<tr>";
    echo "<th>Pays</th>";
    echo "<th>Capitales</th>";
    echo "</tr>";
    
    foreach($tableau as $key=>$value) {
        echo "<tr><td>". mb_strtoupper($key)."</td>"."<td>".$value."</td><tr>";
    }
    echo "</table>" ;
}
afficherTableHTML($capitales);


// Exercice 3

 $link ="https://elan-formation.eu/accueil/";
echo "<a href=".$link." target='_blank'>Elan Formation</a><br>";




?>