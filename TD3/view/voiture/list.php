<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Liste des voitures</title>
    </head>
    <body>
        <?php
        foreach ($tab_v as $v)
           // echo '<p> Voiture d\'immatriculation ' . $v->getImmatriculation() . '.</p>';
            //echo '<br>'
            echo '<p> Voiture d\'immatriculation  <a href="http://webinfo.iutmontp.univ-montp2.fr/~robinets/PHP/TD3/controller/routeur.php?action=read&immat='. $v->getImmatriculation() .'">'. $v->getImmatriculation() .'</a>.</p>'
        ?>    
    </body>
</html>
