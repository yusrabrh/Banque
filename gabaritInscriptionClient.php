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
 <legend>Informations personnelles</legend>
 <p>
 <label for="pseudo">Id client :</label>
 <input type="text" name="pseudo" id="pseudo" />
 </p>
 <p>
 <label for="form_lastname">Nom : </label>
 <input type="text" id="form_lastname" name="lastname" />
 </p>
 <p>
 <label for="form_firstname">Prénom : </label>
 <input type="text" id="form_firstname" name="firstname" />
 </p>
 <p>
 <label for="adresse">Adresse : </label>
 <input type="text" id="adresse" name="adresse" />
 </p>
  <p>
 <label for="NumTel">Numero de telephone : </label>
 <input type="tel" id="NumTel" name="NumTel" />
 </p>
  <p>
 <label for="naissance">Date de naissance : </label>
 <input type="date" id="naissance" name="naissance" />
 </p>
 <p>
 <label for="profession">Profession : </label>
 <input type="text" id="profession " name="profession" />
 </p>
 <p>
 Situation familial:
 <select name="situation familial">
 <option value="marié" selected >Marié(e)</option>
 <option value="célibataire">Célibataire</option>
 <option value="divorcé">Divorcé(e)</option>
 </select>
 </p>
 <p>
 <label for="mail">Email : </label>
 <input type="email" id="mail" name="mail" />
 </p>
 <p>
 <label for="id">Id employé: </label>
 <input type="text" id="id" name="id" />
 </p>
 <p>
 <label for="date_inscription">Date_d'inscription : </label>
 <input type="date" id="fdate_inscription" name="date_inscription" />
 </p>
 <p>
   <input type="submit"  name="Enregistrer"  value="Enregistrer"/>
  </p>
  <?php echo $msg ?>
 </fieldset>
 </form >
 </body> 
 </html>
	