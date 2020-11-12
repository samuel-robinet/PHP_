<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Detail de la voiture</title>
    </head>
    <body>
        <?php
            echo '<p> Voiture d\'immatriculation ' . $v->getImmatriculation() ."<br> De marque ". $v->getMarque() . '.</p>';
        ?>
    </body>
</html>
