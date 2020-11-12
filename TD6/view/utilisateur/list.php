<?php
echo "<h3>Liste des utilisateurs :</h3>";
echo "<ul>";
foreach ($tab_u as $u) {
    $uLoginHTML = htmlspecialchars($u->get("login"));
    $uLoginURL = rawurlencode($u->get("login"));
    echo <<< EOT
        <li> 
            Utilisateur de login $uLoginHTML
            <a href="?action=read&controller=utilisateur&login=$uLoginURL">(+ d'info)</a>
        </li>
EOT;
}
?>