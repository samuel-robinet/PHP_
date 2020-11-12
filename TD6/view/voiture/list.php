<?php
echo "<h3>Liste des voitures :</h3>";
echo "<ul>";
foreach ($tab_v as $v) {
    $vImmatriculationHTML = htmlspecialchars($v->getImmatriculation());
    $vImmatriculationURL = rawurlencode($v->getImmatriculation());
    echo <<< EOT
        <li> 
            Voiture d'immatriculation $vImmatriculationHTML
            <a href="?action=read&immat=$vImmatriculationURL">(+ d'info)</a>
            <a href="?action=delete&immat=$vImmatriculationURL">(supprimer)</a>.
        </li>
EOT;
}
?>