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
 <legend>Modifier le montant de decouvert:</legend>
 <p>
 <label for="pseudo">Id client :</label>
 <input type="text" name="pseudo" id="pseudo" />
 </p>
 <p>
 <label for="pseudo">Nouveau montant:</label>
 <input type="text" name="decouvert" id="decouvert" />
 </p>
   <input type="submit"  name="btnmodif"  value="Modifier"/>
  </p> 
  <?php echo $msg ?>
  </fieldset>
 </form >
 </body> 
 </html>
	