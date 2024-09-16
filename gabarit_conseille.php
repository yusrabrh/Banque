<!DOCTYPE html>
<html lang="eng" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>BIENVENUE A VOTRE PAGE</title>
		<link rel="stylesheet" href="gabrit_conseille.css"> 
    </head>
    <body>    
	<h1 class="question">Bienvenue à votre espace </h1>
        <form action="frontal_conseille.php" method="post">
            <div class="boutonOption">
                <div class="groupDroit">
					<p >
                        <input type="submit" name="boutonPlaning"  value="Voir le planing">
                    </p>
                    <p>
                    <input type="submit" name="btninscrire"  value="Inscrire un nouveau client à la banque">
                    </p> 
                    <p>
                        <input type="submit" name="boutonVente"  value="Vendre un contrat">
                    </p>
                    <p>
                        <input type="submit" name="boutonOuvrirCompte"  value="Ouvrir un compte">
                    </p>
                </div>
                <div class="groupGauche">
                    <p>
                        <input type="submit"  name="boutonMofifierDecouvert"  value="Modification du découvert">
                    </p>
                    <p>
                        <input type="submit" name="btnResilierContrat"  value="Résilier un contrat ">
                    </p>
                    <p>
                        <input type="submit"  name="btnResilierCompte"  value="Résilier un compte">
                    </p>
                </div>
            </div>
            <p class="boutonDeconnexion"><input type="submit" name="BoutonDeconnexionconseille" value="Se deconnecter"></p>  
        </form>
    </div>
	
	

	
	
		 
    </body>
</html>