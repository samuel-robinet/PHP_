<!DOCTYPE html>
<html>
    <head>
        <title> Test voiture </title>
        <meta charset="utf-8" />


    </head>
   
    <body>
       <?php require_once ('Voiture.php');
       $voiture1 = new Voiture('Renault','256AB34','Bleu');
       
       /*$voiture1->setMarque('Renault');
       $voiture1->setImmatriculation('256AB34');
       $voiture1->setCouleur('Bleu');*/

       $voiture1->afficher(); 
        ?>

    </body>
</html>

