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
 <legend>Informations sur le contrat</legend>
 <p>
 <label for="pseudo">Id client :</label>
 <input type="text" name="pseudo" id="pseudo" />
 </p>
 <p>
 <label for="pseudo">Nom du contrat:</label>
 <input type="text" name="contrat" id="pseudo" />
 </p>
 <p>
 <label for="pseudo">Tarif mensuel:</label>
 <input type="text" name="tarif" id="contrat" />
 </p>
 <p>
 <label for="date_inscription">Date_d'inscription : </label>
 <input type="date" id="date_inscription" name="date_inscription" />
 </p>
 <p>
   <input type="submit"  name="btnsupcontr"  value="Supprimer"/>
  </p> 
  <?php echo $msg ?>
  </fieldset>
 </form >
 </body> 
 </html>
	