<!DOCTYPE html>
<html>
    <head>
        <title> Formulaire voiture </title>
        <meta charset="utf-8" />


    </head>
   
    <body>
     

<form method="post" action="../../controller/routeur.php?action=created">

  <fieldset>
    <legend>Mon formulaire :</legend>
    <p>
      <label for="immat_id">Immatriculation</label> :
      <input type="text" placeholder="Ex : 256AB34" name="immatriculation" id="immat_id" required/>
    </p>
    <p>
      <label for="marque_id">Marque</label> :
      <input type="text" placeholder="Ex : Citröen" name="marque" id="marque_id" required/>
    </p>
    <p>
      <label for="couleur_id">couleur</label> :
      <input type="text" placeholder="Ex : Bleu" name="couleur" id="couleur_id" required/>
    </p>
    <p>
      <input type="submit" value="Envoyer" />
    </p>
  </fieldset> 
</form>
 



    </body>
</html>
