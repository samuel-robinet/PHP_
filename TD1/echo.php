<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title> Mon premier php </title>
    </head>
   
    <body>
        Voici le résultat du script PHP : 
        <?php
         
          // Pourquoi pas de retour à la ligne ?
          $texte = "hello world ! \n";

        
          echo $texte;

$prenom="Helmut";
echo <<< EOT
Texte à afficher
sur plusieurs lignes
avec caractères spéciaux \t \n
 et remplacement de variables $prenom
les caractères suivants passent : " ' $ / \ ;
EOT;
?>
<h1>Exercice 4</h1>
 <?php
          // Exercice 5
          $prenom = "Marc";

          echo "Bonjour " . $prenom;
          echo "Bonjour $prenom";
          echo 'Bonjour $prenom';
          echo "<br>";
          echo $prenom;
          echo "$prenom";



        ?>
<h1>Exercice 5 : tableau</h1>
 <?php
 
          $couleur = 'bleu';
          $immatriculation = '256AB34';
          $marque = 'Renault';

          echo "<p> Voiture  $immatriculation de marque  $marque (couleur $couleur) </p>";
      /*
           $voiture = array(
          'couleur' => 'bleu', 'rouge'
          'immatriculation' => '256AB34', '656ML65'
          'marque' => 'Renault', 'Citroen' );
          var_dump($voiture );
          */
      
          $voiture = array(
          'couleur' => 'bleu',
          'immatriculation' => '256AB34',
          'marque' => 'Renault');
          var_dump($voiture);
              
          echo "<p> Voiture $voiture[immatriculation] de marque $voiture[marque] (couleur $voiture[couleur]) </p>" ;

          $voiture1 = array(
          'couleur' => 'bleu',
          'immatriculation' => '256AB34',
          'marque' => 'Renault');

          $voiture2 = array(
          'couleur' =>'rouge',
          'immatriculation' =>'656ML65',
          'marque' => 'Citroen');

          $voitures = array(
          1 =>$voiture1,
          2 =>$voiture2);
          
          var_dump($voitures);
          
          echo "<ul> Liste";
          
          if (empty($voitures)) {
         echo "tableau vide"; } 


         foreach ($voitures as $cle => $valeur){
          echo " <li> Voiture $valeur[immatriculation] de marque $valeur[marque] (couleur $valeur[couleur]) </li>";}
          echo "</ul>"
    

/* empty */



          
        ?>
    </body>
</html> 