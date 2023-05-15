
<style>
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
// Exercice 4

// Je crée le tableau associatif de pays et capitales
$capitales = array("France"=>"Paris", "Allemagne"=>"Berlin", "USA"=>"Washington", "Italie"=>"Rome", "Espagne"=>"Madrid");

//je crée la fonction qui affiche le tableau html
function afficherTableHTML($capitales){
    asort($capitales);
    echo 
        '<table>
        <tr>
        <th>Pays</th>
        <th>Capitales</th>
        <th>Lien wiki</th>
        </tr>';
        foreach ($capitales as $pays => $capitale){
    echo
            '<tr>
            <td>' . strtoupper($pays). '</td>
            <td>' . $capitale . '</td>
            <td><a href="https://fr.wikipedia.org/wiki/'. $capitale .' "title="Lien vers la page Wikipédia de ' . $capitale . ' " target="_blank">
            Lien</a></td></tr>';
        }
    echo "</table>";
}

// J'utilise la fonction
afficherTableHTML($capitales);

?>

