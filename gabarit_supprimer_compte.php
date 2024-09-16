<!DOCTYPE html>
<html lang="eng" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>BIENVENUE A VOTRE PAGE</title>
		<link rel="stylesheet" href="style_supprimer_compte.css"> 
    </head>
    <body> 
	<form method="post" action="frontal_conseille.php">
	<fieldset>
 <legend>Informations:</legend>
 <p>
 <label for="pseudo">Id client :</label>
 <input type="text" name="pseudo" id="pseudo" />
 </p>
 <p>
 <label for="compte">Nom du compte:</label>
 <input type="text" name="compte" id="compte" />
 </p>
 <p>
 <label for="date_ouverture">Date_d'ouvertre : </label>
 <input type="date" id="date_ouverture" name="date_ouverture" />
 </p>
 <p>
 <label for="solde">Solde actuel:</label>
 <input type="text" name="solde" id="solde" />
 </p>
 <p>
 <label for="decouvert">Montant de decouvert:</label>
 <input type="text" name="decouvert" id="decouvert" />
 </p>
 <p>
   <input type="submit"  name="btnsupcompte"  value="Supprimer"/>
  </p> 
   <?php echo $msg ?>
  </fieldset>
 </form >
 </body> 
 </html>